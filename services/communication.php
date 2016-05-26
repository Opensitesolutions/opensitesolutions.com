<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>Communication</title>
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

    <h2 id="top">Internet Communication</h2>

    <br>
    <h2>Categories</h2>
    <ul>
    <li><a href="#im">Open source Instant Messenger</a></li>
    <li><a href="#media">Open source Media Players</a></li>
    <li><a href="#mgate">Open source Media Gateway</a></li>
    </ul>

    <h5 id="im">Instant Messaging</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://www.jabber.org/">Jabber</a> is an open, secure, ad-free instand messaging server alternative to consumer IM services like AIM, ICQ, MSN, and Yahoo (see the IM quickstart). Under the hood, Jabber is a set of streaming XML protocols and technologies that enable any two entities on the Internet to exchange messages, presence, and other structured information in close to real time. Jabber technologies offer several key advantages, Open -- the Jabber protocols are free, open, public, and easily understandable; in addition, multiple implementations exist for clients and servers</li><br>
    <li><a href="http://www.pidgin.im/">Pidgin</a> formerly GAIM is an open source instant messaging program for Windows, Linux, BSD, and other Unixes. You can talk to your friends using AIM, ICQ, Jabber/XMPP, MSN Messenger, Yahoo!, Bonjour, Gadu-Gadu, IRC, Novell GroupWise Messenger, QQ, Lotus Sametime, SILC, SIMPLE, and Zephyr.</li><br>

    Pidgin can log in to multiple accounts on multiple IM networks simultaneously. This means that you can be chatting with friends on AIM, talking to a friend on Yah
    oo Messenger, and sitting in an IRC channel all at the same time.<br><br>
    Pidgin supports many features of the various networks, such as file transfer, away messages, and typing notification. It also goes beyond that and provides many u
    nique features. A few popular features are Buddy Pounces, which give the ability to notify you, send a message, play a sound, or run a program when a specific bud
    dy goes away, signs online, or returns from idle; and plugins, consisting of text replacement, a buddy ticker, extended message notification, iconify on away, spe
    ll checking, tabbed conversations, and more.</li><br>
    <a href="#top">Top</a>
    </ul>
    </p>

    <h5 id="media">Media Players</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://www.getmiro.com/">MIro</a> open-source media streaming software, turn your computer into an internet TV</li><br>
    <a href="#top">Top</a>
    </ul>
    </p>


    <h5 id="mgate">Media Gateway</h5>
    <p class="post align-right">
    <ul>
    <b>Open Source Solution</b>
    <li><a href="http://www.asterisk.org/">Asterisk</a> is the world.s leading open source telephony engine and tool kit. Asterisk can be configured as the co
    re of an IP or hybrid PBX, switching calls, managing routes, enabling features, and connecting callers with the outside world over IP, analog (POTS), and digital
    (T1/E1) connections. Asterisk runs on a wide variety of operating systems including Linux, Mac OS X, OpenBSD, FreeBSD and Sun Solaris and provides all of the feat
    ures you would expect from a PBX including many advanced features that are often associated with high end (and high cost) proprietary PBXs. Asterisk's architectur
    e is designed for maximum flexibility and supports Voice over IP in many protocols, and can interoperate with almost all standards-based telephony equipment using
    relatively inexpensive hardware.</li><br>
    <li><a href="http://www.freeswitch.org/" target="_blank">FreeSwitch</a> FreeSWITCH is an open source telephony platform designed to facilitate the creation of voice and chat driven products scaling from a soft-phone up to a soft-switch.  It can be used as a simple switching engine, a media gateway or a media server to host IVR applications using simple scripts or XML to control the callflow.</p>
    <p>We support various communication technologies such as SIP, H.323, IAX2 and GoogleTalk making it easy to interface with other open source PBX systems such as sipX, OpenPBX, Bayonne, YATE or Asterisk.</p>
    <p>We also support both wide and narrow band codecs making it an ideal solution to bridge legacy devices to the future. The voice channels and the conference bridge module all can operate at 8, 16 or 32 kilohertz and can bridge channels of different rates.</p>
    <p>	FreeSWITCH runs on several operating systems including Windows, Max OS X, Linux, BSD and Solaris on both 32 and 64 bit platforms.</p>
    <br>
    <li><a href="http://yate.null.ro" target="_blank">Yate</a> Yet another Telephony Engine. Yate s a next-generation telephony engine; while currently focused on Voice over Internet Protocol (VoIP) and PSTN, its power lies in its ability to be easily extended. Voice, video, data and instant messaging can all be unified under Yate's flexible routing engine, maximizing communications efficiency and minimizing infrastructure costs for businesses. The software is written in C++ and it supports scripting in various programming languages (such as those supported by the currently implemented embedded PHP, Python and Perl interpreters) and even any Unix shell. The PHP, Python and Perl libraries have been developed and made available in order to ease development of external functionalities for Yate.</li><br>
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
