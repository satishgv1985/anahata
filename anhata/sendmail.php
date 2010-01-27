<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Kontakt - Anahata</title>
    <link rel="stylesheet" type="text/css" href="css/jstyle.css" />
</head>
<body>
    <div class="jwrapper">
        <div class="jheader">
            <div class="jlogo-n-text-wrapper">
                <div class="jlogo">
                    <img src="images/anhata-logo.png" width="232" height="63" alt="anhata - A Project To Help In INDIA " />
                </div>
                <div class="jlogo-text">
                    Ein Hilfsprojekt in Indien
                </div>
            </div>
            <div class="jutility-n-main-navigation-wrapper">
                <div class="jutility">
                    <div class="jleft-curve">
                    </div>
                    <div class="jmiddle">
                        <ul>
                            <li><a href="sitemap.html">Seite-Karte</a></li>
                            <li><a href="e_contact-us.html">English Version</a></li><li class="last"><a href="#">
                                French Version</a></li>
                        </ul>
                    </div>
                    <div class="jright-curve">
                    </div>
                </div>
                <div class="jmain-navigation-container" id="global_navigation">
                    <ul>
                        <li id="allAboutUs"><a href="index.html"><span>Wir über uns</span></a></li>
                        <li id="saiMaaServices" class="long"><a href="sai-maa-services.html"><span>Sai Maa Dienstleistungen</span></a></li>
                        <li id="photoGallery"><a href="photo-gallery.html"><span>Foto-Galerie</span></a></li>
                        <li id="videos"><a href="videos.html"><span>&nbsp;Videos&nbsp;</span></a></li>
                        <li id="contactUs"><a href="contact-us.html"><span>Kontakt</span></a></li>
                    </ul>
                </div>
            </div>

            <script type="text/javascript">
                var e = document.getElementById("contactUs");
                e.setAttribute("class", "current");
                e.setAttribute("className", "current"); 
            </script>

        </div>
        <div class="jcontent-area">
            <div class="jclear">
            </div>
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
Die Arbeit des Vereins will ich unterstützen als:   $donationtype \n 
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
echo $mail_sent ? "Mail sent Successfully" : "Mail failed";
                echo "</b></span>";
                

?>
            </div>
            <div class="jrcolwrapper">
                <div class="jsecondary-menu-container">
                    <div class="jbox-model-fix">
                        <h2>
                            Schnelle Verbindungen</h2>
                        <ul>
                            <li><a href="map.html">Karte</a></li>
                            <li><a href="woman-empowerment.html">Women Empowerment</a></li>
                            <li><a href="organic-farming.html">Organic Farming</a></li>
                            <li><a href="keep-clean.html">Keep Clean - Make Green</a></li><li><a href="links.html">
                                Links</a></li>
                        </ul>
                        <h2>
                            Helfen Sie Uns</h2>
                        <ul>
                            <li class="jhelp-text">Der Verein ist beim Finanzamt als gemeinnützig anerkannt und
                                stellt Spendenbescheinigungen aus. Sie können auch einzelne Projekte fördern. </li>
                        </ul>
                        <div class="jhelp-button">
                            <a href="donate.html">
                                <img src="images/jdonate-link-german.png" width="200" height="75" alt="Schenken"
                                    title="Schenken" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jfooter-spacer">
        </div>
        <div class="jfooter">
            <div class="jfooter-links">
                <ul>
                    <li><a href="all-about-us.html">Wir über uns</a></li>
                    <li><a href="sai-maa-services.html">Sai Maa Dienstleistungen</a></li>
                </ul>
                <ul>
                    <li><a href="photo-gallery.html">Foto-Galerie</a></li>
                    <li><a href="videos.html">Videos</a></li>
                </ul>
                <ul>
                    <li><a href="contact-us.html">Kontakt</a></li>
                    <li><a href="sitemap.html">Seite-Karte</a></li>
                </ul>
            </div>
            <div class="jcopy-right">
                anahata &copy; alle Rechte vorbehalten.
            </div>
        </div>
    </div>
</body>
</html>
