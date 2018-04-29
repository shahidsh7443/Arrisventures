		<?php
		header('Access-Control-Allow-Origin: *');
		if(isset($_POST)) {
		$name = $_POST['name'];
		$qualification= $_POST['newqual'];
		$mobile= $_POST['newcontact'];
		$email= $_POST['newemail'];
		$addr= $_POST['address'];
		$subject = "Request for Registration";
		$body .="<table>";
						$body .="<tr><td>Name</td><td>: &nbsp;" . $_POST['name'] . "</td></tr>";
						$body .="<tr><td>Mobile No</td><td>: &nbsp;" . $_POST['newcontact'] . "</td></tr>";
						$body .="<tr><td>Address</td><td>: &nbsp;" . $_POST['address'] . "</td></tr>";
							$body .="<tr><td>Educational Qualification</td><td>: &nbsp;" . $_POST['newqual'] . "</td></tr>";
						$body .="</table>";
						$body .="<p><br>With Regards</p>";
						$body .="</body></html>";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:".$email. "\r\n" .
		            "CC: saleem@razorbee.com";
		$success=mail("anam@razorbee.com",$subject,$body,$headers);
		$subject = "Your request acknowledgement";
                  $body = "Dear &nbsp;" .$name.","."<br><br>"."Thanks for contacting us. One of our representatives will be contacting you shortly and do the needful.<br><br>With Regards,<br>Razorbee Online Solutions<br>razorbee.com";
                  // Always set content-type when sending HTML email
                  $headers = "MIME-Version: 1.0" . "\r\n";
                  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                  $headers .= "From:anam@razorbee.com". "\r\n";
                  $success=mail($email,$subject,$body,$headers);
		}

		?>
