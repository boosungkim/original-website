<?php

// Variables
$errorMsg='';
$msgClass='';

if (isset($_POST['submit'])) {
  // Direct Variables
  $mailTo = "boosungk@gmail.com";
  // Getting form data variables

  if(!empty($_POST['website'])) die();
  
  // Message
  if (empty($_POST['message'])) {
    $errorMsg = "Message is empty";
  } else {
    $message = $_POST['message'];
  }
  // Subject
  if (empty($_POST['subject'])) {
    $errorMsg = "Subject is empty";
  } else {
    $subject = $_POST['subject'];
  }
  // Name
  if (empty($_POST['name'])) {
    $errorMsg = "Name is required";
  } else {
    $senderName = $_POST['name'];
  }
  // Email
  if (empty($_POST['mail'])) {
    $errorMsg = "Email is required";
  } else {
    $mailFrom = $_POST['mail'];
    if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
      $errorMsg = "Email formatting is wrong";
    }
  }

  // Some data organization
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$senderName.".\n\n".$message;

  if (strlen($errorMsg) != 0) {
    header("Location: ../contactme.php?x=$errorMsg");
    // $_SESSION['Error'] = "You left one or more of the required fields.";
  } else {
    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../index.php?mailsent");
  }
}


 ?>
