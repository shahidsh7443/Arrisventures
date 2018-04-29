		<?php
		header('Access-Control-Allow-Origin: *');
		echo "-----after--";
		if(isset($_POST)) {
		$name = $_POST['name'];
		$location= $_POST['location'];
		$mobile= $_POST['mobile'];
		$email= $_POST['email'];
		$msg= $_POST['msg'];
		$subject = "Request for information regarding ArrisWellness";
                $body ="<html><body>";
                $body .= "<p>Dear Arris Team,<br><br>You have received an online enquiry with the following details. </p>";
		$body .="<table>";
						$body .="<tr><td>Name</td><td>: &nbsp;" . $_POST['name'] . "</td></tr>";
						$body .="<tr><td>Location</td><td>: &nbsp;" . $_POST['location'] . "</td></tr>";
						$body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['mobile'] . "</td></tr>";
                                                $body .="<tr><td>Email</td><td>: &nbsp;" . $_POST['email'] . "</td></tr>";
						$body .="<tr><td>Message</td><td>: &nbsp;</td></tr>";
						$body .="</table>";
                                                $body .="<p style='word-wrap:break-word;'>" . $_POST['msg'] . "</p>";
						$body .="<p>With Regards,<br>www.arrisventures.in</p>";
						$body .="</body></html>";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:".$email. "\r\n";
		$success=mail("info@arristeck.com",$subject,$body,$headers);
		if( $success== true ) {
		echo "111";
		}else {
		echo "222";
		}
                  $subject = "Your request acknowledgement";
                  $body = "Dear " .$name.","."<br><br>"."Thanks for contacting us. One of our representatives will be contacting you shortly and do the needful.<br><br>With Regards,<br>ArrisWellness Team<br>Mobile : 7353775774<br>www.arrisventures.in";
                  // Always set content-type when sending HTML email
                  $headers = "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                  $headers .= "From:info@arristeck.com". "\r\n";
                  $success=mail($email,$subject,$body,$headers);
                  if( $success== true ) {
                  echo " 111111111";
                  }else {
                  echo "222222";
                  }
		}
		
		?>
