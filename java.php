<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sujalrajput0710@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    $body = "Name: $name\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers))
    {
        echo "Message sent successfully!";
    }
    else
    {
        echo "Error sending message.";
    }
}
else
{
    echo "Error: Invalid request.";
}
?>