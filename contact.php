<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "roy.prajapat.143@gmail.com"; 
    $subject = "New Contact from Portfolio";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Thank you, $name! Your message has been sent.";
    } else {
        echo "❌ Sorry, something went wrong. Please try again.";
    }
}
?>
