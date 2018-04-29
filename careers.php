<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Careers || ArrisTechnologies </title>

<!-- Bootstrap --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

<style>
textarea{resize:none; width:98.5%; height:200px;}
input{width:96%;}
select{width:100%;}
#section1{padding-bottom:1em;}
h4{text-align:center; border-bottom:3px double #00b8bb; border-top:3px double #00b8bb; padding:1em;}
#upload, #send{
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	background-color:#00b8bb;
	color:#fff;
	border-top-color:#44f3f6;
	border-left-color:#44f3f6;
	border-right-color:#019ea1;
	border-bottom-color:#019ea1;
	padding:1em;}
.center{text-align:center; margin-top:2em;}
</style>
<!--[if lt IE 9]>
     <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <style>
     	#menu{display:none;}
     </style>
<![endif]-->

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">

		$( document ).ready(function() {
  $(".submit").on('click',function()
      {
        var v1=$("#cat").val();
        if(v1 != "")
        {
          $('#mailform')[0].reset();
        }
      });
			$('a').on('click',function() {

		    if(this.id=="arristech")
		    {
		        $("#cat").val("arristech");
		    }
				else if(this.id=="arristr")
				{
					$("#cat").val("arristr");
				}
				else if(this.id=="arrisev")
				{
					$("#cat").val("arrisev");
				}
				else if(this.id=="arrissy")
				{
					$("#cat").val("arrissy");
				}
				else if(this.id=="arriscon")
				{
					$("#cat").val("arriscon");
				}
				else if(this.id=="arrispol")
				{
					$("#cat").val("arrispol");
				}
				else if(this.id=="arriswe")
				{
					$("#cat").val("arriswe");
				}
        else if(this.id=="arrisfoo")
				{
					$("#cat").val("arrisfoo");
				}
				else
				{
					$("#cat").val("general");
				}
		});
		});
$(function(){


$("#mailform").submit(function(e){
e.preventDefault();
if (!send_mail1_career())
return;
var form_data = new FormData(this);
//$(this).serialize(),
$.ajax({
                url: 'sendmail.php',
                type: 'post',
                dataType : 'json',
                           contentType: false,
                           cache: false,
                           processData:false,
                data: form_data,
                success: function( data ){
                var pr=$("#msg").val();
                  if(pr=="")
                  $("#upload").closest("div").append("<span class='error' style='color:green;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -25px;margin-left: -145px;'>Your resume has been submitted</span>");
                   else {
                     $("#send").closest("div").append("<span class='error' style='color:green;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -25px;margin-left: -198px;'>Your resume has been submitted</span>");
                   }
                   $('#mailform')[0].reset();
               },
                error: function( aa ){
                  var pr=$("#msg").val();
                  if(pr=="")
                  $("#upload").closest("div").append("<span class='error' style='color:red;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -25px;margin-left: -145px;'>Failed</span>");
                   else {
                     $("#send").closest("div").append("<span class='error' style='color:red;font-weight:600;display:inline-block;font-size:15px;position:  absolute;margin-top: -25px;margin-left: -198px;'>Failed</span>");
                   }
                }
            });


});
	$(".submit").click(function(){
		var id1=$(this).attr("id");
			$('#select_category option[value=' +id1+ ']').prop('selected',true);

		var targetOffset= $("#resume").offset().top;
    	$('html, body').animate({scrollTop: targetOffset}, 300);
   		//e.preventDefault();
	});
$('.error').hide();
})
</script>

<!--<script type="text/javascript">
$(function()
{
		var btnUpload=$('#upload');
		var mestatus=$('#mestatus');
		var files=$('#files');
		var filename=$('#filename').val();

		new AjaxUpload(btnUpload,
		 {
			action: 'uploadPhoto.php',
			name: 'uploadfile',
			onSubmit: function(file, ext)
			{
				var image_name=$("#image_name").val();
				if(image_name == "")
				{
					alert('Please Enter Image Title');
					$('#image_name').focus();
					return false;
				}
				 if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext)))
				 {
                    // extension is not allowed
                    alert('Only JPG, PNG or GIF files are allowed');
					//mestatus.text('Only JPG, PNG or GIF files are allowed');
					return false;
				}
				$('#p_photo').html('<img src="ajax-loader.gif" height="50" width="50">');
			},
			onComplete: function(file, response)
			{
				//On completion clear the status
				mestatus.text('Photo Uploaded Sucessfully!');
				//On completion clear the status
				files.html('');
				//Add uploaded file to list
				if(response==="success")
				{
					//$('<li></li>').appendTo('#files').html('<img src="images/webinfopedia_'+file+'" alt="" height="120" width="130" /><br />').addClass('success');
				$('#preview').html('<img src="temp/'+file+'" id="" alt=""/><br />');
				//$('#p_photo2').html('<img src="images/'+file+'" id="profile_photo" alt="profile photo"/><br />');
				} else{/*$('#result').html('Error');*/}
			}
		 }
})
</script>-->

