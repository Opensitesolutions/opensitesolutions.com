 <!-- left Column -->
                <div id="secondaryContent">
                        <h3>Open Source Solutions</h3>
                        <ul>
				<li><a href="/home.php" title="open source Windows Alternative">Operating System</a></li>
        			<li><a href="/services/business.php" title="Open Source alternative for Business">Business Applications</a></li>
        			<li><a href="/services/network.php" title="Open Source for Network Solutions">Network Solutions</a> </li>
        			<li><a href="/services/altghost.php" title="Open Source alternative cloning">Disk Cloning Solutions</a> </li>
        			<li><a href="/services/network-mgmt.php" title="Open Source alternative Network Management">Monitoring-Management</a> </li>
        			<li><a href="/services/virtualization.php" title="Open Source alternative for Emulation and Virtualization">Emulation - Virtualization</a> </li>
        			<li><a href="/services/web.php" title="Open Source alternative for Web Development">Web Development</a> </li>
        			<li><a href="/services/privacy.php" title="Open Source alternative ensuring your Privacy">Privacy & Security</a></li>
        			<li><a href="/services/system.php" title="Open Source alternative System Utilities">System Utilities</a></li>
        			<li><a href="/services/databases.php" title="Open Source alternative Database Solutions">Databases</a></li>
        			<li><a href="/services/communication.php" title="Open Source alternative for Communicating on the Internet">Internet Communication</a></li>
				    <li><a href="/services/ecommerce.php" title="Open Source alternative Ecommerce Shopping Carts">Ecommerce </li>
        			<li><a href="/services/education.php" title="Open Source alternative Solutions for Education">Education</a></li>
        			<li><a href="/services/medical.php" title="Open Source alternative Solutions for Medical Profession">Medical</a></li>
        			<li><a href="/services/integrators.php" title="Open Source alternative Integrators">Open Source Integrators</a></li>
        			<li><a href="/services/dnstools.php" title="Open Source alternative Tools">Online DNS Tools</a></li>
                        </ul>

						<ul>
						<li><a href="/services/docs/">Articles</a>
						</ul>

			<?php
 			       include 'includes/adds/google_adsense_small_square_left.inc';
			?>

      <!--- Top kewords search analytics -->
      <?php

      // This function will call the API to get best keyword for current URL.
      // Then it writes the list of best keywords in a HTML list
      function DisplayTopKeywords($url = "")
      {
      	// Do not spend more than 1 second fetching the data
      	@ini_set("default_socket_timeout", $timeout = 1);
      	// Get the Keywords data
      	$url = empty($url) ? "http://". $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] : $url;
      	$api = "http://analytics.opensitesolutions.com/piwik/?module=API&method=Referrers.getKeywordsForPageUrl&format=json&filter_limit=10&token_auth=ec04b7884538cad79bb4d8c7dfedfd79&date=previous1&period=week&idSite=1&url=" . urlencode($url);
      	$keywords = @json_decode(file_get_contents($api), $assoc = true);
      	Common::sendHeader('Content-Type: text/html; charset=utf-8', true);
      	if ($keywords === false || isset($keywords["result"])) {
      		// DEBUG ONLY: uncomment for troubleshooting an empty output (the URL output reveals the token_auth)
      		// echo "Error while fetching the <a href='$api'>Top Keywords from Piwik</a>";
      		return;
      	}

      	// Display the list in HTML
      	$url = htmlspecialchars($url, ENT_QUOTES);
      	$output = "<h2>Top Keywords for <a href='$url'>$url</a></h2><ul>";
      	foreach($keywords as $keyword) {
      		$output .= "<li>". $keyword . "</li>";
      	}
      	if (empty($keywords)) { $output .= "Nothing yet..."; }
      	$output .= "</ul>";
      	echo $output;
      }

       DisplayTopKeywords();
       ?>
      <!-- End Top keyword search -->

                        <div class="xbg"></div>
                </div>
                <div class="clear"></div>
        </div>
        <!-- End Left Column -->
