<div class="jrcolwrapper">
<div class="jsecondary-menu-container">
<div class="jbox-model-fix"><?php 
$currentFile = $_SERVER["PHP_SELF"];
if (strpos($currentFile, 'e_') == true)
{
	echo <<<LINE
<h2>Quick Links</h2>
                        <ul>
                            <li><a href="e_map.php">Map</a></li>
                            <li><a href="e_woman-empowerment.php">Women Empowerment</a></li>
                            <li><a href="e_organic-farming.php">Organic Farming</a></li>
                            <li><a href="e_keep-clean.php">Keep Clean - Make Green</a></li>
                            <li><a href="e_links.php">Links</a></li>
                            <li><a href="e_news-letter.php">News Letter</a></li>
                        </ul>
                        <h2>
                            News</h2>
                        <ul>
                            <li><a href="e_news-mobile-tailoring-school.php">Mobile TAILORING SCHOOL of Sai Maa Society...08/02/2010</a></li>
                            <li><a href="e_news-letter.php#bufallo">Buffalos</a></li>
                            <li><a href="e_news-letter.php#bank">Bank account for staff</a></li>
                            <li><a href="e_news-letter.php#eco">Eco-Clubs</a></li>
                            <li><a href="e_bath-rooms-siddapuram.php">Bathrooms For SIDDARAMPURAM</a></li> 
                            
                            
                        </ul>
                        <h2>
                            Help Us</h2>
                        <ul>
                            <li class="jhelp-text">The association is regarded as non-profit-making associations
                                at the financial authority and gives donation receipts. Each single project can
                                also be supported.</li>
                        </ul>
                        <div class="jhelp-button">
                            <a href="e_donate.php">
                                <img src="images/jdonate-link.png" width="200" height="75" alt="Donate" title="Donate" /></a>
                        </div>
LINE;
}
else if (strpos($currentFile, 'f_') == true)
{
	echo <<<LINE
<h2>Liens rapides</h2>
                        <ul>
                            <li><a href="f_map.php">Map</a></li>
                            <li><a href="f_woman-empowerment.php">Women Empowerment</a></li>
                            <li><a href="f_organic-farming.php">Organic Farming</a></li>
                            <li><a href="f_keep-clean.php">Keep Clean - Make Green</a></li>
                            <li><a href="f_links.php">Links</a></li>
                            <li><a href="f_news-letter.php">News Letter</a></li>
                        </ul>
                        <h2>
                            Nouvelles</h2>
                        <ul>
                            <li><a href="f_news-mobile-tailoring-school.php">Mobile ADAPTATION SCOLAIRE DU Sai Maa société...08/02/2010</a></li>
                            <li><a href="f_news-letter.php#bufallo">Les buffles</a></li>
                            <li><a href="f_news-letter.php#bank">Comptes en banque pour</a></li>
                            <li><a href="f_news-letter.php#eco">Eco-Clubs</a></li>
                            <li><a href="f_bath-rooms-siddapuram.php">Salles de bain pour SIDDARAMPURAM</a></li>
                            
                        </ul>
                        <h2>
                            Aide-nous</h2>
                        <ul>
                            <li class="jhelp-text">L'association est considérée comme non-lucratif des associations à l'autorité financière et donne des reçus de dons. Chaque projet unique peut également être soutenus.</li>
                        </ul>
                        <div class="jhelp-button">
                            <a href="f_donate.php">
                                <img src="images/jdonate-link-french.png" width="200" height="75" alt="Donate" title="Donate" /></a>
                        </div>
LINE;
}
else
{
	echo <<<LINE
<h2>Schnelle Verbindungen</h2>

<ul>
	<li><a href="map.php">Karte</a></li>
	<li><a href="woman-empowerment.php">Frauenpower</a></li>
	<li><a href="organic-farming.php">Organic Farming</a></li>
	<li><a href="keep-clean.php">Keep Clean - Make Green</a></li>
	<li><a href="links.php">Links</a></li>
	<li><a href="news-letter.php">News Letter</a></li>
</ul>
<h2>Nachrichten</h2>
                        <ul>
                            <li><a href="news-mobile-tailoring-school.php">Die mobile N&#196;HSCHULE der Sai Maa Society hat am 8. Februar 2010</a></li>
                            <li><a href="news-letter.php#bufallo">Wasserbüffel</a></li>
                            <li><a href="news-letter.php#bank">Bankkonto</a></li>
                            <li><a href="news-letter.php#eco">Eco-Clubs</a></li>
                            <li><a href="bath-rooms-siddapuram.php">Badezimmer Für  SIDDARAMPURAM</a></li>
                            
                            
                        </ul>
                        <h2>
                            Helfen Sie Uns</h2>
                        <ul>
                            <li class="jhelp-text">Der Verein ist beim Finanzamt als gemeinn&#252;tzig anerkannt und
                                stellt Spendenbescheinigungen aus. Sie k&#246;nnen auch einzelne Projekte f&#246;rdern. </li>
                        </ul>
                        <div class="jhelp-button">
                            <a href="donate.php">
                                <img src="images/jdonate-link-german.png" width="200" height="75" alt="Schenken"
                                    title="Schenken" /></a>
                        </div>

LINE;
}
?></div>
</div>
</div>
