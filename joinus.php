<?php
if(isset($_POST['submit'])) {
  $to = "damianforums@gmail.com";
  $subject = "New Join Us form submission";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $headers = "From: ".$name." <".$email.">\r\n";
  if(mail($to, $subject, $message, $headers)) {
    echo "Thanks for submitting the form!";
  } else {
    echo "Oops, something went wrong. Please try again later.";
  }
}
?>
