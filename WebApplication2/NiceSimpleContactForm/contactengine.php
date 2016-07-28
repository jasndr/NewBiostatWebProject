<?php

$EmailFrom = "biostat@hawaii.edu";
$EmailTo = "biostat@hawaii.edu";
$Subject = "BQHS Inquiry";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=..\NiceSimpleContactForm\fail-error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=..\NiceSimpleContactForm\contactthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=..\NiceSimpleContactForm\fail-error.html\">";
}
?>