<div class="jfooter-spacer">
        </div>
        <div class="jfooter">
           
            
             <?php 
$currentFile = $_SERVER["PHP_SELF"];
if (strpos($currentFile, 'e_') == true) 
	{
echo <<<LINE
 <div class="jfooter-links">
                <ul>
                    <li><a href="e_all-about-us.php">All About Us</a></li>
                    <li><a href="e_sai-maa-services.php">Sai Maa Services</a></li>
                </ul>
                <ul>
                    <li><a href="e_photo-gallery.php">Photo Gallery</a></li>
                    <li><a href="e_videos.php">Videos</a></li>
                </ul>
                <ul>
                    <li><a href="e_contact-us.php">Contact Us</a></li>
                    <li><a href="e_sitemap.php">Sitemap</a></li>
                </ul>
            </div>
            <div class="jcopy-right">
                anahata &copy; all rights reserved.
            </div>

LINE;

    	
	} 
else if (strpos($currentFile, 'f_') == true) 
	{
    	
		echo <<<LINE
 <div class="jfooter-links">
    	<ul>
                    <li><a href="f_all-about-us.php">A propos de nous</a></li>
                    <li><a href="f_sai-maa-services.php">Sai Maa Services</a></li>
                </ul>
                <ul>
                    <li><a href="f_photo-gallery.php">Galerie de photos</a></li>
                    <li><a href="f_videos.php">Vidéos</a></li>
                </ul>
                <ul>
                    <li><a href="f_contact-us.php">Contactez-nous</a></li>
                    <li><a href="f_sitemap.php">Plan du site</a></li>
                </ul>
            </div>
            <div class="jcopy-right">
               anahata &copy; Tous droits réservés.
            </div>

LINE;
	}
else
	{
echo <<<LINE
 <div class="jfooter-links">
<ul>
                    <li><a href="all-about-us.php">Wir &#252;ber uns</a></li>
                    <li><a href="sai-maa-services.php">Sai Maa Dienstleistungen</a></li>
                </ul>
                <ul>
                    <li><a href="photo-gallery.php">Foto-Galerie</a></li>
                    <li><a href="videos.php">Videos</a></li>
                </ul>
                <ul>
                    <li><a href="contact-us.php">Kontakt</a></li>
                    <li><a href="sitemap.php">Seite-Karte</a></li>
                </ul>
            </div>
            <div class="jcopy-right">
                anahata &copy; alle Rechte vorbehalten.
            </div>
          

LINE;
}
	
     ?>
                
        </div>
        
        