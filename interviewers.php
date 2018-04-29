<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Interviewers || ArrisEvaluation </title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/jquery.flexisel.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-responsive.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css">

  <!-- My Styles -->
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
  <link rel="stylesheet" type="text/css" href="css/clients.css" />
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css"?ver=1.0/>
  <link rel="stylesheet" type="text/css" href="css/style1.css"/>

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-itouch-icon" href="img/favicon.png">
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
    <script type="text/javascript" src="js/jquery.bxslider.js"></script>
    <script type="text/javascript">
$( document ).ready(function() {
$("#evin").submit(function(e){
e.preventDefault();
if (!send_mail1_contact() )
return;
var form_data = new FormData(this);
//$(this).serialize(),
$.ajax({
                url: 'evthankyou.php',
                type: 'post',
                dataType : 'json',
                           contentType: false,
                           cache: false,
                           processData:false,
                data: form_data,
                success: function( data ){
                $("#evsb").closest("div").append("<span class='error' style='color:White;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -100px;margin-left: 330px;'>Your Resume has been submitted successfully</span>");
                  $('#evin')[0].reset();
               },
                error: function( aa ){
                  $("#evsb").closest("div").append("<span class='error' style='color:White;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -120px;margin-left: 330px;'>Failed.</span>");
                  
                }
            });


});
});
</script>

</head>

<body>
	<!-- Container for all the Content -->
	<div class="container-fluid evl">

	<!-- Header Row -->
  <div class="row-fluid">
        <div class="span3 offset1"><!--Logo content-->
          <img id="logo" src="img/evr.png" alt="ArrisTechnologies Logo" style="max-width:105.8%;"style="max-width:106%" class="js" />

        </div>

        <div class="span7 spaan7"><!--Navigation-->
          <ul id="nav">
          <li ><a href="arrisevaluation.php" class="tooltip1">Home<span class="hidden-phone tt">The Genesis</span></a></li>
            <li ><a href="benefits.php" class="tooltip1"><span>Benefits</span><span class="hidden-phone tt">Our Edge</span></a>
            </li>
            <li class="selected "><a href="interviewers.php" class="tooltip1"><span>Interviewers</span><span class="hidden-phone tt">Our Strength</span></a>
            </li>
            <li><a href="evclients.php" class="tooltip1"><span>Clients</span><span class="hidden-phone tt">Our Pride</span></a>
            	            </li>
            <li><a href="evabout.php" class="tooltip1">About<span class="hidden-phone tt">Our Intent</span></a></li>
            <li><a href="evcontact.php" class="tooltip1">Contact<span class="hidden-phone tt">Get Started</span></a></li>
          </ul>
        </div>
  	</div><!-- end of header row -->

  <!-- *************** Main Content Area ******************** -->
  <!-- splash image -->
  <!-- Content -->  <!-- ***************** End of Main Content Area ************************** -->
  <div class="row-fluid">
        <div class="text_content span10 offset1">
          <!--Text Content-->
          <h1>Interviewers</h1>
          <h3>Get Paid for Interviewing Colleagues</h3>
  <p>Interested in earning extra cash? Enjoy communicating and having stimulating technical conversations with peers? Interested in elevating standards for hiring and tired of the status quo in the hiring practices within your profession? Join the Arris network of technical interviewers and pre-screen IT candidates for competency and experience before hiring managers receive a qualified shortlist — a revolutionary concept. Interview assignments typically require a commitment of 45-60 minutes, which can be tailored to fit into your busy schedule.</p>
  <p class="sep"></p>
  <h3>Make a Lasting Impact</h3>
  <p>During your career, you have likely observed first-hand the expertise of an awesome team member. This person’s technical prowess made them a delight to work with, and you probably thought about cloning your colleague and taking them along to your next project or client. High-quality team members are also highly sought after by employers. As a subject matter expert and hands-on practitioner, you possess the knowledge and insight needed to pinpoint another successful technologist for these employers. You will make a lasting impact on the caliber of professionals being invited to interview for the hottest IT jobs available today by joining the Arris Team.</p>
<p class="sep"></p>
  <h3>Assessments Based on First-Hand Experience</h3>
  <p>Arris offers recruiters and direct hire companies an opportunity to collaborate with you in identifying the right candidate for their open technical positions. You connect the dots between the job description and a candidate’s resume to design an optimal interview experience. Arris provides you with collaborative assessment tools to evaluate the candidate’s technical skills, a scientifically-based interviewing methodology and a thorough understanding of legally compliant interviews. Upon completion of the technical interview, you provide comprehensive skills feedback to enable talent acquisition professionals to accurately understand the depth and breadth of a candidate’s IT skills as they relate to job requirements.
</p>
<p class="sep"></p>
<h3>Interested?, send your profile</h3>

