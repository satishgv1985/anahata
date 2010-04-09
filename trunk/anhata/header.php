<div class="jheader">
            <div class="jlogo-n-text-wrapper">
                <div class="jlogo">
                    <img src="images/anhata-logo.png" width="232" height="63" alt="anhata - A Project To Help In INDIA " />
                </div>
                <div class="jlogo-text">
            <?php 
$currentFile = $_SERVER["PHP_SELF"];
if (strpos($currentFile, 'e_') == true) 
	{
    	echo "A Project To Help In INDIA";
	} 
else if (strpos($currentFile, 'f_') == true) 
	{
    	echo "Un projet pour aider En INDE";
	}
else
	{
		echo "Ein Hilfsprojekt in Indien";
	}
      ?>        
                </div>
            </div>
            <div class="jutility-n-main-navigation-wrapper">
                <div class="jutility">
                    <div class="jleft-curve">
                    </div>
                    <div class="jmiddle">
                        <ul>
                            
<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);

if (strpos($currentFile, 'e_') == true) 
	{
echo '<li><a href="e_sitemap.php">Site-Map</a></li>';
echo "<li><a href='".substr(end($parts),2)."'>Deutsche Version</a></li>";
echo "<li><a href='f_".substr(end($parts),2)."'>French Version</a></li>";
echo "<li style='background-image:none'><a href='".end($parts)."'><b>English Version</b></a></li>";
	} 
else if (strpos($currentFile, 'f_') == true) 
	{
echo '<li><a href="f_sitemap.php">Plan du site</a></li>';
echo "<li><a href='".substr(end($parts),2)."'>Deutsche Version</a></li>"; 
echo "<li><a href='".end($parts)."'><b>French Version</b></a></li>"; 
echo "<li style='background-image:none'><a href='e_".substr(end($parts),2)."'>English Version</a></li>";  	
	}
else
	{
echo '<li><a href="sitemap.php">Seite-Karte</a></li>';
echo "<li><a href='".end($parts)."'><b>Deutsche Version</b></a></li>";
echo "<li><a href='f_".end($parts)."'>French Version</a></li>";
echo "<li style='background-image:none'><a href='e_".end($parts)."'>English Version</a></li>";
	}

	?>
                        </ul>
                    </div>
                    <div class="jright-curve">
                    </div>
                </div>
                <div class="jmain-navigation-container" id="global_navigation">
                    <ul>
                    <?php 
$currentFile = $_SERVER["PHP_SELF"];
if (strpos($currentFile, 'e_') == true) 
	{
    	echo '<li id="allAboutUs"><a href="e_index.php"><span>All About Us</span></a></li>';
        echo '<li id="saiMaaServices" class="long"><a href="e_sai-maa-services.php"><span>Sai Maa Services</span></a></li>';
        echo '<li id="photoGallery"><a href="e_photo-gallery.php"><span>Photo-Gallery</span></a></li>';
        echo '<li id="videos"><a href="e_videos.php"><span>&nbsp;Videos&nbsp;</span></a></li>';
        echo '<li id="contactUs"><a href="e_contact-us.php"><span>Contact Us</span></a></li>';
	} 
else if (strpos($currentFile, 'f_') == true) 
	{
    	echo '<li id="allAboutUs"><a href="f_index.php"><span>À propos de</span></a></li>';
        echo '<li id="saiMaaServices" class="long"><a href="f_sai-maa-services.php"><span>Sai Maa Services</span></a></li>';
        echo '<li id="photoGallery"><a href="f_photo-gallery.php"><span>Galerie de photos</span></a></li>';
        echo '<li id="videos"><a href="f_videos.php"><span>&nbsp;Vidéos&nbsp;</span></a></li>';
        echo '<li id="contactUs"><a href="f_contact-us.php"><span>Contactez-nous</span></a></li>';
	}
else
	{
		echo '<li id="allAboutUs"><a href="index.php"><span>Wir &#252;ber uns</span></a></li>';
        echo '<li id="saiMaaServices" class="long"><a href="sai-maa-services.php"><span>Sai Maa Dienstleistungen</span></a></li>';
        echo '<li id="photoGallery"><a href="photo-gallery.php"><span>Foto-Galerie</span></a></li>';
        echo '<li id="videos"><a href="videos.php"><span>&nbsp;Videos&nbsp;</span></a></li>';
        echo '<li id="contactUs"><a href="contact-us.php"><span>Kontakt</span></a></li>';
	}
	
      ?>    
</ul>
<?php 

echo '<script type="text/javascript">';
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);

if ((strpos($currentFile, 'all-about-us') == true) 
	|| (strpos($currentFile, 'index') == true)
	|| (strpos($currentFile, 'sitemap') == true)
	|| (strpos($currentFile, 'news-letter') == true)
	) 
{
	echo 'var e = document.getElementById("allAboutUs");';
	echo 'e.setAttribute("class", "current");';
	echo 'e.setAttribute("className", "current");'; 
}
else if ((strpos($currentFile, 'contact-us') == true)
		 || (strpos($currentFile, 'donate') == true)
		 || (strpos($currentFile, 'map') == true) 
		 ) 
{
	echo 'var e = document.getElementById("contactUs");';
	echo 'e.setAttribute("class", "current");';
	echo 'e.setAttribute("className", "current");'; 
}
else if (strpos($currentFile, 'photo-gallery') == true)
{
	echo 'var e = document.getElementById("photoGallery");';
	echo 'e.setAttribute("class", "current");';
	echo 'e.setAttribute("className", "current");'; 
}
else if (strpos($currentFile, 'videos') == true)
{
	echo 'var e = document.getElementById("videos");';
	echo 'e.setAttribute("class", "current");';
	echo 'e.setAttribute("className", "current");'; 
}
else if((strpos($currentFile, 'sai-maa-services') == true) 
		|| (strpos($currentFile, 'keep-clean') == true)
		|| (strpos($currentFile, 'news-mobile-tailoring-school') == true)
		|| (strpos($currentFile, 'organic-farming') == true)
		|| (strpos($currentFile, 'woman-empowerment') == true)
		|| (strpos($currentFile, 'links') == true)
		)
{
	echo 'var e = document.getElementById("saiMaaServices");';
	echo 'e.setAttribute("class", "long_current");';
	echo 'e.setAttribute("className", "long_current");'; 
}

echo '</script>';              
                    ?>

</div>
</div>
</div>