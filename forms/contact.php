<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "rishanpc@gmail.com";
  $body = "From: $name <$email>\nSubject: $subject\n\n$message";

  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
