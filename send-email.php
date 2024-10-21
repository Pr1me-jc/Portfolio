<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['Name']));
    $email = htmlspecialchars(trim($_POST['Email']));
    $message = htmlspecialchars(trim($_POST['Message']));
    
    $to = "carlogabia017@gmail.com";
    $subject = "New message from contact form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request.";
}
?>
