<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <hellturt@gmail.com>' . "\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // echo "Email sent successfully!";
        echo "success";
    } else {
        // echo "Failed to send email.";
        echo "fail";
    }
} else {
    echo "Invalid request.";
}
