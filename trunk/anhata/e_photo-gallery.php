<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
    <title>Photo Gallery - Anahata</title>
    <link rel="stylesheet" type="text/css" href="css/jstyle.css" />
    <script type="text/javascript" src="lightbox/prototype.js"></script>
    <script type="text/javascript" src="lightbox/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="lightbox/lightbox.js"></script>
    <link rel="stylesheet" href="lightbox/lightbox.css" type="text/css" media="screen" />
    <style type="text/css">
        div.divthumb{float:left}
        div.divthumb{margin:0 5px 5px 0}
        div.divthumb a img{display:block;border:1px solid #CCC;padding:3px;background:white}
        div.divthumb a:hover img{background:#EEE}
    </style>
</head>

    <body>
    <div class="jwrapper">

<?php include("header.php"); ?>
<div class="jcontent-area">
<div class="jleft-column" style="padding-top: 10px;">
                <div class="jtext-area">
                    <h1>
                        Photo Gallery
                    </h1>
                   <?php include("photo-gallery-ALL.php"); ?>
                </div>
            </div>
<?php include("quicklinks.php"); ?>
</div>

<?php include("footer.php"); ?>
</div>
    </body>
</html>