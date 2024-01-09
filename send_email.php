<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $to = "pathummadhurang@gmail.com";
  $subject = "New Form Submission";
  $body = "Name: " . $_POST['name'] . "\n\nEmail: " . $_POST['email'] . "\n\nMessage: " . $_POST['message'];
  $headers = "From: " . $_POST['email'];

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Error sending message.";
  }
}
?>
