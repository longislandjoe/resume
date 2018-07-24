<?php
  //Email information
  $admin_email = "longislandjoe@gmail.com";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $company = $_REQUEST['company'];
  $comment = $_REQUEST['comment'];
  $subject = "Resume Inquiry";
  $headers = 'From: "Joe Redinger"<longislandjoe@gmail.com>' . "\r\n" .
              'Reply-To: "Joe Redinger"<longislandjoe@gmail.com>' . "\r\n" ;
  $message = $name . "\r\n" . $email . "\r\n" . $company . "\r\n" . $comment;

  //send email
  mail($admin_email, $subject, $message, $headers);

  //Email response
  echo "Thank you for contacting me!";

?>
