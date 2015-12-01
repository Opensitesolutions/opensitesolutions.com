<?php
set_include_path ("/var/www/html/opensitesolutions.com/");
?>

<?php
    include 'services/includes/header_web.inc';
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
                                <h2 id="top">Web Development</h2>
				<?php
					include 'includes/adds/google_advertise.inc';
				?>

<br><br>
<h2>Categories</h2>
<ul>
<li><a href="#web">Open source web servers</a></li>
<li><a href="#prog">Open source web programming languages</a></li>
<li><a href="#editor">Open source web editors</a></li>
<li><a href="#reporting">Open source log analysis applications</a></li>
<li><a href="#cust">Open source Web Customer Support</a></li>
</ul>

<h5 id="web">Web Server</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solutions</b>
        <li><a href="http://www.apache.org/">Apache</a> the de-facto open source web server platform built by the Apache Software Foundation. Apache Foundation is
 a community of open-source software projects characterized by a collaborative, consensus based development process.</li><br>
	<li><a href="http://www.boa.org" target="_blank">Boa</a> is a single-tasking HTTP server. That means that unlike traditional web servers, it does not fork for each
 incoming connection, nor does it fork many copies of itself to handle multiple connections. It internally multiplexes all of the ongoing HTTP connections, and forks only
for CGI programs (which must be separate processes), automatic directory generation, and automatic file gunzipping. Preliminary tests show Boa is capable of handling sever
al thousand hits per second on a 300 MHz Pentium and dozens of hits per second on a lowly 20 MHz 386/SX.</li><br>
	<li><a href="http://www.cherokee-project.com/" target="_blank"> Cherokee</a> is a very fast, flexible and easy to configure Web Server. It supports the widespread technologies nowadays: FastCGI, SCGI, PHP, CGI, TLS and SSL encrypted connections, Virtual hosts, Authentication, on the fly encoding, Apache compatible log files, and much more.</li><br>
	<li><a href="http://www.cl-http.org:8001/cl-http/" target="_blank">CL-HTTP</a> is a full-featured server for the Internet Hypertext Transfer Protocol (HTTP 1.1, HTML 2.0, 3.2 & 4.0.1) that comes complete with source code. The server has been proven in major production systems, applied in a number of Artificial Intelligence systems, and used in top research laboratories around the world.</li><br>
        <li><a href="http://www.lighttpd.net/">Lighthttpd</a> an open source web server as it name implies a very fast light httpd server with most of the functional modules made famous by Apache. Known to run php and AJAX software much faster</a></li><br>
        <li><a href="http://www.roxen.com/products/cms/webserver/">Roxen</a> WebServer is a full-featured open source web server. It runs on a number of different operating systems including Windows, Linux, Solaris and Mac OS X.</li><br>
	<li><a href="http://www.jikos.cz/jikos/japach/" target="_blank">Japach</a> s simple webserver, providing simple support for CGI scripts, virtual hosts and static pages serving. Could be useful for sites for which apache is unnecessairly "big hammer", and is really easy to configure.</li><br>
        <li><a href="http://www.w3.org/Jigsaw/">JIGSAW</a> is W3C's leading-edge open source Web server platform, providing a sample HTTP 1.1 implementation and a
 variety of other features on top of an advanced architecture implemented in Java<li><br>
	<li><a href="http://www.mathopd.org/" target="_blank">Mathopd</a> is a very small, yet very fast HTTP server for UN*X systems. Mathopd supports useful features of HTTP/1.1, such as persistent connections, partial responses and pipelining. It does not support things like content negotation. The latest version of the software (1.5) also supports CGI/1.1.</li><br>
	<li><a href="http://www.acme.com/software/thttpd/" target="_blank"> Thttpd</a> is a simple, small, portable, fast, and secure HTTP server. It handles only the minimum necessary to implement HTTP/1.1. It also has a very small run-time size, since it does not fork and is very careful about memory allocation. Thttpd compiles cleanly on most Unix like OS, specifically including FreeBSD, SUNOS 4, Solaris 2, BSD/OS, linux, OSF</li><br>
<a href="#top">Top</a>
        </ul>
</p>

<h5 id="prog">Programming</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solutions</b>
        <li><a href="http://www.perl.org">Perl</a> is a stable, cross platform programming language. It is used for mission critical projects in the public and pr
ivate sectors and is widely used to program web applications of all needs.</li><br>
        <li><a href="http://www.php.net/">PHP</a> PHP  is a widely-used general-purpose scripting language that is especially suited for Web development and can b
e embedded into HTML.</li><br>
        <li><a href="http://www.ruby.org">Ruby</a> A dynamic, open source programming language with a focus on simplicity and productivity. It has an elegant synt
ax that is natural to read and easy to write.</li><br>
<a href="#top">Top</a>
        </ul>
</p>

<h5 id="editor">Web Editor</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solutions</b>
	<li><a href="http://www.w3.org/amaya/" target="_blank">Amaya</a> Amaya is a Web editor, i.e. a tool used to create and update documents directly on the Web. Browsi
