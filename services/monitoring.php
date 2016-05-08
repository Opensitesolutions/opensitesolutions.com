<?php
  set_include_path('includes:../../includes:../includes');
?>

<?php
    include 'header_sys.inc';
?>
<?php
    include 'topmenu.inc';
?>

<?php
    include 'right.inc';
?>

<!-- Center Column -->
                <div id="primaryContentContainer">
                        <div id="primaryContent">
                                <h2 id="top">Network Management</h2>
<br>
<h2>Categories</h2>
<ul>
<li><a href="#monitoring">Open source Network Monitoring</a></li>
<li><a href="#nim">Open source Network Inventory Management</a></li>
</ul>


<h5 id="monitoring">Network Monitoring</h5>
<p class="post align-right">
                <ul>
                <b>Open Source Solutions</b>
				<li><a href="http://www.hyperic.com" target="_blank">Hyperic</a> is an open source monioring system that can manage open source, commercial or a hybrid systems. Features are auto-discovery of assets, montors metris of 65+ technologies across 8 Oses, tracks performance, alerting and corrective control.
				</li><br>
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
		<li><a href="http://www.h-inventory.com/" target="_blank">H-Inventory</a> open source hardware management tools used for inventory management and software deplyment compatible with windows, freebsd, linux and sun solaris.</li><br>
		<li><a href="http://www.ocsinventory-ng.org/" target="_blank">Open Computer and Software Inventory Next Generation</a> the open source automated inventry system. OCS support all versions of windows (windows 95 to Vista) and all major distributions of Linux, MacOS, Sun solaris, BSD and IBM AIXs. OCS is an application designed to help a network or system administrator keep track of the computers configuration and software that are installed on the network, gathers hardware, software, operating systems, security settings and  hardware items and also support software deployment. OCS is a client server model.</li><br>
		<li><a href="http://www.open-audit.org/" target="_blank">Open-Audit</a> is an application to tell  you exactly what is on your network, how it is configured and when it changes. Open-AudIT will run on Windows and Linux systems. Essentially, Open-AudIT is a database of information, that can be queried via a web interface. Data about the network is inserted via a Bash Script (Linux) or VBScript (Windows). The entire application is written in php, bash and vbscript. These are all 'scripting' languages - no compiling with viewable source. Making changes and customisations is both quick and easy.</li><br>
		<li><a href="http://www.ossim.net/home.php" target="_blank">OSSIM</a> stands for Open Source Security Information Management. Its goal is to provide a comprehensive compilation of tools which, when working together, grant a network/security administrator with detailed view over each and every aspect of his networks/hosts/physical access devices/server/etc... Besides getting the best out of well known open source tools, some of which are quickly described below these lines, ossim provides a strong correlation engine, detailed low, mid and high level visualization interfaces as well as reporting and incident managing tools, working on a set of defined assets such as hosts, networks, groups and services.<br><br>

All this information can be limited by network or sensor in order to provide just the needed information to specific users allowing for a fine grained multi-user security environment. Also, the ability to act as an IPS (Intrusion Prevention System) based on correlated information from virtually any source result in a useful addition to any security professional
	<ul>
   	<li>Arpwatch, used for mac anomaly detection.</li>
    	<li> P0f, used for passive OS detection and os change analisys.</li>
    	<li> Pads, used for service anomaly detection.</li>
    	<li> Nessus, used for vulnerability assessment and for cross correlation (IDS vs Security Scanner).</li>
    	<li> Snort, the IDS, also used for cross correlation with nessus.</li>
    	<li> Spade, the statistical packet anomaly detection engine. Used to gain knowledge about attacks without signature.</li>
    	<li> Tcptrack, used for session data information which can grant useful information for attack correlation.</li>
    	<li> Ntop, which builds an impressive network information database from which we can get aberrant behaviour anomaly detection.</li>
    	<li> Nagios. Being fed from the host asset database it monitors host and service availability information.</li>
    	<li> Osiris, a great HIDS.</li>
    	<li> OCS-NG, Cross-Platform inventory solution.</li>
    	<li> OSSEC, integrity, rootkit, registry detection and more.</li>
	</ul>
</li>
		<li><a href="http://www.ziptie.org/" target="_blank">Ziptie</a> is a community driven open source framework for network inventory and configuration management. Ziptie supports auto discovery and backup of netwrk device configuration</li><br>

<a href="#top">Top</a>
</ul>
</p>

                        </div>
                </div>
        <!-- End center Column -->


<?php
    include 'left.inc';
?>


<?php
    include 'footer.inc';
?>
