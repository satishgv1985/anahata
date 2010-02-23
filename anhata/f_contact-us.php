<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<title>Contactez-nous - Anahata</title>
<link rel="stylesheet" type="text/css" href="css/jstyle.css" />
<script language="Javascript" type="text/javascript">
function echeck(str) {

		var at="@";
		var dot=".";
		var lat=str.indexOf(at);
		var lstr=str.length;
		var ldot=str.indexOf(dot);
		if (str.indexOf(at)==-1){
		   alert("Blancs E-mail ID");
		   return false;
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Blancs E-mail ID");
		   return false;
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Blancs E-mail ID");
		    return false;
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Blancs E-mail ID");
		    return false;
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Blancs E-mail ID");
		    return false;
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Blancs E-mail ID");
		    return false;
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Blancs E-mail ID");
		    return false;
		 }

 		 return true;					
	}

function ValidateForm(){
    
    var visitorname=document.emailpro.visitorname;
	if ((visitorname.value==null)||(visitorname.value=="")){
		alert("Entrez le nom de");
		visitorname.focus();
		return false;
	}
	
	var emailID=document.emailpro.visitormail;
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Entrez une adresse email");
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
<div class="jwrapper"><?php include("header.php"); ?>
<div class="jcontent-area">

<div class="jclear"></div>
<div class="jinner-content">
<h1>Contactez-nous</h1>
<form method="post" name="emailpro" action="e_sendmail.php"
	onsubmit="return ValidateForm();">
<table cellspacing="8" width="100%">
	<tr>
		<td colspan="2">Monika Müller</td>
	</tr>
	<tr>
		<td colspan="2">Siegenburgerstrasse 31</td>
	</tr>
	<tr>
		<td colspan="2">D - 81373 München</td>
	</tr>
	<tr>
		<td colspan="2">Téléphone: +49 (0) 89 / 769 83 03</td>
	</tr>
	<tr>
		<td colspan="2">Fax: +49 (0) 89 / 769 83 97</td>
	</tr>
	<tr>
		<td colspan="2">E-mail: <a class="link1"
			href="mailto:monika.mueller.indienhilfe@anahata-ev.de">monika.mueller.indienhilfe
		@ anahata-ev.de </a></td>
	</tr>
	<tr>
		<td colspan="2">
		<h2 class="none">Adhésion</h2>
		</td>
	</tr>
	<tr>
		<td colspan="2">Comment pouvez-vous soutenir la société</td>
	</tr>
	<tr>
		<td colspan="2" nowrap="nowrap"><input type="checkbox" name="donation"
			value="Zahlendes Mitglied" />Comme par don</td>
	</tr>
	<tr>
		<td colspan="2">
		<div style="clear: both; width: 100%"><input type="checkbox"
			name="service"
			value="Zupackendes Mitglied. Ich biete folgende Leistung(en) an:" />Je
		peux apporter mon service comme suit: <input type="text"
			name="servicetext" size="35" /></div>
		</td>
	</tr>
	<tr>
		<td>Nom, Prénom:</td>
		<td><input type="text" name="visitorname" size="35" /></td>
	</tr>
	<tr>
		<td>Date de naissance:</td>
		<td><input type="text" name="dob" size="35" /></td>
	</tr>
	<tr>
		<td>Street:</td>
		<td><input type="text" name="street" size="35" /></td>
	</tr>
	<tr>
		<td>Placef, PIN:</td>
		<td><input type="text" name="place" size="35" /></td>
	</tr>
	<tr>
		<td>Téléphone:</td>
		<td><input type="text" name="phone" size="35" /></td>
	</tr>
	<tr>
		<td>Handy:</td>
		<td><input type="text" name="handy" size="35" /></td>
	</tr>
	<tr>
		<td>À partir de E-Mail:</td>
		<td><input type="text" name="visitormail" size="35" /></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Send Mail" /></td>
	</tr>
	<tr>
		<td colspan="2">
		<p>Que le paiement u membres ont deux possibilités pour faciliter la
		société u huitard pouvez faire un don sur une base régulière ou à un
		don de temps passer, nous leur enverrons automatiquement après
		l'exercice.</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
		<p>Payer membre, vous êtes dès que vous avez terminé premier don.</p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
		<p><b>Donation account Number Anahata e.V.</b> <br />
		<b>Bank: Postbank München</b><br />
		<b>Konto: 835703806</b><br />
		<b>BLZ: 700 100 80</b></p>
		</td>
	</tr>
</table>
</form>
</div>

<?php include("quicklinks.php"); ?></div>

<?php include("footer.php"); ?></div>
</body>
</html>