</head>

<body>
	<!-- Container for all the Content -->
	<div class="container-fluid">

	<!-- Header Row -->
	<div class="row-fluid">
        <div class="span3 offset1"><!--Logo content-->
        <a href="index.html"><img id="logo" src="img/av.png" alt="ArrisTechnologies Logo" /></a>
        </div>
        <div class="span7"><!--Navigation-->
          <ul id="nav">
          	<li><a href="index.html" class="tooltip1">Home<span class="hidden-phone tt">The Genesis</span></a></li>
            <li class="dropdown-submenu" id="group"><a href="the_group.html" class="tooltip1"><span>The Group</span><span class="hidden-phone tt">Our Intent</span></a>
            	<ul class="dropdown-menu hidden-phone">
                	<li><a href="the_group.html#history">History</a></li>
                    <li><a href="the_group.html#leadership">Leadership</a></li>
                    <li><a href="the_group.html#initiatives">Initiatives</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu"><a href="advantage.html" class="tooltip1"><span>Advantage</span><span class="hidden-phone tt">Our Competence</span></a>
            	<ul class="dropdown-menu hidden-phone" id="adv_sub">
                	<li><a href="advantage.html#philosophy">Philosophy</a></li>
            		<li><a href="advantage.html#vision">Vision</a></li>
            		<li><a href="advantage.html#mission">Mission</a></li>
            		<li><a href="advantage.html#innovation">Innovation</a></li>
                </ul>
            </li>
						<li class="dropdown-submenu"><a href="ventures.html" class="tooltip1"><span>Ventures</span><span class="hidden-phone tt">The Powerhouses</span></a>
						<ul class="dropdown-menu hidden-phone">
								<li><a href="ventures.html#technologies">ArrisTechnologies</a></li>
								<li><a href="ventures.html#training">ArrisTrraining</a></li>
								<li><a href="ventures.html#evaluation">ArrisEvaluation</a></li>
								<li><a href="ventures.html#system">ArrisSystems</a></li>
								<li><a href="ventures.html#consulting">ArrisConsulting</a></li>
								
								<li><a href="ventures.html#welness">ArrisWellness</a></li>
								<li><a href="ventures.html#foundation">ArrisFooundation</a></li>
							</ul>
						</li>
            <li><a href="csr.html" class="tooltip1">CSR<span class="hidden-phone tt">Fostering Love</span></a></li>
            <li class="dropdown-submenu"><a href="clients.html" class="tooltip1"><span>Clients</span><span class="hidden-phone tt">Our Pride</span></a>
            	<ul class="dropdown-menu hidden-phone">
            		<li><a href="clients.html#partialList">Partial List</a></li>
            		<li><a href="clients.html#testimonials">Testimonials</a></li>
            	</ul>
            </li>
            <li class="selected active"><a href="careers.php" class="tooltip1">Careers<span class="hidden-phone tt">For Progress</span></a></li>
            <li ><a href="contact.php" class="tooltip1">Contact<span class="hidden-phone tt">Get Started</span></a></li>
          </ul>
        </div>
  	</div><!-- end of header row -->

  <!-- *************** Main Content Area ******************** -->

    <!-- Content -->
  <div class="row-fluid">
        <div class="text_content span10 offset1">
          <!--Text Content-->
          <h1>Careers</h1>
			<p>At ArrisVentures, life is more than just working; we bring you a unique working atmosphere that becomes a place to enhance your career and make a positive difference in our world. ArrisVentures is your door to the next level of your career, where you will be surrounded by smart, ambitious and dynamic colleagues, along with the most well respected leaders in all the fields we operate in.</p>
            <p>We are on constant lookout for people who are passionate and driven, people who can envision the future and help others reach their potential. We look for people who see themselves more than our employees and consider themselves as stakeholders in the company – people willing to be challenged to make decisions that improve our community, our business, and our world.</p>
            <p>Everything we do at ArrisVentures is based on mutual respect and trust; with equal importance to a sharp focus on customer needs. Our employees excel at delivering custom solutions by connecting to the right people. Our employees respect our emphasis on integrity and this consistently leads to a better work atmosphere and, eventually, a better career. We look for honesty in our employees, as we prefer to be honest and fair partners to our customers at all times. </p>
            <p>We recognize that a successful life is a balanced one and hence our employees’ wellbeing is important to us. Along with a comprehensive occupational health and safety policy, we offer competitive benefits and compensation packages, with the important distinction of making a difference in the world we inhabit.</p>
            <p>We always ensure that there is a feeling of integrated people management where top-level managers constantly engage with employees and help them in their career growth. We have regular assessment of each employee’s individual opportunity, both in personal and professional advancement and identify employees with immense talent potential to prepare them for future leadership and executive roles.</p>
            <p>If you’d like to see our current opportunities at ArrisVentures, <a href="#openings">please click here </a>to apply. If you do not find a current vacancy that suits your skills and qualifications do not worry; we would still like to connect with you and definitely keep you in mind for any potential future roles that come up. <a href="#" class="submit" id="general" onclick="$('.error').hide();">Please click here</a> to submit your resume. </p>
            <p class="sep"></p>
            <div id="openings">
            	<h3>Current Openings</h3>
                <div class="Arc">
                <p>To view and apply with:</p>
                <p><img src="img/Home/Arris Tech.jpg" class="float" />Specializes in high-end recruitment from junior / mid to
