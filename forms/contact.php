<?php

$receiving_email_address = 'mzo2108s@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = 'From:' . $_POST['email'] .
  "\r\n" . 'Reply-To:' . $_POST['email'] .
  "\r\n" . 'X-Mailer: PHP/' . phpversion() .
  "\r\n" . 'Content-Type: text/plain; charset=utf-8';

$success = mail($receiving_email_address, $subject, $message, $headers);
if (!$success) {
  $errorMessage = error_get_last()['message'];
} else {
  echo "OK";
}

?>
