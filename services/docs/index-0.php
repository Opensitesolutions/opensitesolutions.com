<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Journey into using code and open source tools to create change'>
    <meta name="keywords" content="GIT, ansible, docker, terraform, consul, vagrant, config management, continous integration, continuos delivery, change managment ">
    <title>Become one with the Code</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body>

<?php
set_include_path('includes:../includes');
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

      <h2>OpensiteSolutions Articles</h2>

      <h2>Articles</h2>
      <ul>
      <b>Web</b>
      <li>Creating a <a href="favicon.php"> Favicon</a></li>
      <li>Apache <a href="apache.php#sect1">web</a> server</li>
      <li>Apache Web <a href="apache.php#sect2">Security</a></li><br>
      <b>Security</b>
      <li>PfSense <a href="firewall.php">Firewall</a></li>
      <li>Monitoring <a href="pfsense_monitoring.php">PFSense</a></li>
      <b>LDAP</b>
      <li>Installing and configuring LDAP <a href="freebsdldap_guide.php">LDAP</a>
      <li>BSD LDAP <a href="ldap.php">configuratoin</a>
      </ul>

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
