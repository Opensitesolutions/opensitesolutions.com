<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content='Create open source directory that can be used for authenticating users'>
    <meta name="keywords" content="identity management, open source identity management, ldap, ldap configuration.">
    <title>Identitiy Management</title>
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

    <h2 id="top">Identity Management</h2>
    <br>
    <h2>Categories</h2>
    <ul>
    <li><a href="#mail">Open Source Mail - Groupware applications</a></li>
    <li><a href="#security">Open Source Network Perimeter Security</a></li>
    <li><a href="#nac">Oepn source Network Access Control</a></li>
    <li><a href="#backp">Open Source Backup Software</a></li>
    <li><a href="#imaging">Open source Cloning (Imaging) Solutions</a></li>
    <li><a href="#st">Open Source Software Testing</a></li>
    </ul>

    <h2>Open Source Alternative Solutions</h2>

    <br>
    <h3 id="mail">Mail - GroupWare</h3>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://www.simple-groupware.de/cms/" target="_blank" name="net1">Simple Groupware</a> is an open source enterprise application offering email, calendaring, contacts, tasks, document management, synchronization with Outlook and cell phones, full-text search and many more.  Simple Groupware combines standards like RSS, iCalendar, vCard, IMAP, POP3, SMTP, CIFS, CSV, WebDAV, LDAP and SyncML under one platformm making this application a very strong contender to replace windows exchange server.<a href="http://www.simple-groupware.de/cms/Main/Features">features</a>. Simple Groupware can be installed on Windows, MACOS and Linux operating systems.</li><br>
    <li><a href="http://www.conflux.ee/?id=11" target="_blank" name="net4">Conflux Lite</a> is an open-source groupware package distributed under the GNU GPL licence. Although the Lite version offers less functionality then Professional, it still includes all the core functionality, which should meet the needs of small companies.  In case the client's needs increase and exceed those offered by Lite, the Conflux Lite server can easily and quickly be reconfigured into the Professional version, which offers extended functionality. The data already entered in the system will be all transferred to the new version.</li><br>
    <li><a href="http://www.egroupware.org" target="_blank" name="net5">E-groupware</a> is an open source enterprise ready groupware application. It enables you to manage contacts, appointments, notes, todos and so on. E-groupware comes with a native web-interface which allow to access your data from any platform from any location</li><br>
    <li><a href="http://www.group-office.com" target="_blank" name="net6">Group-office</a> is an open-source groupware application that includes email, calendar, task, notes </li><br>
    <li><a href="http://www.hipergate.org" target="_blank" name="net7">Hipergate</a> is an open source web based application suite. Hipergate is a web based applications suite consisting of intranet groupware, sales force automation, project management, content management, corporate library, ebusiness shopping cart</li><br>
    <li><a href="http://www.opengroupware.org" target="_blank" name="net8">Opengroupware</a> the leading open source groupware server to integrate with the leading open source office suite products and all the leading groupware clients running across all major platforms, and to provide access to all functionality and data through open XML-based interfaces and APIs. Application that are built in contact management, group calendar, resources planner, task management, e-mail client, projects and documents, news, preferences, usermanager and palm sync.</li><br>
    <a href="#top">Back to the top</a>
    </ul>
    </p>

    <h5 id="security">Network Perimeter Security</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://ipcop.org/" target="_blank" name="net6">IPCop</a> The bad packets stop here, a linux based (Open Source) firewall with a lots of addons that make this firewall a very robust Internet Secrity Gateway.</li><br>
    <li><a href="http://m0n0.ch/wall/" target="_blank" name="net7"> Monowall</a> is an open source project aimed at creating a complete, embedded firewall software package that, when used together with an embedded PC, provides all the important features of commercial firewall boxes (including ease of use) at a fraction of the price (free software). M0n0wall is based on a bare-bones version of FreeBSD, along with a web server, PHP and a few other utilities. The entire system configuration is stored in one single XML text file to keep things transparent. M0n0wall is probably the first UNIX system that has its boot-time configuration done with PHP, rather than the usual shell scripts, and that has the entire system configuration stored in XML format.</li><br>
    <li><a href="http://www.openswan.com/" target="_blank">Openswan</a> is an implementation of IPsec for Linux. It supports kernels 2.0, 2.2, 2.4 and 2.6, and runs on many different platforms, including x86, x86_64, ia64, MIPS and ARM. Openswan is a code fork of the FreeSWAAN project started by a few developers.</li><br>
    <li><a href="/services/docs/firewall.php" target="_blank" name="net4">PFSENSE</a> Open Source network firewall based on PF and freebsd with integrated applications.</li><br>
    <li><a href="http://www.untangle.com" class="readmore" target="_blank" name="net6">Untangle</a> The best open source projects, integrated and made easier for spam blocking, web filtering, remote access and more. Commercial Grade open source alternative to SonicWall and Watchguard.</li><br>
    </ul>
    </p>

    <p class="post align=right">
    <b> Commercial Alternatives</b><br>
    <ul>
    <li>Cisco PIX</li>
    <li>SonicWall</li>
    <li>Checkpoint</li>
    <li>Barracuda</li><br><br>
    <a href="#top">Back to the top</a>
    </ul>
    </p>

    <h5 id="nac">Network Access Control</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://www.packetfence.org/" name="net7" target="_blank">Packetfence</a> is an open-source network access control (NAC) system. Deployed in academic networks around the
    world, PacketFence is reliable, extremely configurable, and built upon unmodified open-source code (Fedora, LAMP, Perl, and Snort). </li><br>
    <li><a href="http://freenac.net/" name="net8" target="_blank">Freenac</a> is an OpenSource solution for LAN access control and dynamic Vlan management </li><br>
    <a href="#top">Back to the top</a>
    </ul>
    </p>

    <h5>File Management</h5>
    Implementing a repository where users can store and share files and applications can be done using samba software. Integrating Samba with OpenLDAP will create an
    identity management system  which samba can use to authenticate each user before providing access.

    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://www.samba.org" class="readmore" name="net9" target="_blank">SAMBA</a> Open Source application that micmics windows based file system can co-exist with existing wi
    ndows platform therefore reducing your license count or can be used on it's own.</li>
    </ul>
    </p>


    <!-- Begin: AdBrite -->
    <script type="text/javascript">
    var AdBrite_Title_Color = '0000FF';
    var AdBrite_Text_Color = '000000';
    var AdBrite_Background_Color = 'FFFFFF';
    var AdBrite_Border_Color = 'FFFFFF';
    </script>
    <script src="http://ads.adbrite.com/mb/text_group.php?sid=551054&zs=3330305f323530" type="text/javascript"></script>
    <div><a target="_top" href="http://www.adbrite.com/mb/commerce/purchase_form.php?opid=551054&afsid=1" style="font-weight:bold;font-family:Arial;font-size:13p
    x;">Your Ad Here</a></div>
    <!-- End: AdBrite -->

    <h5 id="backp">Backup</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://amanda.zmanda.com/" name="net11" target="_blank">Amanda</a> Amanda is the most popular open source alternative backup and recovery software in the world. A manda protects more than half a million of servers and desktops running various versions of Linux, UNIX, BSD, Mac OS-X and Microsoft Windows operating systems worldwide
    <ul>
    <li><a href="http://www.tivano.com/software/amanda/index.shtml" target="_blank">Amanada CDRW-Taper</a> is a drop-in replacement for the taper component of the Amanda backup system. CDRW-Taper makes it possible to dump backups to CD-RW, DVD+RW or DVD-RW instead of tape.</li>
    </ul>
    .</li>

    <br>

    <li><a href="http://backuppc.sourceforge.net/index.html" target="_blank">BackupPC</a>  is a high-performance, enterprise-grade system for backing up Linux and WinXX PCs and laptops to a server's disk. BackupPC is highly configurable and easy to install and maintain. Given the ever decreasing cost of disks and raid systems, it is now practical and cost effective to backup a large number of machines onto a server's local disk or network storage. This is what BackupPC does. For some sites, this might be the complete backup solution. For other sites, additional permanent archives could be created by periodically backing up the server to tape. A variety of Open Source systems are available for doing backup to tape.<br> BackupPC is written in Perl and extracts backup data via SMB using Samba, tar over ssh/rsh/nfs, or rsync</li><br><br>

    <li><a href="http://cdbkup.sourceforge.net/" target="_blank">CDBKUP</a> is a professional grade open source software for backing up filesystems onto CD-Rs or CD-RWs located within a tarballs on ISO 9660 file systems.</li><br>

    <li><a href="http://cedar-backup.sourceforge.net/" target="_blank">Cedar Backup</a> is a software package designed to manage system backups for a pool of local and remote machines. Cedar Backup understands how to back up filesystem data as well as MySQL and PostgreSQL databases and Subversion repositories. It can also be easily extended to support other kinds of data sources.</li><br>

    <li><a href="http://snapbackup.com/" target="_blank">Snap Backup</a> is The One-Click open source Backup Utility that makes it simple to protect your important work. Snap Backup is for individual computer users who need a simple and convenient way to backup their valuable files.</li><br>

    <li><a href="http://www.initzero.it/products/opensource/synbak/" target="_blank">Synbak</a> is an application designed to unify several backup methods. Synbak provides a powerful reporting system and a very simple interface for configuration files.<br>
    Synbak is a wrapper for several existing backup programs suppling the end user with common method for configuration that will manage the execution logic for every single backup and will give detailed reports of backups result.<br>
    <ul>
    <li>RSync over ssh, rsync daemon, smb and cifs protocols (using internal automount functions)</li>
    <li> Tar archives (tar, tar.gz and tar.bz2)</li>
    <li> Tape devices (using multi loader changer tapes too)</li>
    <li> LDAP databases</li>
    <li> MySQL databases</li>
    <li> Oracle databases</li>
    <li> CD-RW/DVD-RW</li>
    <li> Wget to mirror HTTP/FTP servers</li>
    </ul>

    Synbak can make reports using: email, html pages RSS feeds</li><br>
    <a href="#top">Back to the top</a>
    </ul>
    </p>


    <h5 id="imaging">Imaging - Cloning</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://clonezilla.sourceforge.net" target="_blank">Clonezilla</a> is an OpenSource clone system (OCS) solution based on DRBL, Partition Image, ntfsclone, and
    udpcast, allows you can massively clone many (40 plus!) computers simultaneously. Clonezilla saves and restores only used blocks in the harddisk. This increases
    the clone effiency tools that work together <a href="http://drbl-winroll.sourceforge.net/">DRBL</a></li><br>

    <li><a href="http://www.partimage.org/Main_Page" target="_blank">PartImage</a> is an open source cloning solutions based on linux, images can be compressed with gzip / bzip2 programs to save disk space and can be split into multiple files to be copied on CDs and DVDs. </li><br>

    <li><a href="http://www.sysresccd.org/Main_Page" target="_blank">SysRescueCD</a> is a Linux system on a bootable CD-ROM for repairing your system and recovering your data after a crash. It aims to provide an easy way to carry out admin tasks on your computer, such as creating and editing the partitions of the hard disk. It contains a lot of system utilities (parted, partimage, fstools, ...) and basic tools (editors, midnight commander, network tools). It is very easy to use: just boot the CDROM. The kernel supports most of the important file systems (ext2/ext3, reiserfs, reiser4, xfs, jfs, vfat, ntfs, iso9660), as well as network filesystems (samba and nfs).</li><br>
    <a href="#top">Back to the top</a>
    </ul>
    </p>

    <h5 id="st">Software Testing</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://staf.sourceforge.net/index.php" target="_blank">STAF</a> The Software Testing Automation Framework (STAF) is an open source, multi-platform, m
    ulti-language framework designed around the idea of reusable components, called services (such as process invocation, resource management, logging, and monitoring
    ). STAF removes the tedium of building an automation infrastructure, thus enabling you to focus on building your automation solution. The STAF framework provides
    the foundation upon which to build higher level solutions, and provides a pluggable approach supported across a large variety of platforms and languages.</li><br>
    <a href="#top">Back to the top</a>
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
