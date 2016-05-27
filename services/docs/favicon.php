<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>How to create a Favicon</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body>

<?php
set_include_path('.:includes:../includes:../../includes');
?>

<?php
include 'navbar.inc'
?>

<?php
include 'left.inc';
?>

<!--- begin center column Place information here--->
<div class="col-md-8">
 <div class="container-fluid">
   <!--- begin content --->

        <h1>How to create a Favicon</h1>

        <p>
        Every wonder how to make those favicon.ico images that appear besides your site name, or how to get rid of the <b>404</b> error messages "GET /favic
        on.ico HTTP/1.1" or [error] [client 192.168.1.] File does not exist in your error logs.
        </p>
        <p>
        The Favicon (Favourite Icon) is recognized by most modern browsers and is automatically fetched on each request to a site. The properties of a favic
        on is either 16x16 pixels (default) or 32x32 using either 8-bit or 24-bit colors. the format when completed is either a PNG format W3C standard, GIF or ICO.
        </p>
        <p>
        <h3>Creating an image</h3>
        A favicon is a visual identity that is attached to your website. Creating this image can be done quite easily using open source tools.
        <ul class="list-item">
        <li class="list-group-item"><a href="http://www.gimp.org">GIMP</a> for creating the image.
        <li class="list-group-item"><a href="http://netpbm.sourceforge.net">Netpbm</a> for converting the image to the final format.
        </ul>
        </p>
        <p>
        Creating the image using GIMP is fairly straightforward, depending on how much of an artis you are will depend how long this step will take. Once yo
        u have an image with the deminsion metioned above you should save the image as a pnm format. This format should be used so that netpbm can easily convert to the fin
        al favicon image
        </p>
        <p>
        <h3>Converting the Image</h3>
        Once you have the image use the netpbm package to convert the image.<Br>
        command: (done from unix command line)<br><br>
        <code>
        ppmtowinicon -output favicon.ico input file.pnm (your file that you save from above).
        </code>
        </p>


        <h3>Add the Favicon image to your Website</h3>
        <p>
        To add your final "favicon.ico" to your website place the image in the root of your directory tree and or add the following url to your web pages.
        </p>
        <code>
          <LINK REL="shortcut icon" href="/path/to/favicon.ico">
        </code>

   <!--- end content --->

 </div>
</div>
<!--- end center column --->

<?php
include 'right.inc';
?>

<?php
include 'footer.inc';
?>
