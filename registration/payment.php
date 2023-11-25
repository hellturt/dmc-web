<?php

require __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$id = $_GET['id'];

\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET']);
header('Content-Type: application/json');

$checkout_session = \Stripe\Checkout\Session::create([
    'mode' => 'payment',
    'client_reference_id' => $id,
    'payment_method_types' => ['card', 'fpx'],
    'success_url' => $_ENV['PAYMENT_SUCCESS_REDIRECT_PATH'],
    'line_items' => [
        [
            'quantity' => 1,
            'price_data' => [
                'currency' => 'myr',
                'unit_amount' => 2000,
                'product_data' => [
                    'name' => 'CTOS and Credit Report'
                ]
            ]
        ]
    ]
]);
http_response_code(303);
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
