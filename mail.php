<?php
header('Access-Control-Allow-Origin: *');

if(isset($_POST)) {
$subject = $_POST["subject"];
$to=$_POST["to"];
$body .="<table>";
foreach ($_POST as $key => $value) {
          
            if($key != "subject" && $key != "to")
            {
           $body .="<tr><td>".$key."</td><td>: &nbsp;" . $value. "</td></tr>";
         }
       }
       $body .="</table>";
       $body .="<p><br>With Regards.</p>";
       $body .="</body></html>";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From:".$_POST["email"]. "\r\n";
$success=mail($to,$subject,$body,$headers);
 $msg1->message = "success";

echo json_encode($msg1);
}else{
 $msg1->message = "error";

echo json_encode($msg1);
}

?>
