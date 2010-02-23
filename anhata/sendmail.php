<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
    <title>Kontakt - Anahata</title>
    <link rel="stylesheet" type="text/css" href="css/jstyle.css" />
</head>

    <body>
<div class="jwrapper">

<?php include("header.php"); ?>
<div class="jcontent-area">

<div class="jinner-content">
                <h1>
                    Kontakt, Impressum</h1>
                <?php

				$todayis = date("l, F j, Y, g:i a") ;

               
                $servicetext = $_POST['servicetext']; 
				
				$visitorname = $_POST['visitorname']; 
                
				$dob = $_POST['dob']; 

                $street = $_POST['street']; 
                $place = $_POST['place']; 
                $phone = $_POST['phone']; 
                $handy = $_POST['handy']; 
               



if (eregi('http:', $notes)) {
	die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,"."))) 
{
	echo "<h2>Use Back - Enter valid e-mail</h2>\n"; 
	$badinput = "<h2>Feedback was NOT submitted</h2>\n";
	echo $badinput;
	die ("Go back! ! ");
}

                if(empty($visitorname) || empty($visitormail) ) {
	echo "<h2>Use Back - fill in all fields</h2>\n";
	die ("Use back! ! "); 
}



                $subject = "Mitgliedsantrag"; 
                if(isset($_POST['donation']))
					{
                		$donationtype="Zahlendes Mitglied";
					}
	
				if(isset($_POST['service']))
                {
                	$donationtype="Zupackendes Mitglied. Ich biete folgende Leistung(en) an: $servicetext";	
                }

$message = " $todayis [EST] \n
Name, Vorname: $visitorname \n
Die Arbeit des Vereins will ich unterstützen als: $donationtype \n 
Geburtstag: $dob \n
Straße: $street\n
PLZ, Ort: $place\n
Telefon: $phone\n
Handy: $handy\n
From E-Mail: $visitorname ($visitormail)\n

";

$from = "From: $visitormail\r\n";

                $mail_sent =mail("monika.mueller.indienhilfe@anahata-ev.de", $subject, $message, $from);
                echo "<span style=\"margin:5px; top:15px; height:30px;\"><b>";
echo $mail_sent ? "Mail sent Successfully" : "Mail failed. Please Give Valid Email Id";
                echo "</b></span>";
                

?>
            </div>

<?php include("quicklinks.php"); ?>
</div>

<?php include("footer.php"); ?>
</div>
    </body>
</html>