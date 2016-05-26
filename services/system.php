<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>System Utilities</title>
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

      <h1 id="top">System Utilities</h1>

      <h2>Categories</h2>
      <ul>
      <li><a href="#secure">Open Source Administration</a></li>
      <li><a href="#report">Open Source Reporting - logging</a></li>
      <li>
      </ul>

      <h5 id="secure">Secure Administration/ Communication</h5>
      <p class="post align-right">
      <ul>

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

      <li><a href="http://www.ntop.org" target="_blank">NTOP</a> is a open source browser based network traffic probe that shows the network usage, similar to what the popular top Unix command does. ntop is based on libpcap and it has been written in a portable way in order to virtually run on every Unix platform and on Win32 as well. </li><br>
      <li><a href="http://www.phplogcon.org/" target="_blank">PHPLogCon</a> is a web interface to syslog and other network event data. It provides easy browsing and some basic analysis of realtime network events. Depending on the applications feeding the database, it can process syslog messages, Windows event log entries and even SNMP trap data. It runs on windows, unix and linux platforms.</li><br>
      <li><a href="http://www.rsyslog.com/" target="_blank">Rsyslog</a> is an enhanced open source multi-threaded syslogd supporting, among others, MySQL, syslog/tcp, RFC 3195, permitted sender lists, filtering on any message part, and fine grain output format control. It is quite compatible to stock syslogd and can be used as a drop-in replacement. Its advanced features make it suitable for enterprise-class, encryption protected syslog relay chains while at the same time being very easy to setup for the novice user. An optional web interface - phpLogCon - can be used to visualize all data online. In November 2007, rsyslog has become the default syslogd for the Fedora project.</li><br>
      <li><a href="http://www.splunk.com" target="_blank">Splunk</a> open source search software that indexes all your log files to solve critical problems, splunk is the google of reporting taken logs from loging servers and making them searchable.</li><br>
      <li><a href="http://www.balabit.com/network-security/syslog-ng/opensource-logging-system/" target="_blank">Syslog-ng</a> can operate in server or agent mode and apart form UDP support the reliable TCP protocol. Sylog-ng can be used to created flexible and reliable logging infrastructure in a hetergenous environments</li><br>
      <br>
      <a href="#top">Top</a>
      </ul>
      </p>

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
