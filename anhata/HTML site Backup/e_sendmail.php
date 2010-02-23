<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact Us - Anahata</title>
    <link rel="stylesheet" type="text/css" href="css/jstyle.css" />

    <script language="Javascript" type="text/javascript">
function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

function ValidateForm(){
    
    var visitorname=document.emailpro.visitorname
	if ((visitorname.value==null)||(visitorname.value=="")){
		alert("Enter Name")
		visitorname.focus()
		return false
	}
	
	var emailID=document.emailpro.visitormail
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Enter Email")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	
	
	
	return true
 }
    </script>

</head>
<body>
    <div class="jwrapper">
        <div class="jheader">
            <div class="jlogo-n-text-wrapper">
                <div class="jlogo">
                    <img src="images/anhata-logo.png" width="232" height="63" alt="anhata - A Project To Help In INDIA " />
                </div>
                <div class="jlogo-text">
                    A Project To Help In INDIA
                </div>
            </div>
            <div class="jutility-n-main-navigation-wrapper">
                <div class="jutility">
                    <div class="jleft-curve">
                    </div>
                    <div class="jmiddle">
                        <ul>
                            <li><a href="sitemap.html">Sitemap</a></li>
                            <li><a href="contact-us.html">Deutsche Version</a></li><li class="last"><a href="#">
                                French Version</a></li>
                        </ul>
                    </div>
                    <div class="jright-curve">
                    </div>
                </div>
                <div class="jmain-navigation-container" id="global_navigation">
                    <ul>
                        <li id="allAboutUs"><a href="e_index.html"><span>All About Us</span></a></li>
                        <li id="saiMaaServices" class="long"><a href="e_sai-maa-services.html"><span>Sai Maa
                            Services</span></a></li>
                        <li id="photoGallery"><a href="e_photo-gallery.html"><span>Photo Gallery</span></a></li>
                        <li id="videos"><a href="e_videos.html"><span>&nbsp;Videos&nbsp;</span></a></li>
                        <li id="contactUs"><a href="e_contact-us.html"><span>Contact Us</span></a></li>
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
            <!--<div class="jinner-banner-container">
                <img src="images/jinner-banner01.png" width="930" height="104" alt="Let Us keep them ready..." />
            </div>-->
            <div class="jclear">
            </div>
            <div class="jinner-content">
                <h1>
                    Contact Us</h1>
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



                   $subject = "Membership"; 
                   if(isset($_POST['donation']))
                   {
                   	$donationtype="As per Donation ";
                   }
                   
                   if(isset($_POST['service']))
                   {
                   	$donationtype="I can contribute my service as following: $servicetext";	
                   }

                   $message = " $todayis [EST] \n
Name, First Name: $visitorname \n
How can you support society: $donationtype \n 
Date of Birth: $dob \n
Street: $street\n
Place, PIN: $place\n
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
            <div class="jrcolwrapper">
                <div class="jsecondary-menu-container">
                    <div class="jbox-model-fix">
                        <h2>
                            Quick Links</h2>
                        <ul>
                            <li><a href="e_map.html">Map</a></li>
                            <li><a href="e_woman-empowerment.html">Women Empowerment</a></li>
                            <li><a href="e_organic-farming.html">Organic Farming</a></li>
                            <li><a href="e_keep-clean.html">Keep Clean - Make Green</a></li><li><a href="e_links.html">
                                Links</a></li>
                        </ul>
                        <h2>
                            Help Us</h2>
                        <ul>
                            <li class="jhelp-text">The association is regarded as non-profit-making associations
                                at the financial authority and gives donation receipts. Each single project can
                                also be supported. </li>
                        </ul>
                        <div class="jhelp-button">
                            <a href="e_donate.html">
                                <img src="images/jdonate-link.png" width="200" height="75" alt="Donate" title="Donate" /></a>
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
                    <li><a href="all-about-us.html">All About Us</a></li>
                    <li><a href="sai-maa-services.html">Sai Maa Services</a></li>
                </ul>
                <ul>
                    <li><a href="photo-gallery.html">Photo Gallery</a></li>
                    <li><a href="videos.html">Videos</a></li>
                </ul>
                <ul>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="sitemap.html">Sitemap</a></li>
                </ul>
            </div>
            <div class="jcopy-right">
                anahata &copy; all rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
