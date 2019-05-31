<?php

$EmailFrom = "qhs@hawaii.edu";
$EmailTo = "qhs@hawaii.edu";
$Subject = "JABSOM Biostatistics Core Inquiry";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

$response = $_POST["g-recaptcha-response"];
$url = $url = 'https://www.google.com/recaptcha/api/siteverify';

$data = array(
	'secret' => 'ItsASecret',
	'response' => $response//$_POST["g-recaptcha-response"]
);

$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
);

$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);

// validate reCaptcha
if ($captcha_success->success==false) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=..\NiceSimpleContactForm\\fail-error.html\">";
  exit;
}

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=..\NiceSimpleContactForm\\fail-error.html\">";
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
  print "<meta http-equiv=\"refresh\" content=\"0;URL=..\NiceSimpleContactForm\\contactthanks.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=..\NiceSimpleContactForm\\fail-error.html\">";
}
?>