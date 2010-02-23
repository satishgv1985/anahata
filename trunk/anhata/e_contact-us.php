<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
    <title>Contact Us - Anahata</title>
    <link rel="stylesheet" type="text/css" href="css/jstyle.css" />
      <script language="Javascript" type="text/javascript">
function echeck(str) {

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID");
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID");
		    return false;
		 }

 		 return true;					
	}

function ValidateForm(){
    
    var visitorname=document.emailpro.visitorname;
	if ((visitorname.value==null)||(visitorname.value=="")){
		alert("Enter Name");
		visitorname.focus();
		return false;
	}
	
	var emailID=document.emailpro.visitormail;
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Enter Email");
		emailID.focus();
		return false;
	}
	if (echeck(emailID.value)==false){
		emailID.value="";
		emailID.focus();
		return false;
	}
	
	
	
	return true;
 }
    </script>
</head>

    <body>
<div class="jwrapper">

<?php include("header.php"); ?>
<div class="jcontent-area">

 <div class="jclear">
            </div>
            <div class="jinner-content">
                <h1>
                    Contact Us</h1>
                <form method="post" name="emailpro" action="e_sendmail.php" onsubmit="return ValidateForm();">
                    <table cellspacing="8" width="100%">
                        <tr>
                            <td colspan="2">
                                Monika Müller</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Siegenburgerstrasse 31</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                D - 81373 München</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Phone: +49 (0) 89 / 769 83 03</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Fax: +49 (0) 89 / 769 83 97</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                E-mail: <a class="link1" href="mailto:monika.mueller.indienhilfe@anahata-ev.de">monika.mueller.indienhilfe
                                    @ anahata-ev.de </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h2 class="none">
                                    Membership
                                </h2>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                How can you support society</td>
                        </tr>
                        <tr>
                            <td colspan="2" nowrap="nowrap">
                                <input type="checkbox" name="donation" value="Zahlendes Mitglied" />As per Donation</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="clear: both; width:100%">
                                    <input type="checkbox" name="service" value="Zupackendes Mitglied. Ich biete folgende Leistung(en) an:" />I can contribute my service as following:
                                    <input type="text" name="servicetext" size="35" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Name, First name:</td>
                            <td>
                                <input type="text" name="visitorname" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Date of Birth:</td>
                            <td>
                                <input type="text" name="dob" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Street:</td>
                            <td>
                                <input type="text" name="street" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Place, PIN:</td>
                            <td>
                                <input type="text" name="place" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Telefon:</td>
                            <td>
                                <input type="text" name="phone" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Handy:</td>
                            <td>
                                <input type="text" name="handy" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Your E-Mail:</td>
                            <td>
                                <input type="text" name="visitormail" size="35" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Send Mail" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    As paying member u have two opportunities to support the society Eighter u can donate
                                    on a regularly basis or at one time donation slip we will send automatically after
                                    the financial year.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    Paying member you are as soon as you are done first donation.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <b>Donation account Number Anahata e.V.</b>
                                    <br />
                                    <b>Bank: Postbank München</b><br />
                                    <b>Konto: 835703806</b><br />
                                    <b>BLZ: 700 100 80</b>
                                </p>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>

<?php include("quicklinks.php"); ?>
</div>

<?php include("footer.php"); ?>
</div>
    </body>
</html>