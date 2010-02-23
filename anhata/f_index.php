<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<title>Bienvenue à Anahata</title>
<link rel="stylesheet" type="text/css" href="css/jstyle.css" />
<link rel="stylesheet" type="text/css" href="slider/contentslider.css" />

<script type="text/javascript" src="slider/contentslider.js"></script>

</head>

<body>
<div class="jwrapper"><?php include("header.php"); ?>
<div class="jcontent-area">
<div class="jleft-column">
<div class="jbanner">
<div id="slider2" class="sliderwrapper imageplaceholder">
<div class="contentdiv"><a href="f_photo-gallery.php"> <img
	style="border-style: none;" src="slider-images/1.jpg" width="597px"
	height="232px" /></a></div>
<div class="contentdiv"><a href="f_photo-gallery.php"> <img
	style="border-style: none;" src="slider-images/2.jpg" width="597px"
	height="232px" /></a></div>
<div class="contentdiv"><a href="f_photo-gallery.php"> <img
	style="border-style: none;" src="slider-images/3.jpg" width="597px"
	height="232px" /></a></div>
</div>
<div class="jimagedescription"></div>
<div class="jswitching-buttons pagination" id="paginate-slider2"><a
	href="#" class="toc" title="Next Image">1</a> <a href="#" class="toc"
	title="Next Image"> 2</a> <a href="#" class="toc" title="Next Image">3</a>
</div>

<script type="text/javascript">

                    featuredcontentslider.init({
                        id: "slider2",  //id of main slider DIV
                        contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
                        toc: "markup",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
                        nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
                        revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
                        enablefade: [true, 0.2],  //[true/false, fadedegree]
                        autorotate: [true, 3000],  //[true/false, pausetime]
                        onChange: function(previndex, curindex){  //event handler fired whenever script changes slide
                            //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
                            //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
                        }
                    })

                    </script></div>
<br />
<div class="jtext-area">
<h1>informations sur nous</h1>
<p>Le nom: ANAHATA</p>
<p>Chacun possède sept chacres. Le chacre du coeur se nomme en Sanskrit
"ANAHATA".</p>
<p>Ce chacre est considéré comme centre de l’amour cosmique. Il s’agit
aussi du centre de rééquilibrage et de balance des chacres inférieurs (
avec accentuation physique ) et les chacres supérieurs ( avec
accentuation spirituelle ). Il est considéré aussi comme centre de
rotation d’une balance. Les personnes avec accent sur ce chacre vivent
dans une harmonie équilibrée, avec un amour pout tout ce qui leur
rencontre.</p>

<a href="f_all-about-us.php" class="jread-more"> <img
	src="images/more_image.png" alt="Read more..." title="Read more..." /></a>
</div>
</div>

<?php include("quicklinks.php"); ?></div>

<?php include("footer.php"); ?></div>
</body>
</html>
