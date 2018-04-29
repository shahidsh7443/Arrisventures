<?php
session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact || ArrisTrraining </title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-responsive.css">

  <!-- My Styles -->
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
  <link rel="stylesheet" type="text/css" href="css/clients.css" />
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css"?ver=1.0/>
  <link rel="stylesheet" type="text/css" href="css/style1.css"/>


<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-itouch-icon" href="img/favicon.png">
<style>
textarea{resize:none; width:100%; height:200px;}
input{width:70%; text-align:left;}
/*.span4{border:1px solid #f00;}
iframe{padding-right:2em; margin-right:1em;}*/
h4{text-align:center; border-bottom:3px double #00b8bb; border-top:3px double #00b8bb; padding:1em;}
#distances{clear:left; margin-top:3em;}
table tr td{padding:0.28em; padding-right:4.5em;}
#success_msg
{
	position:relative;
	bottom:20px;
}
thead{font-weight:bold;}
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() {
$("#trctf").submit(function(e){
e.preventDefault();
if (!send_mail1_contact() )
return;
var form_data = new FormData(this);
//$(this).serialize(),
$.ajax({
              url: 'tekthankyou.php',
              type: 'post',
              dataType : 'json',
                         contentType: false,
                         cache: false,
                         processData:false,
              data: form_data,
              success: function(  ){
              $("#ctbt").closest("div").append("<span class='error' style='color:White;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -28px;margin-left: -179px;'>Thank you for contacting us</span>");
                $('#trctf')[0].reset();
             },
              error: function( aa ){
                $("#ctbt").closest("div").append("<span class='error' style='color:White;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -28px;margin-left: -179px;'>Failed</span>");
              
              }
          });


});
});
</script>
</head>

<body>
	<div class="container-fluid at">

	<!-- Header Row -->
	<div class="row-fluid">
        <div class="span3 offset1"><!--Logo content-->
          <img id="logo" src="img/train.png" alt="ArrisTechnologies Logo" class="js trl"  />

        </div>

        <div class="span7 spann7"><!--Navigation-->
          <ul id="nav" class="js">
          <li ><a href="arristraining.php" class="tooltip1">Home<span class="hidden-phone tt">The Genesis</span></a></li>
            <li ><a href="skills.php" class="tooltip1"><span>Skills</span><span class="hidden-phone tt">Our Abilities</span></a>
            </li>
            <li ><a href="training.php" class="tooltip1"><span>Trainers</span><span class="hidden-phone tt">Our Strength</span></a>
            </li>
            <li><a href="tecclients.php" class="tooltip1"><span>Clients</span><span class="hidden-phone tt">Our Pride</span></a>
            	            </li>
            <li><a href="About.php" class="tooltip1">About<span class="hidden-phone tt">Our Intent</span></a></li>
            <li class="selected "><a href="tekcontact.php" class="tooltip1">Contact<span class="hidden-phone tt">Contact-Us</span><span class="hidden-phone tt">Get Started</span></a></li>
          </ul>
        </div>
  	</div><!-- end of header row -->

  <!-- *************** Main Content Area ******************** -->

    <!-- Content -->
  <div class="row-fluid">
		<div class="text_content span10 offset1 ctt">
			<!--Text Content-->
			<h1>Contact</h1>
			<div id="address" class="row-fluid">


						<div>
						<div class="span4">
							<p style="width:102%;border-bottom: 1px solid rgba(255, 255, 255, 0.05);"><b>Corporate Office :</b> #25, Old 22/1, 9th Cross, 5th Main N R Colony Bangalore - 560 019<br/><span >Address URL:</span> <a style="color:#0000ff;" target="_blank" href="https://maptags.in/Arris">https://maptags.in/Arris</a><br>
