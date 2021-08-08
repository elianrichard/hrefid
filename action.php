<?php

if (filter_has_var(INPUT_POST, 'submit')) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $company = $_POST['company'];
  $message = $_POST['message'];
  
  $subject = 'Email from elianrichard.my.id contact form';
  $mailTo = 'admin@hrefid.elianrichard.my.id';
  
  $headers = "MIME-Version: 1.0"."\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
  
  $headers .= "From: ".$name."< email:".$email." Phone: ".$phone." >"."\r\n";

  $txt = '<h4>Name</h4><p>'.$name.'</p>
  <h4>Email</h4><p>'.$email.'</p>
  <h4>Company</h4><p>'.$company.'</p>
  <h4>Phone</h4><p>'.$phone.'</p>
  <h4>Message</h4><p>'.$message.'</p>
  ';
  
  mail($mailTo, $subject, $txt, $headers);

  $previousPage = $_SERVER["HTTP_REFERER"];
  header('Location: '.$previousPage);
}

?>