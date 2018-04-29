<?php
session_start();
class phpmailerAppException extends Exception {
  public function errorMessage() {
    $errorMsg = '<strong>' . $this->getMessage() . "</strong><br>";
    return $errorMsg;
  }
}

try {
  //$to = "gaurav@arristeck.com";
 $to = "anand@iqstudios.co.in";
  if(filter_var($to, FILTER_VALIDATE_EMAIL) === FALSE) {
    throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!<br>");
  }
} catch (phpmailerAppException $e) {
  echo $e->errorMessage();
  return false;
}

require_once("PHPMailer/class.phpmailer.php");

$mail = new PHPMailer();
$name=$_POST['name'];
$loc=$_POST['location'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$body = "
Dear Gaurav,<br><br>
Please find the message posted by one of the visitor on ArrisVenture website.<br><br>
<table>
<tr><td><b>Candidate Name</b></td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;$name</td></tr>
<tr><td><b>Current Location</b></td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;$loc</td></tr>
<tr><td><b>Mobile No</b></td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;$mobile</td></tr>
<tr><td><b>Email Id</b></td><td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;$email</td></tr>
<tr><td colspan='2'><b>Message&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp; :</b></td></tr>
<tr><td colspan='2'>$msg</td></tr></table><br><br>
Regards<br>
ArrisVentures";
$mail->IsSMTP();  // telling the class to use SMTP
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;
$mail->Port       = 25;
//$mail->Host       = "mail.arristeck.com";
$mail->Host       = "mail.getset.in";
//$mail->Username   = "admin@arristeck.com";
$mail->Username   = "admin@getset.in";
$mail->Password   = "IqstudiosAdmin";
//$mail->AddReplyTo('admin@arristeck.com','Admin');
$mail->AddReplyTo('admin@getset.in','Admin');

//$mail->From       = 'admin@arristeck.com';
$mail->From       = 'admin@getset.in';
$mail->FromName   = 'ArrisVenture';

$mail->AddAddress('gaurav@arristeck.com','Gaurav');
//$mail->AddAddress('anand@iqstudios.co.in','Anand');
//$mail->AddAddress('harshini@iqstudios.co.in','Harshini');
//$mail->AddAddress('prasanna@iqstudios.co.in','Prasanna');


  
$mail->Subject  = "Message from ArrisVenture Website";

require_once('PHPMailer/class.html2text.inc');
$h2t =& new html2text($body);
$mail->AltBody = $h2t->get_text();
$mail->WordWrap   = 80; // set word wrap

$mail->MsgHTML($body);

//$mail->AddAttachment("images/aikido.gif", "aikido.gif");  // optional name
//$mail->AddAttachment("images/phpmailer.gif", "phpmailer.gif");  // optional name

try {
  if ( !$mail->Send() ) {
    $error = "Unable to send to: " . $to . "<br>";
    throw new phpmailerAppException($error);
  } else {
  	$_SESSION['error_msg']="Thank you for contacting us. If required we will get back to you shortly.";
    header('location:contact.php');
	
  }
} catch (phpmailerAppException $e) {
  $errorMsg[] = $e->errorMessage();
}

if ( count($errorMsg) > 0 ) {
  foreach ($errorMsg as $key => $value) {
    $thisError = $key + 1;
    echo $thisError . ': ' . $value;
  }
}