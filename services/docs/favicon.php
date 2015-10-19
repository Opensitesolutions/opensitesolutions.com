<?php
set_include_path ("/var/www/html/opensitesolutions.com/");
?>

<?php
    include 'services/includes/header.inc';
?>
<?php
    include 'includes/topmenu.inc';
?>

<?php
    include 'includes/right.inc';
?>

<!-- Center Column -->
                <div id="primaryContentContainer">
                        <div id="primaryContent">
                                <h2>Creating a Favourite Icon</h2>
				<?php
					include 'includes/adds/google_advertise.inc';
				?>
				
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
                 <ul>
                        <li><a href="http://www.gimp.org">GIMP</a> for creating the image.
                        <li><a href="http://netpbm.sourceforge.net">Netpbm</a> for converting the image to the final format.
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
		<blockquote>
                ppmtowinicon -output favicon.ico input file.pnm (your file that you save from above).
		</blockquote>
                </p>

                <p>
                <h3>Add the Favicon image to your Website</h3>
                To add your final "favicon.ico" to your website place the image in the root of your directory tree and or add the following url to your web pages.<b
r><br>
		<pre>
                <LINK REL="shortcut icon" href="http://www.yourdomain.com/favicon.ico">
		</pre>
                <br>
                Once you have completed the above items you can now show off your work.
                </p>


                        </div>
                </div>
        <!-- End center Column -->


<?php
    include 'includes/left.inc';
?>


<?php
    include 'includes/footer.inc';
?>
