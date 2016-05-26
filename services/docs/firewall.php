<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>Changeme</title>
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

      <h1>PFSense Firewall</h1>
      <p>
      <p>Firewalls provide protection from hackers trying to gain access to your computer, network through malicious means. This ser
      ver sits between you and the internet acting as a security guard examining and stopping potential dangerous code.</p>

      <p> This type of protection is no longer restricted to Enterprises, Opensitesolutions provides this perimeter defense at a low
      cost service through software and hardware at an affordable price.</p>

      <p class="post align-right">
      <a href="http://www.pfsense.org" class="readmore">PFSENSE</a>
      <span class="date">July 09, 2007</span>
      </p>


      <h2>Firewall Appliance</h2>
      <img src="/images/pfsense_logo.gif">
      <p>Advances in technology and open source software has made implementing this solution using commodity hardware or modern devices very easy.</p>
      <Ul>
      <li>Secure Access to the internet</li>
      <li>Stateful Protection</li>
      <li>HTTP Access</li>
      <li>Basic IM monitoring </li>
      <li>Traffic Shaping</li>
      <li><a href="pfsense_monitoring.php">Real Time Reporting</a></li>
      <li>Intrusion Prevention</li>
      <li>Web based Administration</li>
      <li>Supports multiple interfaces, wan, wireless and DMZ</li>
      <li>Supports DHCP, PPPOE, BIG POND and Static IP assignment</li>
      </ul>

      <p>
      All made available through the use of <a href="http://www.pfsense.com" target="_windows">pfsense</a> a very robust firewall based on <a href="http://www.freebsd.com " target="_window">freebsd</a> a secure enterprise grade operating system.
      </p>

      <b>related articles</b> <a href="/services/docs/pfsense_monitoring.php">Pfsense monitoring</a>


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