ng features are seamlessly integrated with the editing and remote access features in a uniform environment. This follows the original vision of the Web as a space for coll
aboration and not just a one-way publishing medium. Amaya is an open source software project hosted by W3C, aAmaya software is written in C and is available for Windows, U
nix platforms and MacOS X.</li><br>
	<li><a href="http://kompozer.net/" target="_blank">KompoZer</a> Nvu's unofficial bug-fix release.  KompoZer is a complete web authoring system that combines web file management and easy-to-use WYSIWYG web page editing. KompoZer is designed to be extremely easy to use, making it ideal for non-technical computer users who want to create an attractive, professional-looking web site without needing to know HTML or web coding. </li><br>
        <li><a href="http://nvudev.com" target="_blank">NVU</a> A complete open source web authoring system for Linux desktop users as well as Microsoft Windows and Macintosh us ers to rival programs like FrontPage and Dreamweaver. Nvu (which stands for "new view") makes managing a web site a snap. Now anyone can create web pages and manage a website with no technical expertise or knowledge of HTML.</li><br>
	<li><a href="http://quanta.kdewebdev.org/" target="_blank">Quanta Plus</a> is a highly stable and feature rich web development environment.Quanta is based on KDE so this means it is network transparent from any dialog or project. It can use not only FTP but other KDE KIO slaves from file dialogs or in project settings. For instance if you want secure access try the fish KIO slave that uses SSH. Just enter fish://[user]@domain in any dialog or select fish in your project settings.</li><br>
<a href="#top">Top</a>
        </ul>
</p>

<h5 id="reporting">Reporting - Analytics</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solutions</b>
        <li><a href="http://awstats.sourceforge.net/">AWStats</a> open source powerful and featureful tool that generates advanced web, streaming, ftp or mail ser
ver statistics, graphically. This log analyzer works as a CGI or from command line and shows you all possible information your log contains, in few graphical web
pages.</li><br>
        <li><a href="http://www.analog.cx">Analog</a> is a open source reporting program to measure the usage on your web server. It tells you which pages are mos
t popular, which countries people are visiting from, which sites they tried to follow broken links from, and all sorts of other useful information.</li><br>
	<li><a href="http://www.phpopentracker.de" target="_blank">PhpOpenTracker</a> is a framework solution for the analysis of website traffic and visitor analysis.It features a logging engine that, either invoked as a web-bug by a HTML <img> tag or embedded with two lines of code into your PHP application, logs each request to a website into a database. One installation of phpOpenTracker can track an arbitrary number of web-sites.  Through the phpOpenTracker API module you can easily access the gathered data and perform complex operations on it, like for instance the analysis of your visitors' clickpaths.<br>

The analysis of clickpaths is essential when you want to measure the usability of your website. phpOpenTracker's API functions 'shortest_paths' and 'top_paths' help to answer questions like: Is the navigation intuitive enough? Do visitors find the shortest, most direct way from A to B? How are ads perceived? On what document do they leave the website -- and where to? The answers to these questions help you to improve the user experience and the way your website is percepted by your customers.</li><br> 
	<li><a href="http://piwik.org/" target=_blank">PIWIK</a> open source alternative to Google Analytics.</li><br>
	<li><a href="http://www.openwebanalytics.com/" target=_blank">Web Analytics. Open SourceK</a> open source alternative to Google Analytics. Can use to track and analyze how people use your website and applicatoins. </li><br>
	<li><a href="http://www.hping.org/visitors/" target="_blank">Visitors</a> is a very fast web log analyzer for Linux, Windows, and other Unix-like operating systems. It takes as input a web server log file, and outputs statistics in form of different reports. The design principles are very different compared to other software of the same type, no installation required, run from the commandline also generated web trails.</li><br>
        <li><a href="http://www.mrunix.net">Webalizer</a> is a fast, free web server log file analysis program. It produces highly detailed, easily configurable usage reports in HTML format, for viewing with a standard web browser </li><br>
	<li><a href="http://awsd.com/scripts/weblog/" target="_blank">Weblog</a> is a comprehensive access log analysis tool. It allows you to keep track of activity on your site by month, week, day and hour, to monitor total hits, bytes transferred and page views, and to keep track of your most popular pages. It can also print out secondary reports to track .user sessions,. showing the paths taken through your site by your visitors and giving you a rough idea of how long they spent looking at your pages, and to provide you with information on referring sites, the search engine keywords which brought your visitors and the agents and platforms they used while visiting. It can read NCSA common or combined log files, as well as Microsoft extended format log files.</li><br>
<a href="#top">Top</a>
        </ul>
</p>

<h5 id="cust">Live Web Site Customer Support</h5>
<p class="post align-right">
        <ul>
        <b>Open Source Solutions</b>
        <li><a href="http://www.craftysyntax.com/">CraftySyntax</a> Crafty Syntax Live Help (CSLH) is an open source live support solution that helps customer sup
port with live help functionality that can be proactively pushed to visitors to your site or requested by the consumer.</li><br>
	<li><a href="http://sourceforge.net/projects/shinelivehelp/">Shine Live Help</a> is a live support chat application for website sales and support. It works as a standalone chat and integrates with Sugar Open Source CRM. (fork of Craftysyntax)</li><br>
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
