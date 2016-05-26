<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>Open source disk cloning</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet">
    <link href="/styles.css" rel="stylesheet">
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

    <h1 id="top">Open source Disk Cloning</h1>
    <br><br>
    <h5 id="prog">Symantec Norton Ghost</h5>
    <p class="post align-right">
    <ul>
    <li>Norton Ghost is the industry's most widely-used corporate imaging, deployment software known across the world. The term Ghost stands for "General Hardware-Oriented System Transfer" has been around since 1995. The technologies that this software supports is full system and file backups, restores from system failures and saves recovery points to offsite locations. Norton ghost can only be used for windows based systems this cannot backup linux based systems..<br><br>
    <b>Open Source Alternative to Symantec Norton Ghost</b>
    <li><a href="http://clonezilla.sourceforge.net/" target="_blank"> Clonezilla</a> is the open source alternative to Symantec Norton Ghost. Clonezilla, based on DRBL, Partition Image, ntfsclone, and udpcast, allows you to do bare metal backup and recovery. Two types of Clonezilla are available, Clonezilla live and Clonezilla server edition. Clonezilla live is suitable for single machine backup and restore. While Clonezilla server edition is for massive deployment, it can clone many (40 plus!) computers simultaneously. Clonezilla saves and restores only used blocks in the harddisk. This increases the clone efficiency. Filesystem supported are ext2, ext3, reiserfs, xfs, jfs of GNU/Linux, and FAT, NTFS of MS Windows. Therefore you can clone  backup GNU/Linux or MS windows. For these file systems, only used blocks in partition are saved and restored. For unsupported file system, sector-to-sector copy is done by dd in Clonezilla. </li><br>

    <li><a href="http://www.partimage.org/Main_Page" target="_blank">PartImage</a> is an open source cloning solutions based on linux, images can be compressed with gzip / bzip2 programs to save disk space and can be split into multiple files to be copied on CDs and DVDs. </li><br>

    <li><a href="http://www.fogproject.org/" target="_blank">FOG</a> is a open-source ghost-like imaging solution/rescue suite. A open source alternative to Ghost, used to image Windows XP, Vista PCs using PXE, PartImage, and a Web Gui to tie it together. Includes Featues like memory and disk test, disk wipe and (soon) av scan</li><br>

    <li><a href="http://www.sysresccd.org/Main_Page" target="_blank">SysRescueCD</a> is a Linux system on a bootable CD-ROM for repairing your system and recovering your data after a crash. It aims to provide an easy way to carry out admin tasks on your computer, such as creating and editing the partitions of the hard disk. It contains a lot of system utilities (parted, partimage, fstools, ...) and basic tools (editors, midnight commander, network tools). It is very easy to use: just boot the CDROM. The kernel supports most of the important file systems (ext2/ext3, reiserfs, reiser4, xfs, jfs, vfat, ntfs, iso9660), as well as network filesystems (samba and nfs).</li>
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