+91 7353775774&nbsp;&nbsp;|&nbsp;&nbsp;<a style="color:#0000ff;" target="_blank" class="withicons" href="https://maptags.in/Arris">View Location</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="mailto:info@arristeck.com" style="color:#0000ff;">info@arristeck.com</a></p>
<hr style="border:0.5px solid black;">
<p style="width:102%;"><b>Branch Office</b> : Manyata Embassy Business Park Ground Floor E1 Block, Beech Building, Outer Ring Road, Bangalore - 560 045&nbsp;&nbsp;|&nbsp;&nbsp;+91 80 42764545<br><span style="color:#0000ff;">Address URL: </span><a style="color:#0000ff;" target="_blank" href="https://maptags.in/Arrism">https://maptags.in/Arrism</a><br>
+91 7353530777&nbsp;&nbsp;|&nbsp;&nbsp;<a style="color:#0000ff;" target="_blank" class="withicons" href="https://maptags.in/Arrism">View Location</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="mailto:anil@arristeck.com" style="color:#0000ff;">anil@arristeck.com</a></p>
</span></p>
</div><br />
						<div class="span8" style="margin-top:-9px;">
				 <!--<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Arristeck+Ventures&amp;aq=&amp;sll=12.936843,77.567087&amp;sspn=0.001399,0.002642&amp;ie=UTF8&amp;hq=Arristeck+Ventures&amp;hnear=&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=16692631713259041927&amp;ll=12.936788,77.566336" target="_blank" style="color:#0000FF;text-align:right">View Larger Map</a>-->

				 <iframe id="gmap" style="float:right" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Arristeck+Ventures&amp;aq=&amp;sll=12.936843,77.567087&amp;sspn=0.001399,0.002642&amp;ie=UTF8&amp;hq=Arristeck+Ventures&amp;hnear=&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=16692631713259041927&amp;ll=12.936788,77.566336&amp;output=embed"></iframe><br />


						<!--<small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=+9th+Cross,+NR+Colony,+Basavanagudi,+Bangalore,+Karnataka,+India+&amp;aq=&amp;sll=12.936631,77.566768&amp;sspn=0.001399,0.002642&amp;ie=UTF8&amp;hq=&amp;hnear=9th+Cross+Rd,+NR+Colony,+Basavanagudi,+Bangalore,+Karnataka,+India&amp;t=m&amp;z=14&amp;ll=12.936537,77.566486" target="_blank" style="color:#0000FF;text-align:left">View Larger Map</a></small><br />
						<iframe id="gmap" style="float:left" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+9th+Cross,+NR+Colony,+Basavanagudi,+Bangalore,+Karnataka,+India+&amp;aq=&amp;sll=12.936631,77.566768&amp;sspn=0.001399,0.002642&amp;ie=UTF8&amp;hq=&amp;hnear=9th+Cross+Rd,+NR+Colony,+Basavanagudi,+Bangalore,+Karnataka,+India&amp;t=m&amp;z=14&amp;ll=12.936537,77.566486&amp;output=embed"></iframe><br />-->
					</div>
						</div>
						<div>

						</div>
				</div><!--END of current address section-->
<p class="sep"></p>
				<div class="row-fluid">
					<div class="span12"><p><br />We thank you for visiting ArrisVentures. We would like to hear from you about our services, career opportunities, partnerships or anything else you wish to get in touch with. Fill out the following form to tell us about your views, comments, suggestions, complaints and we ensure that we will get back to you within 24 hours.</p></div>
				</div><!--END of current address section-->
