<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>

<link href="sandbox.css" rel="stylesheet">
  <link href="css/crosscover.css" rel="stylesheet">

  <script src="css/jquery.min.js" ></script>
  <script src="css/crosscover.js" ></script>
  <script>
  $(document).on('ready', function(){
    $('.crosscover').crosscover({
      // controller: true,
      dotNav: true
    });
  });
  </script>

<link rel="stylesheet" type="text/css" href="css11/css/style.css"/>
<link href="untitled.css" rel="stylesheet" type="text/css" />
<link href="menu1.css" rel="stylesheet" type="text/css" />
<script>
var ck_name=/^[A-Za-z. ]{3,40}$/;
var ck_phone=/^[0-9\-]{7,12}$/;
var ck_email=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
var ck_msg=/^[A-Za-z0-9?,&\n%()=!. ]{5,500}$/;

function validate(form)
{
	var nme=form.name.value;
	var email=form.email.value;
	var contact=form.mno.value;
	var subject=form.subject.value;
	var msg=form.msg.value;
	var errors=[];
	
	if(!ck_name.test(nme))
		{
		errors[errors.length]="You must enter a valid Name.";
		}

	if(!ck_phone.test(contact))
		{
		errors[errors.length]="You must enter a valid Email address.";
		}
				
	if(!ck_email.test(email))
		{
		errors[errors.length]="You must enter a valid Contact No..";
		}
				
	if(!ck_msg.test(subject))
		{
		errors[errors.length]="You must enter a Valid Subject of min 5 char.";
		}
	if(!ck_msg.test(msg))
		{
		errors[errors.length]="You must enter a valid Massege.";
		}
		if(errors.length>0)
		{
		reportErrors(errors);
		return false;
		}
		return true;
	}
	
	function reportErrors(errors)
	{
		var msg="Please Enter a valid Data...\n";
		for(var i=0;i<errors.length;i++)
		{
		msg+="\n"+(i+1)+". "+errors[i];
		}
		alert(msg);
		}
		
		
		
		
		
		
</script>

<?php
	$msg="";
	include("connect.php");
	if(isset($_POST['submit']))
	{
	 $sql=mysql_query("insert into contact values ('$_POST[name]','$_POST[mno]','$_POST[email]','$_POST[subject]','$_POST[msg]')") or die('Error'.mysql_errors());
	 
 $msg='Your Contact Detail is successfully saved';
	 }
?>



</head>