senior levels and executive positions for numerous sectors in IT / Non IT and ITES industries.<br /><a href="http://arristeck.com/career-with-clients/" class="submits" id="arristech" target="_blank">- Submit your resume</a></p><br />
                </div>
                <div class="Arc">
                <p>To view and apply with:</p>
                <p><img src="img/Home/Arris Training.jpg" class="float" />Offers technical training solutions to corporate organizations on numerous IT skills and also on Non IT skills like personality development, behavioral assessments, communication and other soft skills.<br /><a href="#"  class="submit" id="arristr">- Submit your resume</a></p><br />
                </div>
                <div class="Arc">
                <p>To view and apply with:</p>
                <p><img src="img/Home/Arris Evaluation.jpg" class="float" />Help you with expert interviewers to assess your candidate’s competency by virtually eliminating first level of technical interview and also experienced hands to evaluate projects before client submissions.<br /><a href="#"  class="submit" id="arrisev">- Submit your resume</a></p><br />

                </div>
								<div class="Arc">
                <p>To view and apply with:</p>
                <p><img src="img/Home/Arris Systems.jpg" class="float" />Offers product development lifecycle services starting from ideation, discussion with experts, proof of concept development, high level and low level design, development, go live and maintenance of system.<br /><a href="#" class="submit" id="arrissy">- Submit your resume</a></p><br />
                </div>
                <div class="Arc">
                <p>To view and apply with:</p>
                <p><img src="img/Home/Arris Consulting.jpg" class="float" />Offer consultation services from industry experts for high end projects and capabilities in outsourcing big time software / BPO projects to extended qualified subsidiary firms who join hands on need basis.<br /><a href="#"  class="submit" id="arriscon">- Submit your resume</a></p><br />
                </div>
                

                <div class="Arc">
                <p>To view and apply with:</p>
                <p><img src="img/Home/ArrisWellness.jpg" class="float" />Manufacturers of homemade organic wellness products that have directed countless people towards managing and maintaining their health and wellness successfully.<br /><a href="#"  class="submit" id="arriswe">- Submit your resume</a></p><br />
                </div>
                <div class="Arc">
                <p>To view and apply with:</p>
                <p><img src="img/Home/Arris Foundation.jpg" class="float" />Involved in CSR activities with good corporate governance that adds value to the larger interest of general public, thus enhancing the quality of life of community in general.<br /><a href="#"  class="submit" id="arrisfoo">- Submit your resume</a></p><br />

                </div>
            </div><!--END of current openings section-->

            <div id="resume">
            <h3>Submit your Resume</h3>
            <h4>Fill in the following details</h4>
             <form method="post"  enctype="multipart/form-data" name="myform" id="mailform" novalidate>
            <div id="section1"><br />
            	<div class="row-fluid">
            	<div id="span12">
            	<div id="success"></div>
            	</div>
            	<div class="row-fluid carr">
            	<div class="span2">Candidate Name*:</div>
                <div class="span4"><input type="text" maxlength="20" name="name" id="name" pattern="^[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" onkeyup="send_mail1_career(this.id);" onclick="send_mail1_career(this.id);" required/></div>
                <div class="span2">Current Location*:</div>
                <div class="span4"><input type="text" maxlength="20" name="location" id="location" pattern="^[a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]$" onkeyup="send_mail1_career(this.id);" onclick="send_mail1_career(this.id);" required/></div>
                </div>

                <div class="row-fluid carr">
                <div class="span2">Mobile Number*:</div>
                <!-- style="width:167px" -->
                <div class="span4"><input type="text" maxlength="20" name="mobile" id="mobile" pattern="^[789]\d{9}$" onkeyup="send_mail1_career(this.id);" onclick="send_mail1_career(this.id);" required/></div>
                <div class="span2">Email-Id*:</div>
                <div class="span4"><input type="text" name="email" id="email" pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" onkeyup="send_mail1_career(this.id);" onclick="send_mail1_career(this.id);"  required/></div>
                </div>

                <div class="row-fluid carr" id="category">
                <div class="span2">Business*:</div>
                <div class="span4">
								<select  name="cat" id="cat" required>
                	<option selected="selected" disabled="disabled" value="">Select Business</option>
                	<option value="general">General</option>
                    <option value="arristech">ArrisTechnologies</option>
                    <option value="arristr">ArrisTrraining</option>
                    <option value="arrisev">ArrisEvaluation</option>
                    <option value="arrissy">ArrisSystems</option>
										<option value="arriscon">ArrisConsulting</option>
                    
                    <option value="arriswe">ArrisWellness</option>
                    <option value="arrisfoo">ArrisFooundation</option>
                </select></div>
                <!--<div class="span1"><input type="radio" name="cat" value="general"/>General</div>
                <div class="span2"><input type="radio" name="cat" value="arristech"/>ArrisTechnologies</div>
                <div class="span2"><input type="radio" name="cat"  value="arristrr"/>ArrisTrraining</div>
                <div class="span2"><input type="radio" name="cat"  value="arriswe"/>ArrisWellness </div>
                <div class="span2"><input type="radio" name="cat"  value="arrisfoo"/>ArrisFooundation</div>-->
                </div>

                <div class="row-fluid carr ">
                <div class="span2">Paste Resume*:</div>
                <div class="span10"><textarea name="msg" onkeyup="send_mail1_career(this.id);"onclick="send_mail1_career(this.id);"  id="msg"></textarea></div>
                </div>

                <div class="row-fluid carr">
                <div class="span12 center">
                <input type="submit" value="SUBMIT" id="send" name="submit1" onclick="send_mail1_career();"/>
                 <button type="reset" value="Reset" onclick="$('.error').hide();" id="resetbt">RESET</button>
                </div>
                </div>
            </div>

            </div><!--end of section1-->
            <div id="section2">
            <h4>OR</h4>
            <div class="row-fluid"><br />
            	<div class="span3 hidden-phone"></div>
            	<div class="span2">Upload Resume*:</div>
                <div class="span4"><!--<input type="file" name="file" id="file"/>-->
                	<div class="fileupload fileupload-new" data-provides="fileupload">
		<div class="input-append">
			<div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i>
            <span class="fileupload-preview"></span></div><span class="btn btn-file">
            	<span class="fileupload-new">Select file</span>
                <span class="fileupload-exists">Change</span>
                <input type="file" id="file" name="file" accept=".docx, .pdf, .rtf,.doc"/></span><a class="btn fileupload-exists" onclick="remove();">Remove</a>
</div>
</div>
                </div>
            </div>
            <div class="row-fluid">
            	<div class="span5 hidden-phone"></div>
                <div class="span4 cnt" style="margin-left:65px;">(Only .doc/.rtf/.pdf)</div>
                </div>
             <div class="row-fluid">
            	<!--<div class="span3 hidden-phone"></div>-->
            	<a name="msg">
              <!--<div class="span12" id="error_msg" style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<?php echo $_SESSION['error_msg'];
                		unset($_SESSION['error_msg']);?>
                	</div>-->
                </a>
            </div>


            <div class="row-fluid">
            	<div class="span3 hidden-phone"></div>
                <div class="span6 center"><input type="submit" value="SUBMIT" id="upload" name="submit1" /*onclick="return send_mail1_career();*/"/></div>
                </div>
            </div><!--end of section2-->
            </form>
            </div><!--END of Submit Resume Section-->

</div>
        </div>
  	</div><!-- end of content -->
    <!-- ***************** End of Main Content Area ************************** -->

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
    <script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>

    <script type="text/javascript">
	$('#file').fileupload();

	</script>
</body>
</html>
