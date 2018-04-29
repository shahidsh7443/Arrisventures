<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-responsive.css">
<!-- google web font -->
<link href='http://fonts.googleapis.com/css?family=Simonetta' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ArrisTech || Under Construction</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-itouch-icon" href="img/favicon.png">

<script src="js/html5shiv.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
	var height1=$('body').height()-574;
	$("footer").css("margin-top",height1);
})
</script>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <script type="text/javascript">
$(function(){
	var height1=$('body').height()-513;
	$("footer").css("margin-top",height1);
})
</script>
<![endif]-->
<style>
	#error
	{
	margin-left: 100px;
	position: relative;
	top:30px;
	color:blue;
	font-weight: bold;
	}
</style>
</head>

<body>
	<div class="row-fluid">
    	<div class="span3 offset2"><img id="logo" src="img/logo.png" alt="ArrisTech Logo"></div>
    </div>
    <div class="row-fluid">
    	<div class="span12"><div id="dashed"></div></div>
    </div>
    <div class="row-fluid">
    	<div class="span6 offset3"><h2 id="construction">Thank you for Reaching us.</h2></div>
    </div>
    <div class="row-fluid">
    	<div class="span4 offset4" id="panel">
            <div id="white">
            	<p> Thank you for reaching us.<br /><br />We have recieved your email, our support will reach you shortly.<br /><br /><a href="/arrisventures/contact.php"><< Back</a></p>
                <!-- under construction hat -->
            <!--<img id="hat" src="img/thankyou.png" class="hidden-phone"/>-->
            </div>
        </div>
        </div>
    </div>
		<?php
if(isset($_POST['submit1'])) {
	require 'PHPMailer/PHPMailerAutoload.php';
	$name = $_POST['name'];
 $location= $_POST['location'];
 $mobile= $_POST['mobile'];
 $email= $_POST['email'];
 $msg= $_POST['msg'];
 $pp=$_POST['file'];
		$subject = "Your profile submission acknowledgement";
		$body = "Dear " .$name.","."<br><br>"."Thanks for sharing your profile. One of our managers will be contacting you shortly and do the needful.<br><br>With Regards,<br>ArrisVentures Team<br>www.arrisventures.in";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:shahidrazorbee@gmail.com". "\r\n";
		$success=mail($email,$subject,$body,$headers);
		if( $success== true ) {
		echo "<script type='text/javascript'>alert('Your resume is submitted successfully');</script>";
		}else {
		echo "<script type='text/javascript'>alert('Unable to send mail');</script>";
		}
		$mailfrom = $_POST['email'];
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
		else if($cat=="arrisev"){
			$subject="Resume for opportunities with ArrisEvaluation";
			}
			else if($cat=="arrissy"){
				$subject="Resume for opportunities with ArrisSystems";
				}
				else if($cat=="arriscon"){
					$subject="Resume for opportunities with ArrisConsulting";
					}
					else if($cat=="arrispol"){
						$subject="Resume for opportunities with ArrisPolymers";
						}
						else if($cat=="arriswe"){
							$subject="Resume for opportunities with ArrisWellness";
							}
		else {
			$subject="Resume for opportunities with ArrisFooundation";
			}
		try {
				$mail = new PHPMailer;
				$mail->FromName   = $_POST['name'];
				$to_email ="shahidrazorbee@gmail.com";
				$mail->AddAddress($to_email);
				$mail->From       = $mailfrom;
				$mail->Subject  = $subject;
			$body ="Dear Gaurav,<br><br>Please find the resume of " .$name. " with the following details. This resume has been submitted through Arris Website for your kind perusal and further processing.<br><br>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$name. "<br><br>Mobile No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$mobile. "<br><br>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$email. "<br><br>Location&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$location. "<br><br>Resume:<br><br>".$msg. "<br>";
				$mail->MsgHTML($body);
				$mail->IsSendmail();
				$mail->AddReplyTo($mailfrom);
				$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
				$mail->WordWrap   = 80;
				$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
				$mail->IsHTML(true);
				$mail->Send();
					}
 catch (phpmailerException $e) {
			echo $e->errorMessage();
		}
		}
		?>

    <footer>
    	<span id="footer_text">2013 All Rights Reserved. ArrisVentures.</span>
    </footer>
</body>
</html>
