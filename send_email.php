<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $interest = $_POST['interest'];
    $message = $_POST['message'];

    // File upload
    $resume = $_FILES['resume'];
    $resumeName = $resume['name'];
    $resumeTmpName = $resume['tmp_name'];
    $resumeType = $resume['type'];
    $resumeSize = $resume['size'];

    // Set email headers
    $headers = "From: $email";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";

    // Set email subject
    $subject = 'DMC FinCap Web Career Form';

    // Email body
    $body = "--boundary\r\n";
    $body .= "Content-type: text/plain; charset=utf-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $body .= "Name: $name\r\n";
    $body .= "Interest: $interest\r\n";
    $body .= "Email: $email\r\n";
    $body .= "Phone: $tel\r\n";
    $body .= "Message:\r\n$message\r\n\r\n";

    // Attach resume
    $body .= "--boundary\r\n";
    $body .= "Content-type: $resumeType\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; filename=\"$resumeName\"\r\n\r\n";
    $body .= chunk_split(base64_encode(file_get_contents($resumeTmpName))) . "\r\n";

    // Send email
    $mailResult = mail('hr@dmcfincap.com.my', $subject, $body, $headers);

    // Display response message
    if ($mailResult) {
        echo 'success';
    } else {
        echo 'fail';
    }
} else {
    echo 'Invalid request.';
}
