<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set the recipient email address
  $recipient = "cancun2rent@gmail.com";

  // Set the email subject
  $subject = "New Contact Form Submission";

  // Set the email body
  $body = "Name: $name\nEmail: $email\nMessage: $message";

  // Set the headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($recipient, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Oops! Something went wrong. Please try again later.";
  }
}
?>