<body>
<table width="95%" border="0" align="center">
  <tr>
    <td width="12%" valign="top"><img src="image/dining1.jpg" alt="" width="261" height="146"/></td>
    <td colspan="2" valign="top"><img src="image/Screenshot (5).png" width="100%" height="149" /></td>
  </tr>
  <tr>
    
    <td colspan="2"> 
    <ul class="glossymenu">
	<li><a href="index.php"><b>Home</b></a></li>
	<li><a href="veg.php"><b>Menu</b></a></li>
	
	<li><a href="about.php"><b>About Us</b></a></li>	
	<li><a href="contact.php"><b>Contact Us</b></a></li>
    <li><a href="feedback.php"><b>Feedback</b></a></li></ul>
    
    
    
    
  </tr>
  
  <tr>
    <td colspan="2"><div class="crosscover">

    <div class="crosscover-list">
      <div class="crosscover-item">
        <img src="image/dinimg4.jpg" alt="image01"/>
      </div>
      <div class="crosscover-item">
        <img src="image/dining0.jpg" alt="image02"/>
      </div>
      <div class="crosscover-item">
        <img src="image/dining2.jpg" alt="image03"/>
      </div>
    	<div class="crosscover-item">
        <img src="image/dining3.jpg" alt="image04"/>
      </div>
    
    </div>

  </div>
    
    
    
    
    </td>
  </tr>
  <tr>
    <td height="317" colspan="3" align="justify" valign="top"><form method="post" onsubmit="return validate(this);" name="form"><table width="100%" border="0">
      <tr>
        <td height="42" colspan="2" align="center" valign="top" class="abt" ><p class="abt"><b>Welcome To Contact Us</b></p>
          
          </td>
      </tr>
      <tr>
        <td width="52%" height="267" valign="top" class="jkl"><br /><b style="font-size:22px">Address</b> : The VAAPCAA'S Restraurant,in front of Rajiv P.G,Law<br /> Gate road,LPU,Phagwara,Punjab,144411
          <p><b style="font-size:22px">Mobile No.</b> : 9872426122,7508448344</p>
          <p><b style="font-size:22px">E-Mail Id</b>-<a href="https://accounts.google.com">vaapcaas42@gmail.com</a>,<a href="https://www.facebook.com/The-Vapcaas-Resturant-1748817068710241/?skip_nax_wizard=true"> www.facebook.com</a></p>
          <p><b style="font-size:22px">Website</b>-<a href="www.vaapcaas.com">www.vaapcaas.com</a></p>
        </td>
        <td height="267" align="left" valign="top"  class="jkl"><table width="100%" height="182" border="0">
          <tr>
            <td height="32">Full Name</td>
            <td><input type="text" name="name" id="name" placeholder="Enter Name" style="border:solid; border-color:#9C3"/></td>
          </tr>
          <tr>
            <td height="32">Mobile Number</td>
            <td><input type="text" name="mno" id="mno" placeholder="Enter Mobile No." style="border:solid; border-color:#9C3"/></td>
          </tr>
          <tr>
            <td height="32">E-Mail</td>
            <td><input type="text" name="email" id="email" placeholder="Enter E-Mail" style="border:solid; border-color:#9C3"/></td>
          </tr>
          <tr>
            <td height="32">Subject </td>
            <td><input type="text" name="subject" id="subject" placeholder="Enter Subject" style="border:solid; border-color:#9C3"/></td>
          </tr>
          <tr>
            <td height="20">Message</td>
            <td><textarea name="msg" id="msg" cols="45" rows="5" placeholder="Enter Message" style="border:solid; border-color:#9C3"></textarea>
            
              </td>
          </tr>
          <tr>
            <td height="20">&nbsp;</td>
            <td><input name="submit" type="submit" class="btn" id="submit" value="Submit" />
              <?php echo $msg; ?></td>
          </tr>
        </table></td>
      </tr>
      </table>
    </form></td>
  </tr>
  
  
  
  
  
  
  <tr>
    <td colspan="3" align="center"><h2 style="color:#C00"><i><u>Welcome to The VAAPCAA'S Restaurant</u></i></h2>
    <p style="color:#C00"><i style="color:#009"><b style="font-size:19px">Restaurants range from inexpensive and informal lunching or dining places catering to people working nearby, with modest food served in simple settings at low prices,
A restaurant is a business which prepares and serves food and drinks to customers in exchange for money.We love restaurants as much as you do. That’s why we’ve been helping them fill tables since 2016. Whether you’re browsing for a quick bite or planning a big night, 
<u>Vaapcaas.com</u> will help you discover the perfect dining experience.</b></i> </p></td>
  </tr>
  <tr>
    <td colspan="3" align="center" class="footer"><table width="99%"><tr>
      <td width="77">&nbsp;</td>
      <td width="121">&nbsp;</td>
      <td width="202">&nbsp;</td>
      <td width="255"><h3>&copy;:All Right Reserved</h3></td>
      <td width="192">&nbsp;</td>
      <td width="51"><a href="https://www.facebook.com/"><img src="image/orgfacebook.png" alt="" width="51" height="44" /></a></t>
      <td width="51"><img src="image/orggoogle.png" width="51" height="44" /></td>
      <td width="55"><a href="https://twitter.com/"><img src="image/orgtwitter.png" alt="" width="51" height="44" /></a></td>
    </tr>
    </table> </td>
  </tr>
</table>
</body>
</html>