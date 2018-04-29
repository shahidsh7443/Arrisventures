function remove()
{
$('.fileupload-preview').html("");
}
function displayerror(id, msg,_id){
if(!_id || (_id && (id == _id))){
  $("#"+id).closest("div").append("<span class='error' style='color:red;font-weight:600;display:inline-block;font-size:15px;'>"+msg+"</span>");
}
}
function send_mail1_career(_this)
{
  var fname=$("#name").val();
  var flen=fname.length;
    var mob=$("#mobile").val();
    var moblen=mob.length;
    var email=$("#email").val();
    var cloc=$("#location").val();
    var ct=$("#cat").val();
    var pr=$("#msg").val();
    var atr=$("#file").val();
  var freg = /[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]+$/;
  var regg3=/[7-9]\d{9}+$/;
  var reg4=/[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var creg=/[a-zA-Z0-9][-./&+\w\s]+$/;
  var cureg=/(https\:\/\/|http\:\/\/|www\.|)[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU|co.in|uk)+$/;
  var reg2=/^([a-zA-z]{5,30})|([a-zA-Z]{5,30})+['-]+([\d]{5,8})+$/;
  var desreg=/[a-zA-Z][a-zA-Z0-9 ]+[a-zA-Z0-9\.]+$/;
$(".error").remove();
var msg = "";
var flag=true;
if( fname=="")
  {
    msg="Please enter your  name";
  displayerror("name", msg, _this);
   flag=false;
  }
  else if(flen<3) {
  msg ="Enter more than 3 Characters";
  displayerror("name", msg, _this);
flag=false;
  }
  else {
  if(!freg.test(fname)) {
  msg="Not a valid  name";
    $("#fname").prop('autofocus', true);
    displayerror("name", msg, _this);
flag=false;

  }
    }

  if( mob=="")
  {
    msg="Please enter contact number";
    displayerror( "mobile", msg,_this);
flag=false;
  }
  else if(moblen<10)
  {
    msg="Please enter a valid  contact number";
    displayerror( "mobile", msg, _this);
flag=false;
  }
  else {
  if(!regg3.test(mob)) {
    msg="Not a valid contact number";
    res1=0;
      displayerror("mobile", msg, _this);
flag=false;
  }
  }

  if(email=="")
  {
    msg="Please enter your e-mail id";
        displayerror( "email", msg, _this);
flag=false;
  }
  else {
  if(!reg4.test(email)) {
    msg="Not a valid e-mail id";
    res1=0;
      displayerror( "email", msg, _this);
flag=false;
  }
  }

  if(cloc=="")
  {
    msg="Please enter Location";
      displayerror( "location", msg, _this);
flag=false;
  }
  else {
  if(!reg2.test(cloc)) {
    msg="Not a valid location";
    res1=0;
        displayerror( "location", msg, _this);
flag=false;
  }
  }

  if(ct==null)
  {
    msg="Please select business that you are looking for";
      displayerror( "cat", msg, _this);
flag=false;
  }

  if(pr=="" && atr=="")
  {
    $("#msg").prop('required', true);
    $("#file").prop('required', true)
    msg="Please paste your Resume or Attach your Resume";
    displayerror( "msg", msg, _this);
flag=false;
  }

  if(pr=="" && atr!="")
  {
    $("#msg").prop('required', false);
  }
if(pr!="" && atr=="")
  {
    $("#file").prop('required', false);
  }
return flag;
}
function send_mail3_contact(_this)
{
  var fname=$("#name").val();
  var flen=fname.length;
    var mob=$("#mobile").val();
    var moblen=mob.length;
    var email=$("#email").val();
    var cname=$("#compname").val();
    var curl=$("#compurl").val();
    var cloc=$("#cloc").val();
    var des=$("#desig").val();
    var ins=$("#hire").val();
    var com=$("#com").val();
  var freg = /^[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]*$/;
  var regg3=/^[7-9]\d{9}$/;
  var reg4=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var creg=/^[a-zA-Z0-9][-./&+\w\s]*$/;
  var cureg=/^(https\:\/\/|http\:\/\/|www\.|)[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU|co.in|uk)*$/;
  var reg2=/^([a-zA-z]{5,30})|([a-zA-Z]{5,30})+['-]+([\d]{5,8})+$/;

  var desreg=/^[a-zA-Z][a-zA-Z0-9 ]+[a-zA-Z0-9\.]*$/;
  $(".error").remove();
  var msg = "";
var flag=true;
  if(fname=="")
  {
    msg="Please enter your First name";
    displayerror( "name", msg, _this);
flag=false;
  }
  else if(flen<3) {
  msg="Enter more than 3 Characters";
  displayerror( "name", msg, _this);
flag=false;
  }
  else {
  if(!freg.test(fname)) {
    msg="Not a valid First name";
    $("#fname").prop('autofocus', true);
    displayerror( "name", msg, _this);
flag=false;
  }
  }
  if(des=="")
  {
    msg="Please enter your designation";
    displayerror( "desig", msg, _this);
flag=false;
  }
  else {
  if(!desreg.test(des)) {
    msg="Not a valid designation";
    displayerror( "desig", msg, _this);
flag=false;
    res1=0;
  }
  }
  if(mob=="")
  {
    msg="Please enter contact number";
    displayerror( "mobile", msg, _this);
flag=false;
  }
  else if(moblen<10)
  {
    msg="Please enter a valid  contact number";
    displayerror( "mobile", msg, _this);
flag=false;
  }
  else {
  if(!regg3.test(mob)) {
    msg="Not a valid contact number";
    displayerror( "mobile", msg, _this);
flag=false;
    res1=0;
  }
  }
  if(email=="")
  {
    msg="Please enter your e-mail id";
    displayerror( "email", msg, _this);
flag=false;
  }
  else {
  if(!reg4.test(email)) {
    msg="Not a valid e-mail id";
    displayerror( "email", msg, _this);
flag=false;
    res1=0;
  }
  }
  if(cname=="")
  {
    msg="Please enter your Company name";
    displayerror( "compname", msg, _this);
flag=false;
  }
  else {
  if(!creg.test(cname)) {
    msg="Not a valid Company name";
    $("#cname").prop('autofocus', true);
    displayerror( "compname", msg, _this);
flag=false;
  }
  }
  if(curl=="")
  {
    msg="Please enter your Company Url";
    displayerror( "compurl", msg, _this);
flag=false;
  }
  else {
  if(!cureg.test(curl)) {
    msg="Not a valid Company Url";
    $("#curl").prop('autofocus', true);
    displayerror( "compurl", msg, _this);
flag=false;
  }
  }
  if(cloc=="")
  {
    msg="Please enter Location";
    displayerror( "cloc", msg, _this);
flag=false;
  }
  else {
  if(!reg2.test(cloc)) {
    msg="Not a valid location";
    displayerror( "cloc", msg, _this);
flag=false;
    res1=0;
  }
  }

  if(ins=="")
  {
    msg="Please enter industry serviced";
    displayerror( "hire", msg, _this);
flag=false;
  }
  else {
  if(!desreg.test(ins)) {
    msg="Not a valid industry serviced";
    displayerror( "hire", msg, _this);
flag=false;
    res1=0;
  }
  }
  if(com=="")
  {
    msg="Please enter comments";
    displayerror( "com", msg, _this);
flag=false;
  }
return flag;
}
function send_mail2_contact(_this)
{
  var fname=$("#namef").val();
  var flen=fname.length;
  var lname=$("#namel").val();
  var llen=lname.length;
  var mob=$("#mobile").val();
  var moblen=mob.length;
  var email=$("#email").val();
  var cname=$("#compname").val();
  var curl=$("#compurl").val();
  var cloc=$("#cloc").val();
  var des=$("#desig").val();
  var ins=$("#hire").val();
  var ct=$("#ct").val();
  var com=$("#com").val();
  var freg = /^[a-zA-Z][\']{1}[a-zA-Z]|[a-zA-Z][a-zA-Z]*$/;
  var lreg = /^[a-zA-Z][\']{1}[a-zA-Z]|[a-zA-Z][a-zA-Z]*$/;
  var regg3=/^[7-9]\d{9}$/;
  var reg4=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  var creg=/^[a-zA-Z0-9][-./&+\w\s]*$/;
  var cureg=/^(https\:\/\/|http\:\/\/|www\.|)[a-zA-Z0-9\-\.]+\.(com|org|net|mil|edu|COM|ORG|NET|MIL|EDU|co.in|uk)*$/;
  var reg2=/^([a-zA-z]{5,30})|([a-zA-Z]{5,30})+['-]+([\d]{5,8})+$/;

  var desreg=/^[a-zA-Z][a-zA-Z0-9 ]+[a-zA-Z0-9\.]*$/;
  $(".error").remove();
  var msg = "";
var flag=true;
  if(fname=="")
  {
    msg="Please enter your First name";
    displayerror("namef", msg, _this);
    flag=false;
  }
  else if(flen<3) {
    msg="Enter more than 3 Characters";
    displayerror("namef", msg, _this);
    flag=false;
  }
  else {
    if(!freg.test(fname)) {
      msg="Not a valid First name";
      $("#fname").prop('autofocus', true);
      displayerror("namef", msg, _this);
      flag=false;
    }
  }
  if(lname=="")
  {
    msg="Please enter your Last name";
    displayerror("namel", msg, _this);
    flag=false;
  }
  else if(llen<3) {
    msg="Enter more than 3 Characters";
    displayerror("namel", msg, _this);
    flag=false;
  }
  else {
    if(!lreg.test(lname)) {
      msg="Not a valid Last name";
      $("#lname").prop("autofocus");
      displayerror("namel", msg, _this);
      flag=false;
    }
  }
  if(mob=="")
  {
    msg="Please enter contact number";
    displayerror("mobile", msg, _this);
    flag=false;
  }
  else if(moblen<10)
  {
    msg="Please enter a valid  contact number";
    displayerror("mobile", msg, _this);
    flag=false;
  }
  else {
    if(!regg3.test(mob)) {
      msg="Not a valid contact number";
      displayerror("mobile", msg, _this);
flag=false;
      res1=0;
    }
  }
  if(email=="")
  {
    msg="Please enter your e-mail id";
    displayerror("email", msg, _this);
flag=false;
  }
  else {
    if(!reg4.test(email)) {
      msg="Not a valid e-mail id";
      displayerror("email", msg, _this);

flag=false;
      res1=0;
    }
  }
  if(cname=="")
  {
    msg="Please enter your Company name";
    displayerror("compname", msg, _this);
flag=false;
  }
  else {
    if(!creg.test(cname)) {
      msg="Not a valid Company name";
      $("#cname").prop('autofocus', true);
      displayerror("compname", msg, _this);
flag=false;
    }
  }
  if(curl=="")
  {
    msg="Please enter your Company Url";
    displayerror("compurl", msg, _this);
flag=false;
  }
  else {
    if(!cureg.test(curl)) {
      msg="Not a valid Company Url";
      $("#curl").prop('autofocus', true);
      displayerror("compurl", msg, _this);
flag=false;
    }
  }
  if(cloc=="")
  {
    msg="Please enter Location";
    displayerror("cloc", msg, _this);
flag=false;
  }
  else {
    if(!reg2.test(cloc)) {
      msg="Not a valid location";
      displayerror("cloc", msg, _this);
flag=false;
      res1=0;
    }
  }
  if(des=="")
  {
    msg="Please enter your designation";
    displayerror("desig", msg, _this);
flag=false;
  }
  else {
    if(!desreg.test(des)) {
      msg="Not a valid designation";
      displayerror("desig", msg, _this);
flag=false;
      res1=0;
    }
  }
  if(ins=="")
  {
    msg="Please enter industry serviced";
    displayerror("hire", msg, _this);
flag=false;
  }
  else {
    if(!desreg.test(ins)) {
      msg="Not a valid industry serviced";
      displayerror("hire", msg, _this);
flag=false;
      res1=0;
    }
  }
  if(ct=="")
  {
    msg="Please select trainings that you are looking for";
    displayerror("ct", msg, _this);
flag=false;
  }
  if(com=="")
  {
    msg="Please enter comments";
    displayerror("com", msg, _this);
flag=false;
  }
return flag;
}

function send_mail1_contact(_this)
 {
var inputVal = $("#name").val();
var loc=$("#location").val();
var loclen=loc.length;
 var len=inputVal.length;
 var mob=$("#mobile").val();
 var email=$("#email").val();
 var msg1=$("#msg").val();
 var resume=$("#file").val();
 var pasteresume=$("#pasteresume").val();
 var profile=$("#file").val();
 var pasteprofile=$("#pasteprofile").val();
 var moblen=mob.length;
var numericReg = /[a-zA-z]{2,3}[\.][a-zA-Z][a-zA-Z ]+[a-zA-Z]|[a-zA-Z][a-zA-Z ]+[a-zA-Z]+$/;
var reg2=/^([a-zA-z]{5,30})|([a-zA-Z]{5,30})+['-]+([\d]{5,8})+$/;
var regg3=/[7-9]\d{9}$/;
var reg4=/[^\s@]+@[^\s@]+\.[^\s@]+$/;
$(".error").remove();
var msg = "";
var flag = true;
if(inputVal=="")
{
  msg="Please enter your name";
  displayerror("name", msg, _this);
flag=false;
}
else if(len<3) {
msg="Enter more than 3 Characters";
  displayerror("name", msg, _this);
flag=false;
}
else {
if(!numericReg.test(inputVal)) {
  msg="Not a valid name";
  $("#name").prop('autofocus', true);
  res1=0;
    displayerror("name", msg, _this);
flag=false;
}
}
if(loc=="")
{
  msg="Please enter Location";
    displayerror("location", msg, _this);
flag=false;

}
else {
if(!reg2.test(loc)) {
  msg="Not a valid location";
  res1=0;
    displayerror("location", msg, _this);
flag=false;
}
}
if(mob=="")
{
  msg="Please enter contact number";
    displayerror("mobile", msg, _this);
flag=false;
}
else if(moblen<10)
{
  msg="Please enter a valid  contact number";
    displayerror("mobile", msg, _this);
flag=false;
}
else {
if(!regg3.test(mob)) {
  msg="Not a valid contact number";
  res1=0;
    displayerror("mobile", msg, _this);
flag=false;
}
}
if(email=="")
{
  msg="Please enter your e-mail id";
    displayerror("email", msg, _this);
flag=false;
}
else {
if(!reg4.test(email)) {
  msg="Not a valid e-mail id";
    displayerror("email", msg, _this);
flag=false;
}
}
if(msg1=="")
{
  msg="Please enter Message";
    displayerror("msg", msg, _this);
flag=false;
}
if(pasteprofile=="" && profile=="")
{
  $("#pasteprofile").prop('required', true);
  $("#profile").prop('required', true)
  msg="Please paste your profile or Attach your Profile";
    displayerror("pasteprofile", msg, _this);
flag=false;
}
if(pasteprofile=="" && profile!="")
{
  $("#pasteprofile").prop('required', false);
}
else {
  $("#profile").prop('required', false)
}

if(pasteresume=="" && resume=="")
{
  $("#pasteresume").prop('required', true);
  $("#resume").prop('required', true)
  msg="Please aste your resume or attach your resume";
    displayerror("pasteresume", msg, _this);
flag=false;
}
if(pasteresume=="" && resume!="")
{
  $("#pasteresume").prop('required', false);
}
else {
  $("#resume").prop('required', false)
}
return flag;
}

function send_mail_contact()
{
     var name=$("#name").val();
     var address=$("#location").val();
     var phone=$("#mobile").val();
     var email=$("#email").val();
     var msg=$("#msg").val();
     var len=name.length;
	 var len2=phone.length;
	 ///---------------validate name---------------------------
	 var checkOK1 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
     var checkStr = name;
     var allValid1 = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK1.length;  j++)
     if (ch == checkOK1.charAt(j))
     break;
     if (j == checkOK1.length)
     {
     allValid1 = false;
     break;
     }
     }
     //-----------------------------------end---------------------------
     //--------------------------mobile validation----------------------
     var checkOK = "0123456789";
     var checkStr = phone;
     var allValid = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK.length;  j++)
     if (ch == checkOK.charAt(j))
     break;
     if (j == checkOK.length)
     {
     allValid = false;
     break;
     }
     }
	 //--------------------------end------------------------
	 //--------------------email validation--------------
	 var checkEmail = "@.";
        var checkStr = email;
        var EmailValid = false;
        var EmailAt = false;
        var EmailPeriod = false;
        for (i = 0;  i < checkStr.length;  i++)
        {
        ch = checkStr.charAt(i);
        for (j = 0;  j < checkEmail.length;  j++)
        {
        if (ch == checkEmail.charAt(j) && ch == "@")
        EmailAt = true;
        if (ch == checkEmail.charAt(j) && ch == ".")
        EmailPeriod = true;
	    if (EmailAt && EmailPeriod)
		break;
	    if (j == checkEmail.length)
		break;
	    }
       if (EmailAt && EmailPeriod)
       {
		EmailValid = true
		break;
	  }
      }
      //------------------end--------------------------

	  if (name=="")
     {
     alert("Enter Name");
     $('#name').focus();
     //return false;
     }
     else if(len<3)
     {
   	 alert("Enter Mninmum 3 Characters In Name");
   	 $('#name').focus();
   	 //return false;
     }
     else if (!allValid1)
     {
     alert("Enter Letters Only.");
     $('#name').focus();
     //return false;
     }
     else if(address=="")
     {
     alert("Please Enter Location");
     $('#location').focus();
     //return false;
     }
     else if(phone=="")
     {
     alert("Please Enter Mobile Number");
     $('#mobile').focus();
     //return false;
     }
    else if (!allValid)
     {
     alert("Please Enter a Valid Mobile Number");
     $('#mobile').focus();
    // return false;
     }
     else if(len2<10)
     {
   	 alert("Mobile Number Must Be 10 Digits Long");
   	 $('#mobile').focus();
   	 //return false;
     }
     else if(email=="")
     {
   	 alert("Please Enter a Valid Email");
   	 $('#email').focus();
   	// return false;
     }
    else if (!EmailValid)
     {
     alert("Enter a Valid Email");
     $('#email').focus();
     //return false;
    }
    else if(msg=="")
     {
   	 alert("Please Enter Message");
   	 $('#msg').focus();
   	 //return false;
     }
     else{

$.ajax({
		type:"POST",
		url:"actions.php",
		data:{action:"send_mail_contact",name:name,address:address,phone:phone,email:email,msg:msg},
		success: function ( res )
		{
		$('#success_msg').html( res );
		$("#name").val('');
        $("#location").val('');
        $("#mobile").val('');
        $("#email").val('');
        $("#msg").val('');
		}
	});
}}
function send_mail_career()
{
	 var name=$("#name").val();
     var address=$("#location").val();
     var phone=$("#mobile").val();
     var email=$("#email").val();
     var msg=$("#msg").val();
     //var cat=$("input[name='cat']:checked").val();
     var cat=$('select[name=cat] option:selected').val();
     //var cat = document.myform.cat.value;
     var len=name.length;
	 var len2=phone.length;
	 ///---------------validate name---------------------------
	 var checkOK1 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
     var checkStr = name;
     var allValid1 = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK1.length;  j++)
     if (ch == checkOK1.charAt(j))
     break;
     if (j == checkOK1.length)
     {
     allValid1 = false;
     break;
     }
     }
     //-----------------------------------end---------------------------
     //--------------------------mobile validation----------------------
     var checkOK = "0123456789";
     var checkStr = phone;
     var allValid = true;
     for (i = 0;  i < checkStr.length;  i++)
     {
     ch = checkStr.charAt(i);
     for (j = 0;  j < checkOK.length;  j++)
     if (ch == checkOK.charAt(j))
     break;
     if (j == checkOK.length)
     {
     allValid = false;
     break;
     }
     }
	 //--------------------------end------------------------
	 //--------------------email validation--------------
	 var checkEmail = "@.";
        var checkStr = email;
        var EmailValid = false;
        var EmailAt = false;
        var EmailPeriod = false;
        for (i = 0;  i < checkStr.length;  i++)
        {
        ch = checkStr.charAt(i);
        for (j = 0;  j < checkEmail.length;  j++)
        {
        if (ch == checkEmail.charAt(j) && ch == "@")
        EmailAt = true;
        if (ch == checkEmail.charAt(j) && ch == ".")
        EmailPeriod = true;
	    if (EmailAt && EmailPeriod)
		break;
	    if (j == checkEmail.length)
		break;
	    }
       if (EmailAt && EmailPeriod)
       {
		EmailValid = true
		break;
	  }
      }
      //------------------end--------------------------

	  if (name=="")
     {
     alert("Enter Name");
     $('#name').focus();
    // return false;
     }
     else if(len<3)
     {
   	 alert("Enter Mninmum 3 Characters In Name");
   	 $('#name').focus();
   	 //return false;
     }
     else if (!allValid1)
     {
     alert("Enter Letters Only.");
     $('#name').focus();
     //return false;
     }
     else if(address=="")
     {
     alert("Please Enter Location");
     $('#location').focus();
     //return false;
     }
     else if(phone=="")
     {
     alert("Please Enter Mobile Number");
     $('#mobile').focus();
    // return false;
     }
    else if (!allValid)
     {
     alert("Please Enter a Valid Mobile Number");
     $('#mobile').focus();
    // return false;
     }
     else if(len2<10)
     {
   	 alert("Mobile Number Must Be 10 Digits long");
   	 $('#mobile').focus();
   	 //return false;
     }
     else if(email=="")
     {
   	 alert("Please Enter a Valid Email");
   	 $('#email').focus();
   	// return false;
     }
    else if (!EmailValid)
     {
     alert("Enter a Valid Email");
     $('#email').focus();
     //return false;
    }
    /*else if ($("input[name='cat']:checked").length == 0)
     {
     alert("Please Select One Category");
     //return false;
     }*/
     else if(cat=="0")
    {
    alert("Please Select One Category");
    $('#select_category').focus();
    return false;
    }
    else if(msg=="")
     {
   	 alert("Please Paste Your Resume Here");
   	 $('#msg').focus();
   	// return false;
     }
     else
     {
     	$.ajax({
		type:"POST",
		url:"actions.php",
		data:{action:"send_mail_career",name:name,address:address,phone:phone,email:email,msg:msg,cat:cat},
		success: function ( res )
		{
		$('#success').html( res );
		$("#name").val('');
        $("#location").val('');
       $('#select_category option[value=0]').prop('selected',true);
        $("#mobile").val('');
        $("#email").val('');
        $("#msg").val('');
		}
	});
     }
     }
     function upload_resume()
     {
     	var file=$('#file').attr('value');
     	var cat=$('select[name=cat] option:selected').val();
     	$.ajax({
		type:"POST",
		url:"actions.php",
		data:{action:"upload_resume",file:file,cat:cat},
		success: function ( res )
		{
		$('#success').html( res );
		}
	});
     }
