<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>Open source software for privacy</title>
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

      <h1 id="top">Open source software for Privacy</h1>

      <br>
      <h2>Categories</h2>
      <ul>
      <li><a href="#pass">Open source Password Management</a></li>
      <li><a href="#encrypt">Open source encryption</a></li>
      <li><a href="#malware">Open source Anti-virus SpyWare Trojan protection</a></li>
      </ul>

      <h5 id="pass">Password Management</h5>
      <p class="post align-right">
      <ul>
      <b>Open Source Solution</b>
      <li><a href="http://keepass.info/">Keepass</a> is a free/open-source password manager or safe which helps you to manage your passwords in a secure way. Yo
      u can put all your passwords in one database, which is locked with one master key or a key-disk. So you only have to remember one single master password or insert
      the key-disk to unlock the whole database. The databases are encrypted using the best and most secure encryption algorithms currently known (AES and Twofish).</l
      i><br>
      <a href="#top">Top</a>
      </ul>
      </p>

      <h5 id="encrypt">Encryption</h5>
      <p class="post align-right">
      <ul>
      <b>Open Source Solution</b>
      <li><a href="http://ww.axantum.com/AXCRYPT/" target="_blank">Axcrypt</a> AxCrypt is used to share and work with stored documents, and e-mail attachments, in a secure man
      ner. If your documents reside on a document sharing service, intranet or file server AxCrypt is especially well suited and will usually seamlessly integrate, and
      make sharing and storing sensitive data as easy as not protecting it. </li><br>
      <li><a href="" target="_blank">ByCrypt</a> is a open source cross platform file encryption utility. Encrypted files are portable across all supported operating s
      ystems and processors. Passphrases must be between 8 and 56 characters and are hashed internally to a 448 bit key. However, all characters supplied are significant. The
      stronger your passphrase, the more secure your data. In addition to encrypting your data, bcrypt will by default overwrite the original input file with random garbage th
      ree times before deleting it in order to thwart data recovery attempts by persons who may gain access to your computer. If you're not quite ready for this level of paran
      oia yet, see the installation instructions below for how to disable this feature.</li><br>
      <li><a href="http://www.gpg4win.org/">Gpg4win</a> Gpg4win provides a nicely integrated windowss version fo GNUPG. GnuPG is the GNU project's complete and
      free implementation of the OpenPGP standard. GnuPG allows to encrypt and sign your data and communication, features a versatile key managment system as well as ac
      cess modules for all kind of public key directories.</li><br>

      <li><a href="http://www.truecrypt.org" target="_blank"> Truecrypt</a> open-source disk encryption software for Windows Vista/XP/2000 and Linux, Provides two levels of plausible deniability, in case an adversary forces you to reveal the password.</li><br>
      <a href="#top">Top</a>
      </ul>
      </p>

      <h5 id="malware">Personal Security - Malware - Trojan</h5>
      <p class="post align-right">
      <ul>
      <li><a href="http://www.clamwin.com">Clamwin</a> is an open source anti-virus program for Microsoft Windows 98/Me/2000/XP/2003 and Vista. ClamWin Free Ant
      ivirus comes with an easy installer and open source code. You may download and use it absolutely free of charge. It features:
      <ul>
      <li>High detection rates for viruses and spyware;
      <li> Scanning Scheduler;</li>
      <li> Automatic downloads of regularly updated Virus Database.</li>
      <li> Standalone virus scanner and right-click menu integration to Microsoft Windows Explorer;</li>
      <li> Add in to Microsoft Outlook to remove virus-infected attachments automatically.</li>
      </ul>
      </li><br>
      <li><a href="http://eraser.heidi.ie/">Eraser</a> is an advanced open source security tool (for Windows), which allows you to complete
      ly remove sensitive data from your hard drive by overwriting it several times with carefully selected patterns. Works with Windows  95, 98, ME, N
      T, 2000, XP, Windows 2003 Server and DOS.</li><br>
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
