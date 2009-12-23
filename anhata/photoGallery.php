<html>
  <head>
    <title>Untitled Page</title>
    <link href="css/jstyle.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript">
      var MaxNumOfPhotos = 30;
      var CurrentPhotoCounter = 1;
      var PhotoDIRPath = "galleryImages/";

      function ChangeImg(currentImageNum)
      {
      CurrentPhotoCounter = currentImageNum;
      DisplayPhoto();
      }

      function DisplayPhoto()
      {
      document.images["img_Gallery"].src = PhotoDIRPath + CurrentPhotoCounter + ".jpg";
      var PrvImage = parseInt(CurrentPhotoCounter)-1;
      var NextImage = parseInt(CurrentPhotoCounter)+1;

      document.getElementById("ImageCounter").innerHTML = 'Image ' + CurrentPhotoCounter + ' of ' + MaxNumOfPhotos;

      //do not display the next link
      if (parseInt(MaxNumOfPhotos)==parseInt(CurrentPhotoCounter))
      document.getElementById("ImageNext").innerHTML = '';
      else
      document.getElementById("ImageNext").innerHTML = '<a href="javaScript:ChangeImg(\'' + NextImage + '\')">Next>></a>';

      //do not display the prev link
      if (parseInt(1)==parseInt(CurrentPhotoCounter))
      document.getElementById("ImagePrevious").innerHTML  = '';
      else
      document.getElementById("ImagePrevious").innerHTML = '<a href="javaScript:ChangeImg(\'' + PrvImage + '\')"> << Previous</a>';


      }
    </script>

  </head>
  <body>
    <?php include("header.php"); ?>
    <script type="text/javascript">
      var e = document.getElementById("photoGallery");
      e.setAttribute("class", "current");
      e.setAttribute("className", "current"); // for IE which does not recognize "class"
    </script>
    
    <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
      <tbody>
        <tr bordercolor="#666666" align="center" valign="middle">
          <td colspan="3" height="350">
            <img src="PhotoGallery_files/6.jpg" alt="Gallery" id="img_Gallery" border="0"></td>
        </tr>
        <tr valign="middle">
          <td class="size11" align="right" height="20" width="20%">
            &nbsp;<strong>
              <span id="ImagePrevious">
                <a href="javascript:ChangeImg('5')">
                  &lt;&lt;
                  Previous
                </a>
              </span>
            </strong>
          </td>
          <td class="size11" align="center" height="20" width="65%">
            <strong>
              <span id="ImageCounter">Image 6 of 30</span>
            </strong>
          </td>
          <td class="size11" align="left" height="20" width="20%">
            &nbsp;<strong>
              <span id="ImageNext">
                <a href="javascript:ChangeImg('7')">Next&gt;&gt;</a>
              </span>
            </strong>
          </td>
        </tr>
      </tbody>
    </table>
    <br />

      <script language="JavaScript">DisplayPhoto();</script>

    </body>
</html>
