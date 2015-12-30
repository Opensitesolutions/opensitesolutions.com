<?php
set_include_path ("/var/www/html/opensitesolutions.com/");
?>

<?php
    include 'includes/header.inc';
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
                                <h2 id="sect1">Apache</h2>
				<?php
					include 'includes/adds/google_advertise.inc';
				?>
				<h3>Apache Modules</h3>
				<p> Apache is the de-facto web server on the internet today and with the addition of modules becomes a very versatile server.
					Modules are usually built to solve a certain problem or to provide a missing functionality. This open source
					application comes with prebuilt modules which can be reviewed from the apache website. If you wish to search for all modules 				 whether from the 1.x branch or 2.x branch
					this <a href="http://modules.apache.org/search" target="_blank">site</a> offers a search facility which displays all registered modules. </p>
				
				<h3 id="sect2">Security</h3>
				<p> Providing security for the servers and web applications that provide internet users with the flexibility and ease of use that they have come to depend on when doing internet banking or online shopping from 
					spammers and hackers who are always looking to find ways to exploit these interfaces for there own benefit and creating ways for them to either 
					steal your money or worse your identity. Apache modules that can address these security issues are.
						<ul>
						<li><a href="http://www.modsecurity.org" target="_blank">Mod_Security</a> is an open source tool used to provide application level filtering.</li>
						<li><a href="http://www.zdziarski.com/projects/mod_evasive/" target="_blank">Mod_evasive</a> is an open source tool that prevents denial 					of service attacks against the server.</li>
						<li><a href="http://dominia.org/djao/limitipconn.html" target="_blank">limitipconn</a> is another open source tool tha provides bandwith				  and denial of service attacks.</li>
						</ul>
					
					<h3>Mod Security</h3>
					
					<p>Mod Securiy can monitor HTTP traffic in real time in order to detect attacks, thus acting as an application level firewall and 
					intrusion prevention for web applications.</p>
					<p>Mod Security has three different models for preventing attacks:
						<ul>
						<li><b>Negative Security model:</b> monitors requests for anomalies, unusual behaviour and common web applications attacks.
						 It keeps anomally scores for each requests, IP adresses, application sesseions and user accounts. Reuests with
						with high anomally scores are wither logged or rejected altoghether.</li>
						<li><b>Known weaknesses and vulnerability:</b> applications can be patched externally using mod_security as the front end without touching 
						the application source code, this utimately makes your application that much more security.</li>
						<li><b>Positive security model:</b> only requests that are known to be valid are accepted, everything else is rejected.</li>
						</ul>
						
						<h3>Deploying Mod Security</h3>
						<p>Mod Security can be deployed either <b>embedded</b> within apache or deployed on the <b>network</b> within apache in 
						front of all web based applications acting as a web filtering proxy, this has the added benefit of protecting non apache based web						servers as well.</p>
						<p>Mod Security works on a wide range of operating systems.
						<ul>
						<li>FreeBSD</li>
						<li>OpenBSD</li>
						<li>NetBSD</li>
						<li>Linus</li>
						<li>Solaris</li>
						<li>AIX</li>
						<li>HP-UX</li>
						<li>Mac OS</li>
						<li>Windows</li>
						</ul>
						
						<h3>Mod Security Configuration</h3>
						
						<p> Mod Security whether embedded or deployed on the network relies on a configuration file. This configuration file can de lengthy and
						needs to be reviewed before deploying. <b>Mod Security configuration manual</b> can be reviewed from this <a href="http://www.modsecurity.org/documentation/index.html" target="_blank">link</a>. 
						
						<p>The following configuration file can be used as a starting point for deploying this open source tool</p>
						<code>
						
						<IfModule mod_security.c><br>
						#Enable Mod_security<br>
						SecFilterEngine On<Br><br>

						#Logging<br>
						SecAuditEngine RelevantOnly<br>
						SecAuditLog /var/log/audit_log<br>
						# Logging<br>
						SecFilterDefaultAction "deny,log,status:404"<br><br>

						#Disable executing Unix commands<br>
						SecFilterSelective ARGS "bin/"<br><br>

						#Guard against Cross site scripting attacks<br>
						SecFilter "<script"></script><br>
						SecFilter "<.+>"<br><br>

						#Guard against directory traversal<br>
						SecFilter "\.\./"<br><br>

						#Chunked encoding<br>
						SecFilterCheckUnicodeEncoding On<br>
						SecFilterSelective HTTP_Transfer-Encoding "!^$"<br><br>

						#URL validation<br>
						SecFilterCheckURLEncoding On<br>
						SecFilterSelective THE_REQUEST "!^[\x0a\x0d\x20-\x7f]+$"<br><br>

						#Post Scanning<br>
						SecFilterScanPOST Off<br>
						SecFilterSelective HTTP_Content-Type \<br>
						"!(^$|^application/x-www-form-urlencoded$|^multipart/form-data;)"<br><br>

						# Reject requests with status 403<br>
						SecFilterDefaultAction "deny,log,status:403"<br>
						# By default log and deny suspicious requests<br>
						# with HTTP status 500<br>
						SecFilterDefaultAction "deny,log,status:500"<br><br>

						#Deny wget worm scripts<br>
						SecFilter cd\x20/tmp<br>
						SecFilter wget\x20<br><br>

						#Block Sanity Worm<br>
						SecFilterSelective ARG_highlight %27<br><br>

						</IfModule><br><br>
						
						</code>
					
					<h3>Mod Evasive</h3>
					<p>Webmasters have not had the opportunity to stop denial of service attacks on their webserver, blindly beleiving that the network 
					firewall is offering this protection. Most perimeter firewalls don't protect against attacks of requesting one or more pages in rapid 
					succession eventually overloading and bringing the server to it knees (DOS). Mod Evasive and it's old version mod_dosevasive offers real time
					denial of service protection.</p>
					<p>Mod Evasive is configured from a config file once the module is loaded into apache and it's configuration file.</p>
					<p>The following configuration file can be used as a starting point.</p>
					<code>
						&lt;IfModule mod_dosevasive20.c&gt;<br>
						DOSHashTableSize    3097<br>
						DOSPageCount        2<br>
						DOSSiteCount        10<br>
						DOSPageInterval     1<br>
						DOSSiteInterval     1<br>
						DOSBlockingPeriod   60<br>
						DOSLogDir           "/var/lock/mod_dosevasive"<br>
					&lt;/IfModule&gt;<br>
					</code><br>
					<p>If you are running apache 2.x the code above can be placed within a file located within your apache config located within the "Includes"
					directory</P>
					<p>As attacks are blocked you can observe what IP'tried to attack your server, heres an example of the log directory</p>
					<code>
					ls -la /var/lock/mod_dosevasive/ <br>
					total 54<br>
					drwxrwxrwx  2 root  wheel  1024 Feb  7 10:20 .<br>
					drwxr-xr-x  3 root  wheel   512 Jan 24 17:40 ..<br>
					-rw-r--r--  1 www   wheel     6 Jan 24 17:42 dos-127.0.0.1<br>
					-rw-r--r--  1 www   wheel     6 Jan 30 15:43 dos-150.135.118.217<br>
					-rw-r--r--  1 www   wheel     6 Feb  7 10:20 dos-192.109.190.88<br>
					-rw-r--r--  1 www   wheel     6 Jan 31 15:24 dos-192.160.124.68<br>
					-rw-r--r--  1 www   wheel     6 Jan 31 16:10 dos-204.146.182.254<br>
					-rw-r--r--  1 www   wheel     6 Jan 31 13:57 dos-206.47.99.133<br>
					-rw-r--r--  1 www   wheel     6 Jan 29 11:40 dos-208.76.74.85<br>
					-rw-r--r--  1 www   wheel     6 Feb  7 05:46 dos-212.244.47.130<br>
					-rw-r--r--  1 www   wheel     6 Jan 30 02:43 dos-213.178.125.41<br>
					-rw-r--r--  1 www   wheel     6 Feb  3 00:51 dos-220.225.82.98<br>
					-rw-r--r--  1 www   wheel     6 Feb  4 04:47 dos-34.253.3.200<br>
					-rw-r--r--  1 www   wheel     6 Jan 25 13:39 dos-63.83.48.10<br>
					-rw-r--r--  1 www   wheel     6 Jan 27 01:19 dos-65.248.100.253<br>
					-rw-r--r--  1 www   wheel     6 Feb  3 14:19 dos-66.30.220.78<br>
					-rw-r--r--  1 www   wheel     6 Jan 29 00:47 dos-66.74.238.233<br>
					-rw-r--r--  1 www   wheel     6 Feb  3 00:28 dos-67.86.26.192<br>
					-rw-r--r--  1 www   wheel     6 Feb  2 16:30 dos-68.105.138.243<br>
					-rw-r--r--  1 www   wheel     6 Feb  3 14:23 dos-69.248.124.178<br>
					-rw-r--r--  1 www   wheel     6 Feb  3 01:38 dos-72.66.25.137<br>
					-rw-r--r--  1 www   wheel     6 Jan 25 18:11 dos-76.160.35.118<br>
					-rw-r--r--  1 www   wheel     6 Jan 24 19:18 dos-81.157.178.67<br>
					-rw-r--r--  1 www   wheel     6 Feb  3 10:43 dos-82.170.63.11<br>
					-rw-r--r--  1 www   wheel     6 Jan 28 12:59 dos-83.40.97.96<br>
					-rw-r--r--  1 www   wheel     6 Feb  4 22:57 dos-99.243.238.139<br>
					</code><br>
					<p>IP addresses are blocked for a beginning of 10 minutes and increased expontially if the attack continues.</p>
					
					<h3>Mod_limitipconn</h3>
					 <p>coming soon</p>

                        </div>
                </div>
        <!-- End center Column -->


<?php
    include 'includes/left.inc';
?>


<?php
    include 'includes/footer.inc';
?>
