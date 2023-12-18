<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Compose email
    $to = "recipient@example.com";
    $subject = "New Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";

    // Send email
    $mailSuccess = mail($to, $subject, $body, $headers);

    // Check if the email was sent successfully
    if ($mailSuccess) {
        echo "Thank you for your submission!";
    } else {
        echo "Error sending the email. Please try again later.";
    }
}
?>
