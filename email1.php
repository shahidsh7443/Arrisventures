<?php
if(isset($_POST['submit'])) {
  
    $name = $_POST['name'];
    $location= $_POST['location'];
    $mobile= $_POST['mobile'];
    $email= $_POST['email'];
    $msg= $_POST['msg'];
    $subject = "Request";
    $body = "Name:" .$name. "<br/><br/>Location:" .$location. "<br/><br/>Mobile:" .$mobile. "<br/><br/>Message:" .$msg."<br/><br/>Thank you";
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:".$email. "\r\n";
    mail("shahidrazorbee@gmail.com",$subject,$body,$headers);
    }
?>