<div class="row-fluid" id="splash_section">
<div class="span12 str">
<!--First Image-->
<h2 id="form_title" style="color:white;">WOULD YOU LIKE TO EXPLORE INTERVIEWING OPPORTUNITIES?</h2>
     <div id="contact_form" style="background-color:#2c93b3;" class="ctr1 intv">
    <form  method="post" target="_blank" name="trform" enctype='multipart/form-data' id="evin"  novalidate>
      <div id="success_msg">
      <?php //echo $_SESSION['error_msg'];
//unset($_SESSION['error_msg']);?>
        </div>
          <!--<div class="row-fluid">
          http://projects.razorbee.com/arrisventures/thankyou1.php
          /arristechn/thankyou1.php
            <div class="span2"><label> Name*</label></div>
              <div class="span4"><input type="text" name="name" id="name"/ required></div>
              <div class="span2"><label>Location* </label></div>
              <div class="span4"><input type="text" name="location" id="location"/ required></div>
          </div>
          <div class="row-fluid">
            <div class="span2"><label>Mobile*</label></div>
              <div class="span4"><input type="text" name="mobile" id="mobile" maxlength="10"/></div>
              <div class="span2"><label>Email Id*</label></div>
              <div class="span4"><input type="text" name="email" id="email"/ required></div>
          </div>
          <div class="row-fluid"><br />
            <div class="span2 offset5 ctm"  style="text-align:left;margin-bottom:0.5em;"><label>Message*</label></div>
          </div>
          <div class="row-fluid">
            <div class="span12"><textarea id="msg" name="msg" required></textarea></div>
          </div>-->
          <div class="row-fluid">
            <div class="col-sm-8 nocolleftpad">
  	<div class="form-group col-sm-6">
  		 <input  class="form-control name" maxlength="50" id="name" name="name" placeholder="*Name" pattern="^[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" onkeyup="send_mail1_contact(this.id)" onclick="send_mail1_contact(this.id)" required/>
  	</div>
  	<div class="form-group  col-sm-6">
  		 <input  class="form-control" maxlength="20" id="location" name="location" placeholder="*Location" pattern="^([a-zA-z]{5,30})|([a-zA-Z]{5,30})+['-]+([\d]{5,8})+$" onclick="send_mail1_contact(this.id)" onkeyup="send_mail1_contact(this.id)" required/>
  	</div>
  	<div class="form-group  col-sm-6">
  		 <input  style="margin-top: 0px;"  class="form-control" maxlength="20" id="mobile" name="mobile" placeholder="*Mobile Number" pattern="^[789]\d{9}$" onclick="send_mail1_contact(this.id)" onkeyup="send_mail1_contact(this.id)"  required/>
  	</div>
  	<div class="form-group  col-sm-6">
  		 <input  style="margin-top: 0px;" type="email" class="form-control" id="email" name="email" placeholder="*Email Id"  pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" onclick="send_mail1_contact(this.id)" onkeyup="send_mail1_contact(this.id)" required/>
  	</div>
  	</div>
  	<div class="col-sm-4 nocolrightpad">
  	<div class="col-sm-12">
  		 <textarea  rows="5" class="form-control" id="msg" name="msg" placeholder="*Message" onkeyup="send_mail1_contact(this.id)" onclick="send_mail1_contact(this.id)" required></textarea>
   <input type="hidden" name="action" value="sendusmeg">


  	</div>
  	</div>
  </div>
    <!--<div class="row-fluid rff">
	<label class="col-sm-8 " for="inputfile" style="width:190px;">Paste Your Resume:<br><br><br><br>OR </label>
		<div class="col-sm-9 form-group">
			<textarea id="pasteresume" name="pasteresume" rows="8" style="width:100%;"></textarea>
		</div>
      <div class="col-lg-12">
        <div class="form-group">
          <label class="col-sm-8 " for="inputfile" style="width:190px;">Attach Your Resume:</label>
    		<input  type="file" id="resume" name="resume" accept=".doc, .pdf, .rtf">
    		</div>
      </div>
    </div>-->
    <div class="row-fluid rff ivr">
	<label class="col-sm-4 " for="inputfile" style="width:190px;">Paste Your Profile:</label><!--<span style="float:left;font-weight:bold">:</span>-->
		<div class="col-sm-8 form-group txtarea">
			<textarea id="pasteprofile" name="pasteprofile" rows="8" style="width:100%;margin-left: -100px; onkeyup="send_mail1_contact(this.id)"></textarea>
		</div>
    <div class="col-lg-2 or"><p>OR</p></div>
      <!--<div class="col-lg-12">
        <div class="form-group">
          <label class="col-sm-8 " for="inputfile" style="width:200px;margin-left:-10px;padding-right:0px;">Attach Your Profile:</label>
          	<div class="col-sm-8 form-group">
    		<input type="file" id="profile" name="profile" accept=".docx, .pdf, .rtf" style="margin-left:-57px;"/></div>
    		</div>
      </div>-->


<div id="section2" class="col-lg-12" style="
    padding-bottom: 10px;
">
         
            <div class="row-fluid">
            	<div class="span2" style="
    width: 20.529915%;
    font-family: 'Roboto',sans-serif;
    font-size: 13px !important;
    font-weight:  400;
    margin-left: -7px;
