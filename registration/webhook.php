<?php


require 'vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$stripe = new \Stripe\StripeClient($_ENV['STRIPE_SECRET']);
$endpoint_secret = $_ENV['STRIPE_WEBHOOK_SECRET'];

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$apiKey = $_SERVER['DMC_API_Key'];

$event = null;

try {
    $event = \Stripe\Webhook::constructEvent(
        $payload,
        $sig_header,
        $endpoint_secret
    );
} catch (\UnexpectedValueException $e) {
    // Invalid payload
    http_response_code(400);
    exit();
} catch (\Stripe\Exception\SignatureVerificationException $e) {
    // Invalid signature
    http_response_code(400);
    exit();
}

// Handle the event
switch ($event->type) {
    case 'checkout.session.completed':
        $session = $event->data->object;
        $status = 0;
        if ($session->status == 'complete') {
            $status = 1;
        }
        $data = array(
            "payment_ref" =>  $session->payment_intent,
            "amount_total" => $session->amount_total / 100,
            "status" => $status,
        );

        $json = json_encode($data);
        $url = $_ENV['SERVER_ENDPOINT'] .  "/api/applications/" .  $session->client_reference_id . "/payment";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($json),
            'DMC-API-Key:' . $apiKey,
            'Accept:' .  'application/json',

        ));
        $response = curl_exec($ch);
        curl_close($ch);
    default:
        echo 'Received unknown event type ' . $event->type;
}

http_response_code(200);