<p class="sep"></p>
            <div class="row-fluid">
            	<div class="span12"><p><br />We thank you for visiting ArrisVentures. We would like to hear from you about our services, career opportunities, partnerships or anything else you wish to get in touch with. Fill out the following form to tell us about your views, comments, suggestions, complaints and we ensure that we will get back to you within 24 hours.</p></div>
            </div>
			<div class="row-fluid" id="splash_section">
        <div class="span12">
          <!--First Image-->
          <h1 id="form_title">Contact Us</h1>
               <div id='contact_form' class="vcon">
              <form  method="post" id="trctf" novalidate>
              	<div id="success_msg">
              	<?php //echo $_SESSION['error_msg'];
				//unset($_SESSION['error_msg']);?>
              		</div>
                    <div class="row-fluid vrf">
                    	<div class="span2"><label> Name*</label></div>
                        <div class="span4"><input type="text" name="name" id="name" pattern="^[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" onkeyup="send_mail1_contact(this.id)" onclick="send_mail1_contact(this.id)" maxlength="20" required/></div>
                        <div class="span2"><label>Location* </label></div>
                        <div class="span4"><input type="text" name="location" maxlength="20" id="location" pattern="^[a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" onkeyup="send_mail1_contact(this.id)" onclick="send_mail1_contact(this.id)" required/></div>
                    </div>
                    <div class="row-fluid vrf">
                    	<div class="span2"><label>Mobile*</label></div>
                        <div class="span4"><input type="text" name="mobile" onclick="send_mail1_contact(this.id)"  id="mobile" maxlength="20" pattern="^[789]\d{9}$" onkeyup="send_mail1_contact(this.id)" required/></div>
                        <div class="span2"><label>Email Id*</label></div>
                        <div class="span4"><input type="text" name="email"onclick="send_mail1_contact(this.id)" id="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" onkeyup="send_mail1_contact(this.id)" required/></div>
                    </div>
                    <div class="row-fluid"><br />
                    	<div class="span2 offset5 ctm"  style="text-align:left;margin-bottom:0.5em;"><label>Message*</label></div>
                    </div>
                    <div class="row-fluid">
                    	<div class="span12"><textarea id="msg" name="msg" onkeyup="send_mail1_contact(this.id)" onclick="send_mail1_contact(this.id)" required></textarea></div>
                    </div>
                    <div class="row-fluid">

<div class="span12 center" style="margin-top:  25px;">
                <button type="submit" value="SUBMIT" id="ctbt" name="submit" /*onclick="send_mail1_contact()*/" style="
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background-color: #faa732;
    color: #fff;
    border-top-color: #faa732;
    border-left-color: #faa732;
    border-right-color: #faa732;
    border-bottom-color: #faa732;
    padding: 1em;
