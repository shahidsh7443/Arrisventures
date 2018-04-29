<?php

header('Access-Control-Allow-Origin: *');
if(isset($_POST)) {
require 'PHPMailer/PHPMailerAutoload.php';
$name = $_POST['name'];
$location= $_POST['location'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$msg= $_POST['msg'];
$pp=$_POST['pasteprofile'];
$subject = "Your resume submission acknowledgement for Interviewing Opportunity";
$body = "Dear " .$name.","."<br><br>"."Thanks for sharing your resume. One of our managers will be contacting you shortly and do the needful.<br><br>With Regards,<br>ArrisEvaluation Team<br>www.arrisventures.in";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:gaurav@arristeck.com". "\r\n";
$success=mail($email,$subject,$body,$headers);
if($pp!="")
{
  $res="Please find the resume pasted for your kind perusal and further processing.";
  $pst=$_POST['pasteprofile'];
}
else {
  $res="Please find the resume attached for your kind perusal and further processing.";
  $atc=$_POST['pasteprofile'];
}
try {
    $mail = new PHPMailer;
    $mail->FromName   = $_POST['name'];
    $to_email ="rekha@arristeck.com";
    $mail->AddAddress($to_email);
    $mail->From       = $_POST['email'];
    $mail->AddCC("anil@arristeck.com","anil");
    $mail->AddCC("arvind@arristeck.com","arvind");
    $mail->Subject  = "Interviewer Profile";
    $body ="<html><body>";
    $body .= "<p>Dear Rekha,<br><br>You have received an online Trainer Profile from " . $_POST['name'] . " with the following details.</p>";
    $body .="<table>";
    $body .="<tr><td>Name</td><td>: &nbsp;" . $_POST['name'] . "</td></tr>";
    $body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['mobile'] . "</td></tr>";
    $body .="<tr><td>Email</td><td>: &nbsp;" . $_POST['email'] . "</td></tr>";
    $body .="<tr><td>Location</td><td>: &nbsp;" . $_POST['location'] . "</td></tr>";
    $body .="<tr><td>Message</td><td>: &nbsp;" . $_POST['msg'] . "</td></tr>";
    $body .="<tr><td>Resume</td><td>: &nbsp;</td></tr>";
    $body .="</table>";
    $body .="<p style='margin-top:5px;padding-left:3px;'>" . $pst . "</p>";
    $body .="<p style='padding-left:3px;'>" . $res . "</p>";
    $body .="<p style='padding-left:3px;'>" . $atc . "</p>"; 
    $body .="<p style='padding-left:3px;'>With Regards,<br>www.arrisventures.in</p>";
    $body .="</body></html>";
    $mail->MsgHTML($body);
    $mail->IsSendmail();
    $mail->AddReplyTo($mailfrom);
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    $mail->WordWrap   = 80;
    $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    $mail->IsHTML(true);
    $mail->Send();
    $msg1->message = "success";

echo json_encode($msg1);


      }
catch (phpmailerException $e) {

$msg1->message = $e->errorMessage();

echo json_encode($msg1);

}
}
?>
