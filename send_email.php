<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $to = "admin@dotme.com.my";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $email . "\r\n";

    // Send email
    $mail_sent = mail($to, $subject, $message, $headers);
    if ($mail_sent) {
        echo "success";
    } else {
        echo "fail";
    }
} else {
    echo "Invalid request.";
}