width: 8%;
">SUBMIT</button>
                 <button type="reset" value="Reset" onclick="$('.error').hide();" id="resetbt">RESET</button>
                </div>
                    </div>


              </form>
          </div><!-- end of 'contact_form' -->
        </div>
  	</div>
            <div id="distances">
            <p>ArrisVentures is located in the heart of the city and is well connected to the prominent places across Bangalore. The following table shows the distances from our premises to major places and destinations.</p>
			<!--<div id="dist">
            <div class="row-fluid">
            	<div class="span3 offset2">Bengaluru International Airport</div>
                <div class="span1">40.8Km</div>
                <div class="span3">ITPL, Whitefield</div>
                <div class="span1">26.3Km</div>
            </div>

            <div class="row-fluid">
            	<div class="span3 offset2">Majestic Railway Station</div>
                <div class="span1">5.7Km</div>
                <div class="span3">Electronic City</div>
                <div class="span1">18.8Km</div>
            </div>

            <div class="row-fluid">
            	<div class="span3 offset2">M G Road</div>
                <div class="span1">7.7Km</div>
                <div class="span3">Cantonment Railway Station</div>
                <div class="span1">9Km</div>
            </div>
            </div>-->
            <table id="distance_table">
            <thead>
            <tr>
            	<td>Destination</td>
                <td>Distance</td>
            </tr>
            </thead>
            <tr>
            	<td>Bengaluru International Airport</td>
                <td>40.8Km</td>
            </tr>
            <tr>
            	<td>Majestic Railway Station</td>
                <td>5.7Km</td>
            </tr>
            <tr>
            	<td>M G Road</td>
                <td>7.7Km</td>
            </tr>
            <tr>
            	<td>ITPL, Whitefield</td>
                <td>26.3Km</td>
            </tr>
            <tr>
                <td>Electronic City</td>
                <td>18.8Km</td>
            </tr>
            <tr>
                <td>Cantonment Railway Station</td>
                <td>9Km</td>
            </tr>
            </table>
        </div>
  	</div>
    </div>
  </div><!-- end of content -->
    <!-- ***************** End of Main Content Area ************************** -->


  <!-- Clients -->
	<p class="sep2" style="border:3px solid #00b8bb;margin-top: 20px;"></p>
  <ul id="flexiselDemo3">
        <li><a href="http://www.3i-infotech.com" target="_blank"><img src="img/clients/separate page/infotech.jpg" /></a></li>
        <li><a href="http://www.accionlabs.com" target="_blank"><img src="img/clients/separate page/accion.jpg"/></a></li>
          <li><a href="http://www.arisglobal.com" target="_blank"><img src="img/clients/separate page/AG.jpg" /></a></li>
        <li><a href="http://www.adp.in" target="_blank"><img src="img/clients/separate page/adp.png" /></a></li>
          <li><a href="http://www.artechinfo.in" target="_blank"><img src="img/clients/separate page/artech.jpg"/></a></li>
          <li><a href="http://www.bensoncompany.com" target="_blank"><img src="img/clients/separate page/benson.jpg"/></a></li>
          <li><a href="http://www.boschindia.com" target="_blank"><img src="img/clients/separate page/bosch.jpg" /></a></li>
          <li><a href="http://www.uberdiagnostics.com" target="_blank"><img src="img/clients/separate page/cardio.jpg" /></a></li>
          <li><a href="http://www.cheersin.com" target="_blank"><img src="img/clients/separate page/cheers.jpg" /></a></li>
          <li><a href="http://www.eclinicalsol.com" target="_blank"><img src="img/clients/separate page/clinic.jpg"/></a></li>
          <li><a href="http://www.depusa.com" target="_blank"><img src="img/clients/separate page/dep.jpg" /></a></li>
          <li><a href="http://www.etherglobal.com" target="_blank"><img src="img/clients/separate page/ether.jpg" /></a></li>
          <li><a href="http://www.gmrgroup.in" target="_blank"><img src="img/clients/separate page/GMR.jpg" /></a></li>
          <li><a href="http://www.greytip.com" target="_blank"><img src="img/clients/separate page/greytip.jpg"/></a></li>
          <li><a href="http://www.bizprout.com" target="_blank"><img src="img/clients/separate page/Bizsprout.jpg" /></a></li>
          <li><a href="http://www.hombalegroup.com" target="_blank"><img src="img/clients/separate page/hombale.jpg"/></a></li>
          <li><a href="http://www.campussutra.com" target="_blank"><img src="img/clients/separate page/CampusSutra.jpg"/></a></li>
          <li><a href="http://www.ibm.com" target="_blank"><img src="img/clients/separate page/ibm.jpg"/></a></li>
          <li><a href="http://www.infogain.com" target="_blank"><img src="img/clients/separate page/infogain.jpg"/></a></li>
          <li><a href="http://www.itcinfotech.com" target="_blank"><img src="img/clients/separate page/itc.jpg"/></a></li>
          <li><a href="http://www.ivanti.com" target="_blank"><img src="img/clients/separate page/ivanti.jpg"/></a></li>
          <li><a href="http://www.jupitergroup.co.in" target="_blank"><img src="img/clients/separate page/jupiter.jpg"/></a></li>
          <li><a href="http://www.Keyfalcon" target="_blank"><img src="img/clients/separate page/keyfalcon.jpg"/></a></li>
          <li><a href="http://www.lumenatix.com" target="_blank"><img src="img/clients/separate page/lumenatrix.jpg"/></a></li>                    <li><a href="http://www.targetgroup.com" target="_blank"><img src="img/clients/separate page/targetgroup.jpg"/></a></li>
          <li><a href="http://www.mahindrafinance.com" target="_blank"><img src="img/clients/separate page/mahindra.jpg"/></a></li>
          <li><a href="http://www.maintec.com" target="_blank"><img src="img/clients/separate page/maintec.jpg"/></a></li>
          <li><a href="http://www.manthan.com" target="_blank"><img src="img/clients/separate page/manthan.jpg"/></a></li>
          <li><a href="http://www.mavenir.com" target="_blank"><img src="img/clients/separate page/mave.jpg"/></a></li>
          <li><a href="http://www.novonordisk.co.in" target="_blank"><img src="img/clients/separate page/novo.jpg"/></a></li>
          <li><a href="http://www.poorvihousing.com" target="_blank"><img src="img/clients/separate page/poorvi.jpg"/></a></li>
          <li><a href="http://www.pwc.in" target="_blank"><img src="img/clients/separate page/pwc.jpg"/></a></li>
          <li><a href="http://www.segemai.com" target="_blank"><img src="img/clients/separate page/sege.jpg"/></a></li>
          <li><a href="http://www.softtek.com" target="_blank"><img src="img/clients/separate page/soft.jpg"/></a></li>
          <li><a href="http://www.sparcstudio.in/" target="_blank"><img src="img/clients/separate page/sparcStudio.jpg"/></a></li>
          <li><a href="http://www.transwaters.com" target="_blank"><img src="img/clients/separate page/trans.jpg"/></a></li>
          <li><a href="http://www.zaggle.in" target="_blank"><img src="img/clients/separate page/zaggle.jpg"/></a></li>
            <li><a href="http://www.incaastudio.com" target="_blank"><img src="img/clients/separate page/icaa.jpg"/></a></li>

    </ul>
  <!--<div class="row-fluid" id="clients_strip">
  		<div class="span1 hidden-phone"></div>
        <div class="span10">
            <div id='carousel_container'>
              <div id='carousel_inner'>
								<ul id='carousel_ul'>
                    <li><a href="http://www.3i-infotech.com" target="_blank"><img src="img/clients/separate page/infotech.jpg" /></a></li>
                	<li><a href="http://www.accionlabs.com" target="_blank"><img src="img/clients/separate page/accion.jpg"/></a></li>
                    <li><a href="http://www.arisglobal.com" target="_blank"><img src="img/clients/separate page/AG.jpg" /></a></li>
                  <li><a href="http://www.adp.in" target="_blank"><img src="img/clients/separate page/adp.png" /></a></li>
                    <li><a href="http://www.artechinfo.in" target="_blank"><img src="img/clients/separate page/artech.jpg"/></a></li>
                    <li><a href="http://www.bensoncompany.com" target="_blank"><img src="img/clients/separate page/benson.jpg"/></a></li>
                    <li><a href="http://www.boschindia.com" target="_blank"><img src="img/clients/separate page/bosch.jpg" /></a></li>
                    <li><a href="http://www.uberdiagnostics.com" target="_blank"><img src="img/clients/separate page/cardio.jpg" /></a></li>
                    <li><a href="http://www.cheersin.com" target="_blank"><img src="img/clients/separate page/cheers.jpg" /></a></li>
                    <li><a href="http://www.eclinicalsol.com" target="_blank"><img src="img/clients/separate page/clinic.jpg"/></a></li>
                    <li><a href="http://www.depusa.com" target="_blank"><img src="img/clients/separate page/dep.jpg" /></a></li>
                    <li><a href="http://www.etherglobal.com" target="_blank"><img src="img/clients/separate page/ether.jpg" /></a></li>
                    <li><a href="http://www.gmrgroup.in" target="_blank"><img src="img/clients/separate page/GMR.jpg" /></a></li>
                    <li><a href="http://www.greytip.com" target="_blank"><img src="img/clients/separate page/greytip.jpg"/></a></li>
                    <li><a href="http://www.bizprout.com" target="_blank"><img src="img/clients/separate page/Bizsprout.jpg" /></a></li>
                    <li><a href="http://www.hombalegroup.com" target="_blank"><img src="img/clients/separate page/hombale.jpg"/></a></li>
                    <li><a href="http://www.campussutra.com" target="_blank"><img src="img/clients/separate page/CampusSutra.jpg"/></a></li>
                    <li><a href="http://www.ibm.com" target="_blank"><img src="img/clients/separate page/ibm.jpg"/></a></li>
                    <li><a href="http://www.infogain.com" target="_blank"><img src="img/clients/separate page/infogain.jpg"/></a></li>
                    <li><a href="http://www.itcinfotech.com" target="_blank"><img src="img/clients/separate page/itc.jpg"/></a></li>
                    <li><a href="http://www.ivanti.com" target="_blank"><img src="img/clients/separate page/ivanti.jpg"/></a></li>
                    <li><a href="http://www.jupitergroup.co.in" target="_blank"><img src="img/clients/separate page/jupiter.jpg"/></a></li>
                    <li><a href="http://www.Keyfalcon" target="_blank"><img src="img/clients/separate page/keyfalcon.jpg"/></a></li>
                    <li><a href="http://www.lumenatix.com" target="_blank"><img src="img/clients/separate page/lumenatrix.jpg"/></a></li>                    <li><a href="http://www.targetgroup.com" target="_blank"><img src="img/clients/separate page/targetgroup.jpg"/></a></li>
                    <li><a href="http://www.mahindrafinance.com" target="_blank"><img src="img/clients/separate page/mahindra.jpg"/></a></li>
                    <li><a href="http://www.maintec.com" target="_blank"><img src="img/clients/separate page/maintec.jpg"/></a></li>
                    <li><a href="http://www.manthan.com" target="_blank"><img src="img/clients/separate page/manthan.jpg"/></a></li>
                    <li><a href="http://www.mavenir.com" target="_blank"><img src="img/clients/separate page/mave.jpg"/></a></li>
                    <li><a href="http://www.novonordisk.co.in" target="_blank"><img src="img/clients/separate page/novo.jpg"/></a></li>
                    <li><a href="http://www.poorvihousing.com" target="_blank"><img src="img/clients/separate page/poorvi.jpg"/></a></li>
                    <li><a href="http://www.pwc.in" target="_blank"><img src="img/clients/separate page/pwc.jpg"/></a></li>
                    <li><a href="http://www.segemai.com" target="_blank"><img src="img/clients/separate page/sege.jpg"/></a></li>
                    <li><a href="http://www.softtek.com" target="_blank"><img src="img/clients/separate page/soft.jpg"/></a></li>
                    <li><a href="http://www.sparcstudio.in/" target="_blank"><img src="img/clients/separate page/sparcStudio.jpg"/></a></li>
                    <li><a href="http://www.transwaters.com" target="_blank"><img src="img/clients/separate page/trans.jpg"/></a></li>
                    <li><a href="http://www.zaggle.in" target="_blank"><img src="img/clients/separate page/zaggle.jpg"/></a></li>
                      <li><a href="http://www.incaastudio.com" target="_blank"><img src="img/clients/separate page/icaa.jpg"/></a></li>

                </ul>
              </div>
              </div>
    </div>
	</div>--><!-- end of Clients Strip -->

	<!-- Bottom Navigation -->
    <div class="row-fluid bn" id="bottom_nav">
        <div class="span1 offset1">
        	<a href="index.html"><span class="bottom_nav_bold">Home</span></a>
        </div>
        <div class="span1">
        	<a href="the_group.html"><span class="bottom_nav_bold">The Group</a></span>
            <ul>
            	<a href="the_group.html#history"><li>History</li></a>
                <a href="the_group.html#leadership"><li>Leadership</li></a>
                <a href="the_group.html#initiatives"><li>Initiatives</li></a>
            </ul>
        </div>
        <div class="span1">
        	<a href="advantage.html"><span class="bottom_nav_bold">Advantage</span></a>
        	<ul>
            	<a href="advantage.html#philosophy"><li>Philosophy</li></a>
            	<a href="advantage.html#vision"><li>Vision</li></a>
            	<a href="advantage.html#mission"><li>Mission</li></a>
            	<a href="advantage.html#innovation"><li>Innovation</li></a>
            </ul>
        </div>
        <div class="span1">
        	<a href="ventures.html"><span class="bottom_nav_bold">Ventures</span></a>
					<ul>
						<a href="ventures.html#technologies"><li>ArrisTechnologies</li></a>
							<a href="ventures.html#training"><li>ArrisTrraining</li></a>
							<a href="ventures.html#evaluation"><li>ArrisEvaluation</li></a>
							<a href="ventures.html#system"><li>ArrisSystems</li></a>
							<a href="ventures.html#consulting"><li>ArrisConsulting</li></a>
								
								<a href="ventures.html#welness"><li>ArrisWellness</li></a>
								<a href="ventures.html#foundation"><li>ArrisFooundation</li></a>
					</ul>
        </div>
        <div class="span1">
        	<a href="csr.html"><span class="bottom_nav_bold">CSR</span></a>
        </div>
        <div class="span1">
        	<a href="clients.html"><span class="bottom_nav_bold">Clients</span></a>
        	<ul>
            	<a href="clients.html#partialList"><li>Partial List</li></a>
            	<a href="clients.html#testimonials"><li>Testimonials</li></a>
            </ul>
        </div>
        <div class="span1">
        	<a href="careers.php"><span class="bottom_nav_bold">Careers</span></a>
        </div>
        <div class="span1">
        	<a href="contact.php"><span class="bottom_nav_bold">Contact</span></a>
        </div>

        <!-- Social Icons -->
        <div class="span2 offset1" id="social_icons">
        <ul>
        	<li class="bottom_nav_bold" style="color:#000;">Social Network</li>
            <li><a href="https://www.linkedin.com/in/arvind-jain-67553a4/" target="_blank"><img class='social_icon' src="img/social_icons/linked_in.png" alt="LinkedIn" /> Linked In</a></li>
            <!--<img class='social_icon' src="img/social_icons/google.png" alt="Google" /> Google-->
            <li><a href="https://www.facebook.com/ArrisTech" target="_blank"><img class='social_icon' src="img/social_icons/facebook.png" alt="Facebook" /> Facebook</a></li>
        	<li><a href="https://twitter.com/6Arvind" target="_blank">
            <img class='social_icon' src="img/social_icons/twitter.png" alt="Twitter" /> Twitter</a></li>
        </ul>
        </div>
  	</div><!-- End of Bottom Navigation -->

    <!-- Footer -->
    <div class="row-fluid" id="footer">
    	<div class="span3 offset1" id="copyright" >
        	<!-- copyright -->
            All rights reserved. Copyright &copy; 2018 ArrisVentures.
        </div>
        <div class="span3 offset1" id="iqstudios">
        	Site built by <a href="http://www.razorbee.com" target="_blank">Razorbee Online Solutions</a>
        </div>
        <div class="span1 offset1">
        	<!-- Disclaimer -->
            <a href="disclaimer.html">Disclaimer</a>
        </div>
        <div class="span1">
        	<!-- Privacy Policy -->
            <a href="privacy.html">Privacy Policy</a>
        </div>

    </div><!-- End of Footer -->

  <!-- Container End -->
		<script type="text/javascript">
			$(document).ready(function(){

					$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							itemsToScroll: 1,
							animationSpeed: 400,
							infinite: true,
							autoPlay: {
									enable: true,
									interval: 2000,
									pauseOnHover: true
							}
					});

			});
			</script>
			<script type="text/javascript" src="js/nav.js"></script>
			<script type="text/javascript" src="js/validations.js"></script>
			<script type="text/javascript" src="js/actions.js"></script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</body>
</html>
