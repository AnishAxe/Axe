<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $remark = $_POST['remark'];

    // Recipient email address
    $to = "anishpariyar1122@gmail.com";

    // Subject of the email
    $subject = "New Payment Submission";

    // Email content
    $message = "
    <html>
    <head>
        <title>New Payment Submission</title>
    </head>
    <body>
        <h2>Payment Details</h2>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Remark:</strong> $remark</p>
    </body>
    </html>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: <$email>" . "\r\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
?>
