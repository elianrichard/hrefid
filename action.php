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

  $txt = "From: ".$name."< email:".$email." Phone: ".$phone." >"."<br><br>".$message;
  
  mail($mailTo, $subject, $txt, $headers);

  $previousPage = $_SERVER["HTTP_REFERER"];
  header('Location: '.$previousPage);
}

?>