">Upload Resume*:</div>
                <div class="span4" style="
    margin-left:  6px;
"><!--<input type="file" name="file" id="file"/>-->
                	<!--<div class="fileupload fileupload-exists" data-provides="fileupload"><input type="hidden" value="" name=""><input type="hidden" value="" name="" style="
    height:  35px;
">
		<div class="input-append">
			<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i>
            <span class="fileupload-preview" style="
    top: 0;
    left: 0;
    position: relative;
    width: 90px;
    height: 30px;
"></span></div><span class="btn btn-file" style="
    top: 0;
    left: 0;
    position:  relative;
    width: 90px;
    height:  30px;
">
            	<span id="_s_select" class="fileupload-new" style="
    top: 0;
    left: 0;
    position: relative;
    width: 65px;
    height: 30px;display: block;
">Select file</span>
                <span id="_s_change" class="fileupload-exists" style="
    top: 0;
    left: 0;
    position: relative;
    width: 90px;
    height: 30px;display: none;
">Change</span>
                <input type="file" id="file" name="file" accept=".docx, .pdf, .rtf,.doc,.ppt" style="
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    opacity: 0;
    filter: alpha(opacity=0);
    transform: translate(-300px, 0) scale(4);
    font-size: 23px;
    direction: ltr;
    cursor: pointer;
    height:  35px;
"></span><a id="_s_remove" class="btn fileupload-exists" onclick="remove();" style="display:none;">Remove</a>
</div>
</div>-->


<div class="fileupload fileupload-new" data-provides="fileupload"><input type="hidden" value="" name=""><input type="hidden" value="" name="file">
		<div class="input-append">
			<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i>
            <span class="fileupload-preview" style="
    top: 0px;
    left: 0px;
    position: relative;
    width: 90px;
    height: 30px;
"></span></div><span class="btn btn-file" style="
    top: 0;
    left: 0;
    position: relative;
    width: 90px;
    height: 30px;
">
            	<span class="fileupload-new" style="
    top: 0;
    left: 0;
    position: relative;
    width: 90px;
    height: 30px;
">Select file</span>
                <span class="fileupload-exists" style="
    top: 0;
    left: 0;
    position: relative;
    width: 90px;
    height: 30px;
">Change</span>
                <input type="file" id="file" name="file" accept=".docx, .pdf, .rtf,.doc,.ppt"></span><a class="btn fileupload-exists" onclick="remove();" style="
    top: 0;
    left: 0;
    position: relative;
    width: 90px;
    height: 30px;
">Remove</a>
</div>
</div>

                </div>
            </div>
            <div class="row-fluid">
            	
                <div class="span4 cnt" style="margin-left: 165px;">(Only .doc/.rtf/.pdf/.ppt)</div>
                </div>
             <div class="row-fluid">
            	<!--<div class="span3 hidden-phone"></div>-->
            	<a name="msg">
              <!--<div class="span12" id="error_msg" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								                	</div>-->
                </a>
            </div>


            
            </div>

      </div>
          <!--<div class="row-fluid">
            <div class="span2 offset5 ">
<button name="submit" align="center" class="btn btn-lg btn-default btn-block" type="submit" width="50px" onclick="send_mail1_contact()"  style="margin-top:25px;height:40px;font-size:18px;width:125px;">Contact Us</button></div>
</div>-->
<div style="text-align:center;">
        		<div class="col-sm-offset-0 col-sm-12" style="
    padding-top:  15px;
">
        			<button type="submit" id="evsb" name="submit" class="btn btn-default submit_button" /*onclick="send_mail1_contact()"*/ style="margin-top:25px;height:40px;font-size:18px;width:125px;margin-right:25px;">Contact Us</button>
        			<button type="reset" value="Reset" onclick="$('.error').hide();" class="btn btn-warning" style="margin-top:25px;height:40px;font-size:18px;width:125px;">Reset</button>
        		</div>
        	</div>
    </form>
</div><!-- end of 'contact_form' -->
</div>
</div>      </div>
    </div>
    </div>
<!-- Mail -->

<!--End -->
    <p class="sep2" style="border:3px solid #00b8bb;"></p>
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
  <!-- Clients -->
  <!--<div class="row-fluid" id="clients_strip">
  		<div class="span1 hidden-phone"></div>
        <div class="span10">
            <div id='carousel_container' class="carousel slide" data-ride="carousel"  data-pause="hover">
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
  </div><!-- end of Clients Strip -->

	<!-- Bottom Navigation -->
    <div class="row-fluid" id="bottom_nav">
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
            <li><a href="https://www.facebook.com/ArrisTech/" target="_blank"><img class='social_icon' src="img/social_icons/facebook.png" alt="Facebook" /> Facebook</a></li>
        	<li><a href="https://twitter.com/ArrisTech" target="_blank">
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
    <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>

    <script type="text/javascript">
	$('#file').fileupload();

	</script></body>
</html>
