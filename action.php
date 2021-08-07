<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $company = $_POST['company'];
  $message = $_POST['message'];

  $subject = 'Email from elianrichard.my.id contact form'
  $mailTo = 'admin@elianrichard.my.id';
  $headers = 'Message from '.$email;
  $txt = 'You have recieved an email from '.$name.' ('.$company.'). Phone: '.$phone.'\n\n'.$message;

  mail($mailTo, $subject, $txt, $headers);
  header('Location: contact-us?mailsend')
}