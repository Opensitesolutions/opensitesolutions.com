<?php
set_include_path ("/var/www/html/opensitesolutions.com/");
?>

<?php
    include 'services/includes/header_sys.inc';
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
                                <h2 id="top">System Utilities</h2>

<br>
<h2>Categories</h2>
<ul>
<li><a href="#secure">Open Source Administration</a></li>
<li><a href="#report">Open Source Reporting - logging</a></li>
<li>
</ul>

<h5 id="secure">Secure Administration/ Communication</h5>
<p class="post align-right">
                <ul>
                <b>Open Source Solutions</b>
                <li><a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">Putty</a> is a open source client program for the SSH, Telnet and Rlogin network
protocols</li><br>
                <li><a href="http://winscp.net/eng/index.php">WinSCP</a> WinSCP is an open source SFTP client and FTP client for Windows. Its main function is the
 secure file transfer between a local and a remote computer.</li><br>
		<a href="#top">Top</a>
                </ul>
</p>

<h5 id="report">Reporting - Logging</h5>
<p class="post align-right">
                <ul>
                <b>Open Source Solutions</b>
                <li><a href="http://www.ntop.org" target="_blank">NTOP</a> is a open source browser based network traffic probe that shows the network usage, similar to what the popular top Unix command does. ntop is based on libpcap and it has been written in a portable way in order to virtually run on every Unix platform and on Win32 as well. </li><br>
	<li><a href="http://www.phplogcon.org/" target="_blank">PHPLogCon</a> is a web interface to syslog and other network event data. It provides easy browsing and some basic analysis of realtime network events. Depending on the applications feeding the database, it can process syslog messages, Windows event log entries and even SNMP trap data. It runs on windows, unix and linux platforms.</li><br>
	<li><a href="http://www.rsyslog.com/" target="_blank">Rsyslog</a> is an enhanced open source multi-threaded syslogd supporting, among others, MySQL, syslog/tcp, RFC 3195, permitted sender lists, filtering on any message part, and fine grain output format control. It is quite compatible to stock syslogd and can be used as a drop-in replacement. Its advanced features make it suitable for enterprise-class, encryption protected syslog relay chains while at the same time being very easy to setup for the novice user. An optional web interface - phpLogCon - can be used to visualize all data online. In November 2007, rsyslog has become the default syslogd for the Fedora project.</li><br>
        <li><a href="http://www.splunk.com" target="_blank">Splunk</a> open source search software that indexes all your log files to solve critical problems, splunk is the google of reporting taken logs from loging servers and making them searchable.</li><br>
	<li><a href="http://www.balabit.com/network-security/syslog-ng/opensource-logging-system/" target="_blank">Syslog-ng</a> can operate in server or agent mode and apart form UDP support the reliable TCP protocol. Sylog-ng can be used to created flexible and reliable logging infrastructure in a hetergenous environments</li><br>
<br>
		<a href="#top">Top</a>
                </ul>

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
