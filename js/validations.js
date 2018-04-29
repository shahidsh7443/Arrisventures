function validation()
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
     return false;
     }
     else if(len<3)
     {
   	 alert("Enter Mninmum 3 Characters In Name");	
   	 $('#name').focus();
   	 return false;
     }
     else if (!allValid1)
     {
     alert("Enter Letters Only.");
     $('#name').focus();
     return false;
     }
     else if(address=="")
     {
     alert("Please Enter Location");
     $('#location').focus();
     return false;
     }
     else if(phone=="")
     {
     alert("Please Enter Mobile Number");
     $('#mobile').focus();
     return false;
     }
    else if (!allValid)
     {
     alert("Please Enter a Valid Mobile Number");
     $('#mobile').focus();
     return false;
     }
     else if(len2<10)
     {
   	 alert("Mobile Number Must Be 10 Digits Long");	
   	 $('#mobile').focus();
   	 return false;
     }
     else if(email=="")
     {
   	 alert("Please Enter a Valid Email");
   	 $('#email').focus();
   	 return false;
     } 
    else if (!EmailValid)
     {
     alert("Enter a Valid Email");
     $('#email').focus();
     return false;
    }
    else if(msg=="")
     {
   	 alert("Please Enter Message");
   	 $('#msg').focus();
   	 return false;
     }
     else 
     {
     	return true;
     }
    }
     
    function valid_resume()
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
     return false;
     }
     else if(len<3)
     {
   	 alert("Enter Mninmum 3 Characters In Name");	
   	 $('#name').focus();
   	 return false;
     }
     else if (!allValid1)
     {
     alert("Enter Letters Only.");
     $('#name').focus();
     return false;
     }
     else if(address=="")
     {
     alert("Please Enter Location");
     $('#location').focus();
     return false;
     }
     else if(phone=="")
     {
     alert("Please Enter Mobile Number");
     $('#mobile').focus();
     return false;
     }
    else if (!allValid)
     {
     alert("Please Enter a Valid Mobile Number");
     $('#mobile').focus();
     return false;
     }
     else if(len2<10)
     {
   	 alert("Mobile Number Must Be 10 Digits long");	
   	 $('#mobile').focus();
   	 return false;
     }
     else if(email=="")
     {
   	 alert("Please Enter a Valid Email");
   	 $('#email').focus();
   	 return false;
     } 
    else if (!EmailValid)
     {
     alert("Enter a Valid Email");
     $('#email').focus();
     return false;
    }
    else if ($("input[name='cat']:checked").length == 0)
     {
     alert("Please Select One Category");
     return false;
     }
    else if(msg=="")
     {
   	 alert("Please Paste Your Resume Here");
   	 $('#msg').focus();
   	 return false;
     }
     else 
     {
     	return true;
     }	
     }
     function upload_validation()
     {
     var file=$("#file").val();
     var cat=$('select[name=cat] option:selected').val();
     var ex = file.split('.').pop();
     if(file=="")
     {
     	alert("Please select a file");
     	return false;
     }
     else if(cat=="0")
    {
    alert("Please Select One Category");	
    $('#select_category').focus();
    return false;
    }
    else if(file=="" || (ex!='doc' && ex!='docx' && ex!='pdf' && ex!='rtf' && ex!='xls' && ex!='xlsx'))
     {
     	alert("Kindly upload resume in .doc,.docx,.pdf,.rtf,.xls,.xlsx format only");
     	$('#file').focus();
     	return false;
     }
     else
     {
     	//$('#error_msg').html('<img src="ajax-loader.gif" height="50" width="50">');
     	$('#error_msg').css({'text-align':'center'});
     	$('#error_msg').html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uploading Please Wait');
     	
     	return true;
     }
     }
     
     
     
	 
     
     
     
     
     
     
    

