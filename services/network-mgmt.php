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
    <link href="/style.css" rel="stylesheet">
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

    <h1 id="top">Network Management</h1>
    <br><br>
    <h2>Categories</h2>
    <ul>
    <li><a href="#monitoring">Open source Network Monitoring</a></li>
    <li><a href="#nim">Open source Network Inventory Management</a></li>
    </ul>


    <h5 id="monitoring">Network Monitoring</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solutions</b>
    <li><a href="http://www.centreon.com/" target="_blank">Centreon</a> is an open source IT infrastructure and application monioring for service performance.</li><br>
    <li><a href="http://www.hyperic.com" target="_blank">Hyperic</a> is an open source monioring system that can manage open source, commercial or a hybrid systems. Features are auto-discovery of assets, montors metris of 65+ technologies across 8 Oses, tracks performance, alerting and corrective control.
    </li><br>
    <li><a href="http://www.icinga.org/" target="_blank">Icinga</a> is a fork of nagios and is an enterprise grade open source monitoring system</li><br>
    <li><a href="http://www.nagios.org" target="_blank">NAGIOS</a> is an open source host and service monitor designed to inform you of network problems before yourclients, end-users or managers do. It has been designed to run under the Linux operating system, but works fine under most *NIX variants as well. </li><br>
    <li><a href="http://www.opennms.org" target="_blank">OpenNMS</a> OpenNMS is the world's first enterprise grade network management platform developed under the open source model. It consists of a community supported open-source project as well as a commercial services, training, and support organization.</li><br>
    <li><a href="http://www.openqrm.org/" target="_blank">OpenQRM</a> is a collection of data center management tools that covers many facets of
    management. openQRM provides provisioning of the entire software stack on physical
    servers and virtual machines like VMware and Xen. openQRM also has a policy engine so
    that resources can be automatically provisioned based on external business needs as well as
    the requirements of internal organizations.</li><br>
    <li><a href="http://opensmart.sourceforge.net" target="_blank">OpenSmart</a> open (Source|System) Monitoring and Reporting Tool, open source alternative solutions to commercial software.</li><br>
    <li><a href="http://pandora.sourceforge.net" target="_blank">PandoraFMS</a> could detect a network interface down, a defacement in your website, a memory leak in one of your server app, or the movement of any value of the NASDAQ new technology market. If you want, Pandora FMS could send out SMS message when your systems fails. PandoraDMS is a viable Open Source Solution to commercial software.</li><br>

    <li><a href="http://www.zenoss.com/" target="_blank">Zenoss</a>  Core is an open source IT monitoring product that delivers the functionality to effectively manage the configuration, health, performance of networks, servers and applications through a single, integrated software package.</li><br>
    <li><a href="http://www.zabbix.com" target="_blank">Zabbix</a> is an enterprise-class open source distributed monitoring solution. ZABBIX is released under the GPL, thus it is free of charge for both commercial and non-commercial use.</li><br>
    <a href="#top">Top</a>
    </ul>
    </p>


    <h5 id="nim">Network Inventory Management</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solutions</b>
    <li><a href="http://www.ocsinventory-ng.org/" target="_blank">Open Computer and Software Inventory Next Generation</a> the open source automated inventry system. OCS support all versions of windows (windows 95 to Vista) and all major distributions of Linux, MacOS, Sun solaris, BSD and IBM AIXs. OCS is an application designed to help a network or system administrator keep track of the computers configuration and software that are installed on the network, gathers hardware, software, operating systems, security settings and  hardware items and also support software deployment. OCS is a client server model.</li><br>
    <li><a href="http://www.open-audit.org/" target="_blank">Open-Audit</a> is an application to tell  you exactly what is on your network, how it is configured and when it changes. Open-AudIT will run on Windows and Linux systems. Essentially, Open-AudIT is a database of information, that can be queried via a web interface. Data about the network is inserted via a Bash Script (Linux) or VBScript (Windows). The entire application is written in php, bash and vbscript. These are all 'scripting' languages - no compiling with viewable source. Making changes and customisations is both quick and easy.</li><br>
    <li><a href="http://www.ossim.net/home.php" target="_blank">OSSIM</a> stands for Open Source Security Information Management. Its goal is to provide a comprehensive compilation of tools which, when working together, grant a network/security administrator with detailed view over each and every aspect of his networks/hosts/physical access devices/server/etc... Besides gett

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
