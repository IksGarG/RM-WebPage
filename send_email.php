<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "reki0103@gmail.com"; // Replace with your own email address
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo "Thank you for your message. We will be in touch soon!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>