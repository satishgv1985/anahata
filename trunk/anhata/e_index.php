<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Anhata Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="css/jstyle.css" />
    <link rel="stylesheet" type="text/css" href="slider/contentslider.css" />

    <script type="text/javascript" src="slider/contentslider.js"></script>

</head>

    <body>
<div class="jwrapper">

<?php include("header.php"); ?>
<div class="jcontent-area">
<div class="jleft-column">
                <div class="jbanner">
                    <div id="slider2" class="sliderwrapper imageplaceholder">
                        <div class="contentdiv">
                            <a href="e_photo-gallery.php">
                                <img style="border-style: none;" src="slider-images/1.jpg" width="597px" height="232px" /></a>
                        </div>
                        <div class="contentdiv">
                            <a href="e_photo-gallery.php">
                                <img style="border-style: none;" src="slider-images/2.jpg" width="597px" height="232px" /></a>
                        </div>
                        <div class="contentdiv">
                            <a href="e_photo-gallery.php">
                                <img style="border-style: none;" src="slider-images/3.jpg" width="597px" height="232px" /></a>
                        </div>
                    </div>
                    <div class="jimagedescription">
                    </div>
                    <div class="jswitching-buttons pagination" id="paginate-slider2">
                        <a href="#" class="toc" title="Next Image">1</a> <a href="#" class="toc" title="Next Image">
                            2</a> <a href="#" class="toc" title="Next Image">3</a>
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

                    </script>

                </div>
                <br />
                <div class="jtext-area">
                    <h1>
                        Who we are?</h1>
                    <p>
                        The German Anahata e. V. Association ( founded in Munich in 2003 by Monika Müller)
                        has been the development association for the Helping Eagle Foundation ( founded
                        in Puttaparthi/ India in 1999) for five years, up to now.</p>
                    <p>
                        Because of generating enough funds by itself, the Helping Eagle Foundation has eventually
                        become freelance.</p>
                    <p>
                        This self – dependence is entirely whithin the meaning of the Anahata e. V. Association,
                        that envisions itself as the initiator for self – help projects.</p>
                    <p>
                        Since 2008 we are conductive to the newly founded Sai Maa Society in Puttaparthi
                        (South India)
                    </p>
                    <a href="e_all-about-us.php" class="jread-more">
                        <img src="images/more_image.png" alt="Read more..." title="Read more..." /></a>
                </div>
            </div>

<?php include("quicklinks.php"); ?>
</div>

<?php include("footer.php"); ?>
</div>
    </body>
</html>