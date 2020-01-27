<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container-fluid">
<?php
$directory = './img'; //folder na zdjęcia
$fileList = scandir($directory); //znajdz wszystko w folderze
$fileList = array_diff($fileList, Array('.','..'));// usuń . i .. (ten katalog i katalog wyżej)



foreach ($fileList as $key => $value) {
    $image = '<img onClick="showLightbox()" class="col-3" src="img/';
    $image .= $value;
    $image .= '">';

    echo $image;
}


?>
</div><!-- /container-fluid -->
<div class="lightbox" id="lightbox">
    <img id="lightboxImage" 
        src="http://localhost/simplegallery/img/Moody_Landscapes_1.jpg"
        onClick="hideLightbox()">
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    function showLightbox() 
    {  
        var source = event.target || event.srcElement;
        document.getElementById("lightboxImage").src = source.src;
        document.getElementById("lightbox").style.display = "block";
        centerPhoto();
    }
    function centerPhoto() 
    {
        var totalWidth = document.getElementById("lightbox").offsetWidth;
        var totalHeight = document.getElementById("lightbox").offsetHeight;
        var image = document.getElementById("lightboxImage");
        var imageWidth = image.width;
        var imageHeight = image.height;

        var positionLeft = ( totalWidth - imageWidth ) / 2;
        var positionTop = ( totalHeight - imageHeight ) / 2;
        image.style.left = positionLeft + "px";
        image.style.top = positionTop + "px";
    }
    function hideLightbox() 
    {
        document.getElementById("lightbox").style.display = "none";
    }
    </script>
  </body>
</html>
