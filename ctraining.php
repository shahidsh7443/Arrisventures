<?php


if(isset($_POST)) {
error_reporting(1);
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


		$subject = "Your request acknowledgement for Training";
		$body ="Dear " .$namef. "," ."<br><br>". "Thanks for business enquiry. One of our sales managers will be contacting you shortly and do the needful.<br><br>With Regards,<br>Sales Team<br> Mobile : 7353775774 <br>www.arrisventures.in";
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:gaurav@arristeck.com". "\r\n";
		$success=mail($email,$subject,$body,$headers);
		$subject = "Business Enquiry";
		// Always set content-type when sending HTML email
		$body ="<html><body>";

		$body .= "<p>Dear Rekha,<br><br>You have received an online business enquiry with the following details.</p>";
		$body .="<table>";
		$body .="<tr><td>First Name</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['namef'] . "</td></tr>";
		

$body .="<tr><td>Last Name</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['namel'] . "</td></tr>";
		$body .="<tr><td>Mobile No</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['mobile'] . "</td></tr>";
		$body .="<tr><td>Email</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['email'] . "</td></tr>";
		$body .="<tr><td>Company Name</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['compname'] . "</td></tr>";
		$body .="<tr><td>Company URL</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['compurl'] . "</td></tr>";
		


$body .="<tr><td>Location</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['cloc'] . "</td></tr>";
		$body .="<tr><td>Designation</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['desig'] . "</td></tr>";
		$body .="<tr><td>Industry Serviced</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['hire'] . "</td></tr>";
		$body .="<tr><td style='display: inline-block;overflow: hidden;white-space: nowrap;'>Services Looking for</td><td style='display: table-cell;'>:</td><td> &nbsp;" . $_POST['title'] . "</td></tr>";
               




 $body .="<tr><td style='vertical-align:  top;'>Comments</td><td style='display: inline;'>:</td><td>" . $_POST['com'] . "</td></tr>";

                $body .="</table>";


		$body .="<p>With Regards,<br>www.arrisventures.in</p>";
		$body .="</body></html>";

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= "From:".$email. "\r\n".
                            "CC: anil@arristeck.com,arvind@arristeck.com"; 

		$success1=mail("blrgaurav@yahoo.in",$subject,$body,$headers);

 $msg1->message = "success";

echo json_encode($msg1);
}

else
{
 $msg1->message = "error";

echo json_encode($msg1);
}
		?>