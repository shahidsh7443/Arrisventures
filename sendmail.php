<?php

header('Access-Control-Allow-Origin: *');

echo "send successfull";


echo "----before---";

print_r($_FILES);
echo "-----after--";

print_r($_POST);
if(isset($_POST)) {
  echo "inside";
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
$headers .= "From:resumes@arristeck.com". "\r\n";
$success=mail($email,$subject,$body,$headers);
if( $success== true ) {
echo " 111111111";
}else {
echo "222222";
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
else if($cat=="arristr"){
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
  if($msg=="")
  {
  $test= "Attached";
  }
  else
  {
  $test= "";
  }
try {
    $mail = new PHPMailer;
    $mail->FromName   = $_POST['name'];
    $to_email ="resumes@arristeck.com";
    $mail->AddAddress($to_email);
    $mail->From       = $mailfrom;
    $mail->Subject  = $subject;
    $body ="<html><body>";
    $body .= "<p>Dear Recruiter,<br><br>Please find the resume of " . $_POST['name'] . " with the following details. This resume has been submitted through Arris Website for your kind perusal and further processing.</p>";
    $body .="<table>";
    $body .="<tr><td>Name</td><td>: &nbsp;" . $_POST['name'] . "</td></tr>";
    $body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['mobile'] . "</td></tr>";
    $body .="<tr><td>Email</td><td>: &nbsp;" . $_POST['email'] . "</td></tr>";
    $body .="<tr><td>Location</td><td>: &nbsp;" . $_POST['location'] . "</td></tr>";
    $body .="<tr><td>Resume</td><td>: &nbsp;" .$test. "</td></tr>";
    $body .="</table>";
    $body .="<p>" . $_POST['msg'] . "</p>";
    $body .="<p>With Regards,<br>www.arrisventures.in</p>";
    $body .="</body></html>";
    $mail->MsgHTML($body);
    $mail->IsSendmail();
    $mail->AddReplyTo($mailfrom);
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
    $mail->WordWrap   = 80;
    $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    $mail->IsHTML(true);
    $mail->Send();
    echo "success";
      }
catch (phpmailerException $e) {
  echo $e->errorMessage();
}
}
?>
