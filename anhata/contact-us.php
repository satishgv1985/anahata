<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<title>Kontakt - Anahata</title>
    <link rel="stylesheet" type="text/css" href="css/jstyle.css" />

<script language="Javascript" type="text/javascript">
function echeck(str) {

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		if (str.indexOf(at)==-1){
		   alert("Ung�ltige E-Mail-ID");
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Ung�ltige E-Mail-ID");
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Ung�ltige E-Mail-ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Ung�ltige E-Mail-ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Ung�ltige E-Mail-ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Blancs E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Ung�ltige E-Mail-ID");
		    return false;
		 }

 		 return true;					
	}

function ValidateForm(){
    
    var visitorname=document.emailpro.visitorname;
	if ((visitorname.value==null)||(visitorname.value=="")){
		alert("Geben Sie Name");
		visitorname.focus();
		return false;
	}
	
	var emailID=document.emailpro.visitormail;
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Geben Sie E-Mail");
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
                    Kontakt, Impressum</h1>
                <form method="post" name="emailpro" action="sendmail.php" onsubmit="return ValidateForm();">
                    <table cellspacing="8" width="100%">
                        <tr>
                            <td colspan="2">
                                Monika M�ller</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Siegenburgerstrasse 31</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                D - 81373 M�nchen</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Telefon: +49 (0) 89 / 769 83 03</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Telefax: +49 (0) 89 / 769 83 97</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                E-mail: <a class="link1" href="mailto:monika.mueller.indienhilfe@anahata-ev.de">monika.mueller.indienhilfe
                                @ anahata-ev.de </a> </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <h2 class="none">
                                    Mitgliedsantrag
                                </h2>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                Die Arbeit des Vereins will ich unterst�tzen als</td>
                        </tr>
                        <tr>
                            <td colspan="2" nowrap="nowrap">
                                <input type="checkbox" name="donation" value="Zahlendes Mitglied" />Zahlendes Mitglied</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="clear: both; width:100%">
                                    <input type="checkbox" name="service" value="Zupackendes Mitglied. Ich biete folgende Leistung(en) an:" />Zupackendes
                                    Mitglied. Ich biete folgende Leistung(en) an:
                                    <input type="text" name="servicetext" size="35" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Name, Vorname:</td>
                            <td>
                                <input type="text" name="visitorname" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Geburtstag:</td>
                            <td>
                                <input type="text" name="dob" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                Stra�e:</td>
                            <td>
                                <input type="text" name="street" size="35" /></td>
                        </tr>
                        <tr>
                            <td>
                                PLZ, Ort:</td>
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
                                    Als zahlendes Mitglied bei Anahata e.V. haben Sie zwei M�glichkeiten die Arbeit
                                    des Vereins zu unterst�tzen. Zum einen k�nnen Sie einen monatlichen Betrag regelm��ig
                                    �berweisen oder eine Einzelspende t�tigen. Eine Spendenbescheinigung erhalten Sie
                                    von uns automatisch nach Jahresabschluss.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    Zahlendes Mitglied bei Anahata e.V. sind Sie, wenn die erste Spende auf unserem
                                    Konto eingegangen ist.</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <p>
                                    <b>Spendenkonto von Anahata e.V.</b>
                                    <br />
                                    <b>Bank: Postbank M�nchen</b><br />
                                   <b> Konto: 835703806</b><br />
                                   <b> BLZ: 700 100 80</b>
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