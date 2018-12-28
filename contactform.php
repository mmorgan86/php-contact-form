<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "michael1986morgan@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have recieved mail from: ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);

  header("Location: index.php?mailsend");

} 