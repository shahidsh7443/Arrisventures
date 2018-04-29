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
            	<p> Thank you for reaching us.<br /><br />We have recieved your email, our support will reach you shortly.<br /><br /><a href="/arrisventures/tecclients.php"><< Back</a></p>
                <!-- under construction hat -->
            <!--<img id="hat" src="img/thankyou.png" class="hidden-phone"/>-->
            </div>
        </div>
        </div>
    </div>
		<?php
if(isset($_POST['submit3'])) {

	$namef = $_POST['namef'];
	$namel = $_POST['namel'];
 $location= $_POST['cloc'];
 $mobile= $_POST['mobile'];
 $email= $_POST['email'];
 $compname= $_POST['compname'];
 $compurl = $_POST['compurl'];
$designation= $_POST['desig'];
$hire= $_POST['hire'];
$ct= $_POST['title'];
 $msg= $_POST['com'];
		$subject = "Your request acknowledgement";
		$body ="Dear " .$namef. "," ."<br><br>". "Thanks for business enquiry. One of our sales managers will be contacting you shortly and do the needful.<br><br>With Regards,<br><br>Sales Team<br><br> Mobile : 7353775774 <br><br>www.arristeck.com";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:shahidrazorbee@gmail.com". "\r\n";
		$success=mail($email,$subject,$body,$headers);
		if( $success== true ) {
		echo "<script type='text/javascript'>alert('Mail Sent successfully');</script>";
		}else {
		echo "<script type='text/javascript'>alert('Unable to send mail');</script>";
		}
		$subject = "Business Enquiry";
		$body = "Dear Sales Team,<br><br>You have received an online business enquiry with the following details.<br/><br/>Fisrt Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$namef. "<br/><br/>Last Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:".$namel. "<br/><br/>Mobile No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$mobile. "<br/><br/>Email Id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$email. "<br/><br/>Company Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$compname."<br/><br/>Company URL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$compurl. "<br/><br/>Company Loc. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$location. "<br/><br/>Designation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$designation."<br/><br/>Industry Serviced &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: " .$hire. "<br/><br/>Services Looking &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:" .$ct. "<br><br>Comments <br><br>:" .$msg. "<br><br>With Regards,<br>www.arrisventures.in";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:".$email. "\r\n";
		$success1=mail("shahidrazorbee@gmail.com",$subject,$body,$headers);
		/*if( $success1== true ) {
		echo "<script type='text/javascript'>alert('Mailqq Sent successfully');</script>";
		}else {
		echo "<script type='text/javascript'>alert('Unableqq to send mail');</script>";
	}*/
		}
		?>

    <footer>
    	<span id="footer_text">2013 All Rights Reserved. ArrisVentures.</span>
    </footer>
</body>
</html>
