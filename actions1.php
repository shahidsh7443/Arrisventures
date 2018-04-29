<?php
session_start();
if(isset($_POST['action'])){
    $action = $_POST['action'];
}else{exit;}
switch ($action) 
{
case "send_mail_contact":
send_mail_contact();
break;
case "send_mail_career":
send_mail_career();
break;
case "upload_resume":
upload_resume();
break;
}
function send_mail_contact()
{
class phpmailerAppException extends Exception {
  public function errorMessage() {
    $errorMsg = '<strong>' . $this->getMessage() . "</strong><br>";
    return $errorMsg;
  }
}

try {
  $to = "gaurav@arristeck.com";
 //$to = "anand@iqstudios.co.in";
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
$loc=$_POST['address'];
$mobile=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$body = "
Dear Gaurav,<br><br>
Please find the message posted by one of the visitor on ArrisVenture website.<br><br>
<table>
<tr><td><b>Candidate Name</b></td><td>:&nbsp;&nbsp;$name</td></tr>
<tr><td><b>Current Location</b></td><td>:&nbsp;&nbsp;$loc</td></tr>
<tr><td><b>Mobile No</b></td><td>:&nbsp;&nbsp;$mobile</td></tr>
<tr><td><b>Email Id</b></td><td>:&nbsp;&nbsp;$email</td></tr>
<tr><td><b>Message</b></td><td>:</td></tr>
<tr><td colspan='2'>$msg</td></tr></table><br>
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
$mail->AddReplyTo('admin@arristeck.com','Admin');

//$mail->From       = 'admin@arristeck.com';
$mail->From       = 'admin@arristeck.com';
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
  	//$_SESSION['error_msg']="Thank you for contacting us. If required we will get back to you shortly.";
	echo "<script>alert('Thank you for contacting us. If required we will get back to you shortly.')</script>";
   // header('location:contact.php');
	
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
}

function send_mail_career()
{
class phpmailerAppException extends Exception {
  public function errorMessage() {
    $errorMsg = '<strong>' . $this->getMessage() . "</strong><br>";
    return $errorMsg;
  }
}

try {
  $to = "gaurav@arristeck.com";
 //$to = "anand@iqstudios.co.in";
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
$loc=$_POST['address'];
$mobile=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$cat=$_POST['cat'];
if($cat=="general")
{
$subject="Resume for opportunities with ArrisVentures";
}
else if($cat=="arristech"){
	$subject="Resume for opportunities with ArrisTechnologies";
	}
else if($cat=="arristrr"){
	$subject="Resume for opportunities with ArrisTrraining";
	}
else if($cat=="arriswe"){
	$subject="Resume for opportunities with ArrisWellness";
	}
else if($cat=="arrisfoo"){
	$subject="Resume for opportunities with ArrisFooundation";
	}
$body = "
Dear Recruiter,<br><br>
Please find the resume of $name with the following details. This resume has been submitted through Arris Website for your kind perusal and further processing.
<br><br>
<table>
<tr><td><b>Candidate Name</b></td><td>:&nbsp;&nbsp;$name</td></tr>
<tr><td><b>Current Location</b></td><td>:&nbsp;&nbsp;$loc</td></tr>
<tr><td><b>Mobile No</b></td><td>:&nbsp;&nbsp;$mobile</td></tr>
<tr><td><b>Email Id</b></td><td>:&nbsp;&nbsp;$email</td></tr>
<tr><td><b>Resume</b></td><td>:&nbsp;&nbsp;</td></tr>
<tr><td colspan='2'>$msg</td></tr></table><br>
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
$mail->AddReplyTo('admin@arristeck.com','Admin');



//$mail->From       = 'admin@arristeck.com';
$mail->From       = 'admin@arristeck.com';

$mail->FromName   = 'ArrisVenture';

$mail->AddAddress('gaurav@arristeck.com','Gaurav');
//$mail->AddAddress('anand@iqstudios.co.in','Anand');
//$mail->AddAddress('harshini@iqstudios.co.in','Harshini');
//$mail->AddAddress('prasanna@iqstudios.co.in','Prasanna');

  
$mail->Subject  = "$subject";

require_once('PHPMailer/class.html2text.inc');
$h2t =& new html2text($body);
$mail->AltBody = $h2t->get_text();
$mail->WordWrap   = 80; // set word wrap

$mail->MsgHTML($body);
//$mail->AddAttachment('C:\Documents and Settings\Administrator\Desktop\tamplates.docx');

//$mail->AddAttachment("images/aikido.gif", "aikido.gif");  // optional name
//$mail->AddAttachment("images/phpmailer.gif", "phpmailer.gif");  // optional name

try {
  if ( !$mail->Send() ) {
    $error = "Unable to send to: " . $to . "<br>";
    throw new phpmailerAppException($error);
  } else {
  	//echo "Resume Sent Successfully";
	echo "<script>alert('Resume Sent Successfully')</script>";
    //header('location:careers.php');
	
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
	
}
