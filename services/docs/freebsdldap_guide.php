<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>FreeBSD LDAP Guide</title>
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

    <h1>FreeBSD LDAP Guide</h1>

    <p>This document describes the process one will need to take when setting up <span class="caps">LDAP</span> as a means for authenticating users on a FreeBSD 5.1+ system.</p>


    <p>This book is outlined very much like a tutorial aimed at the most novice of users (you will only require basic knowledge of the FreeBSD ports system, and an editor of your choice, the rest of the process is described by me).</p>


    <p>This is a work in progress, and as I learn new things, I will add to this book.</p>


    <h2>In The Beginning&#8230;</h2>


    <h3>Introduction</h3>


    <p>First off, you may be asking yourself, &#8220;Why would I need to do this?&#8221; Well I have two answers to that question, first, if you didn&#8217;t need it, why would you be here in the first place? But incase you are truly unknowing, it is a very handy thing to have a set of user accounts maintained in one central location to share among several machines. Traditionally this has been done with <span class="caps">NIS</span>/YP, but when using <span class="caps">LDAP</span> you can share this information amongst many different operating systems, not just those like the Unix operating systems which support <span class="caps">NIS</span>/YP, but Windows as well (for example).</p>


    <p>Also please note that at this time, this guide simply lays out the procedure to set up and configure an <span class="caps">LDAP</span> server (OpenLDAP) for one machine. It does not deal with setting up a server, and then a client (though it can easily be abstracted) but rather, assumes they will be on the same system (not optimal). It also does not deal with replication, this is a topic that will be covered in future versions. If you wish to contribute any of the above (or possibly other sections you feel are relevant), please <a href="mailto:jtregunna@blurgle.ca">send them to me</a>.</p>


    <p>Now since that&#8217;s out of the way, let&#8217;s continue.</p>


    <h3>Requirements</h3>


    <p>You will need a few tools before you can continue, I will assume you know how to update your FreeBSD ports tree. (If you do not, please read the <a href="http://www.freebsd.org/handbook/">FreeBSD handbook</a>.)</p>


    <p>You will need:</p>


    <ul>
    <li>OpenLDAP 2.2
    <ul>
    <li>Client; and</li>
    <li>Server</li>
    </ul>
    </li>
    <li>nss_ldap</li>
    <li>pam_ldap</li>
    <li>FreeBSD 5.1 or higher.</li>
    <li>Patience; and of course</li>
    <li>Free time.</li>
    </ul>


    <p>FreeBSD 5.1 or higher is required due to the <span class="caps">NSS</span> module being imported at that time. It is not available prior to FreeBSD 5.1, and while it is possible to perform <span class="caps">LDAP</span> authentication on FreeBSD 4.x, the procedure is entirely different and, I will not cover that here.</p>


    <h2>Getting everything ready</h2>


    <h3>Installing ports</h3>


    <p>First off, we&#8217;ll need to perform installation of some ports that we will be using on this system.</p>


    <p>Incase you don&#8217;t know, the <b>#</b> symbol represents a root prompt. You can become root by using <b>su</b> or gain super-user privileges by using <b>sudo</b>. Whichever way you want to do this, is up to you.</p>


    <p>To start off, install the OpenLDAP package. Become root, and do the following:</p>


    <pre>
    # cd /usr/ports/net/openldap22-server
    # make install
    </pre>

    <p>This will cause the ports system to fetch and install all ports that depend on openldap22-server (openldap22-client being one) and install them, before building and installing openldap22-server.</p>


    <p>Next, we need to install the nss_ldap port, to do so, execute the following two commands:</p>


    <pre>
    # cd /usr/ports/net/nss_ldap
    # make install
    </pre>

    <p>Be sure to read any messages that are printed while registering the port. These messages are not there just for the maintainers amusement, they contain important information about installing software.</p>


    <p>Next, let&#8217;s install the pam_ldap port. Again we need to execute a couple of commands:</p>


    <pre>
    # cd /usr/ports/security/pam_ldap
    # make install
    </pre>

    <p>Now then, since that is all over and done with, let&#8217;s focus our attention on configuring openldap.</p>


    <h2>Configuration</h2>


    <h3>Read this first.</h3>


    <p>This section will guide you through the steps you will need to take to set up various configuration files, data files for <span class="caps">LDAP</span> and setting up permissions.</p>


    <p><b>Please note:</b> <i>If you do not want to set up OpenLDAP with <span class="caps">SSL</span> support (I recommend you do) please skip all the parts about <span class="caps">SSL</span>.</i></p>


    <h3>Generating <span class="caps">SSL</span> keys</h3>


    <p>This page will be brief. It will outline the simple procedure of creating a self-signed certificate for use with your shiny new <span class="caps">LDAP</span> server; so pay attention, this won&#8217;t take but a minute.</p>


    <p>We need to start off by of course, becoming root.</p>


    <pre>
    $ sudo -s
    </pre>

    <p>Yes I expect you should have sudo installed. If you do not, use su instead to get a root shell.</p>


    <p>Now then, let&#8217;s get to business.</p>


    <p>You&#8217;ll need to create a directory in <b>/usr/local/etc/openldap</b> called &#8216;<b>ssl</b>&#8217; (for the sake of simplicity).</p>


    <pre>
    # mkdir ssl
    </pre>

    <p>Now let&#8217;s go into that directory, and generate our keys using openssl.</p>


    <pre>
    # openssl req -new &gt; ldap.csr
    </pre>

    <p>From this point on, it (OpenSSL) is going to ask you a few questions, like a pass phrase, country, etc. Fill them out to the best of your abilities. Please note: The &#8220;Common Name&#8221; in your certificate should be the fully qualified domain name of your ldap server (that is, the output of &#8220;hostname&#8221;. Check it if you are not sure what your server&#8217;s <span class="caps">FQDN</span> is).</p>


    <p>Now, we need to remove the passphrase from the key we just generated, to do this, we issue this command:</p>


    <pre>
    # openssl rsa -in privkey.pem -out ldap.key
    </pre>

    <p>It is going to ask you to enter your pass phrase, do this now.</p>


    <p>Next we want to turn this into a self-signed certificate, so let&#8217;s do the following:</p>


    <pre>
    # openssl x509 -in ldap.csr -out ldap.cert -req -signkey ldap.key -days 365
    </pre>

    <p>1 year should be good, adjust to your will however.</p>


    <p>Now you can continue on to configuring slapd.conf.</p>


    <h3>slapd.conf</h3>


    <p>You will need to create a /usr/local/etc/openldap/slapd.conf file something to the effect of this (customize this file all you like based on documentation from the openldap project).</p>


    <pre>
    include         /usr/local/etc/openldap/schema/core.schema
    include         /usr/local/etc/openldap/schema/cosine.schema
    include         /usr/local/etc/openldap/schema/nis.schema
    include         /usr/local/etc/openldap/schema/misc.schema
    include         /usr/local/etc/openldap/schema/inetorgperson.schema
    pidfile         /var/run/openldap/slapd.pid
    argsfile        /var/run/openldap/slapd.args

    access to dn.base=""
    by * read

    # Members of admin group can write to everything
    # USE THIS WITH CAUTION
    access to *
    by group.base="cn=admin,ou=Groups,dc=yourdomain,dc=dom" write
    by * break

    # Allow only user to change its password
    access to attr=userPassword
    by self write
    by anonymous auth
    by * none

    # Addressbook per user (create).
    access to dn.regex="^ou=addressbook,uid([^,]+),ou=People,dc=yourdomain,dc=dom$" attrs=entry
    by dn.exact,expand="uid=$1,ou=People,dc=yourdomain,dc=dom" read
    by anonymous auth
    by * none

    # Addressbook per user (add entries)
    access to dn.regex="ou=addressbook,uid=([^,]+),ou=People,dc=yourdomain,dc=dom$" attrs=children
    by dn.regex="uid=$1,ou=People,dc=yourdomain,dc=dom" write
    by anonymous auth
    by * none

    # Addressbook per user (add entries)
    access to dn.regex="ou=addressbook,uid=([^,]+),ou=People,dc=yourdomain,dc=dom$" attrs=entry
    by dn.regex="uid=$1,ou=People,dc=yourdomain,dc=dom" write
    by anonymous auth
    by * none

    # Owner can write, authenticated can read
    access to *
    by self write
    by users read
    by anonymous auth

    ## This is optional, only if you wanted SSL.
    TLSCipherSuite HIGH:MEDIUM:+SSLv2
    TLSCertificateFile /usr/local/etc/openldap/ssl/ldap.cert
    TLSCertificateKeyFile /usr/local/etc/openldap/ssl/ldap.key

    database        ldbm
    suffix          "dc=yourdomain,dc=dom"
    rootdn          "cn=Manager,dc=yourdomain,dc=dom"
    rootpw          Encrypted_Password
    password-hash   {SMD5}
    directory       /var/db/openldap-data
    index           objectClass     eq
    index           uid,uidNumber,gidNumber,memberUid       pres,eq
    </pre>

    <p>Take special note of the &#8220;rootpw&#8221; line. It needs an encrypted password that we are now going to generate. To do this, we use the slappasswd program like this:</p>


    <pre>
    # slappasswd -s MySecretPassword
    </pre>

    <p>This will return a string like:</p>


    <pre>
    {SSHA}613vutG4Gbt6LNUZtvymWOOmP9Nrt4QQ
    </pre>

    <p>You need to take that string, and put it in your slapd.conf file above, replacing the text &#8220;Encrypted_Password&#8221; for that encrypted password we just generated. Once this process is done, you can now safely save, and exit that file. Just as a bit of extra security, we are going to change permissions on this file since the openldap server by default, changes its effective user and group its run as. To accomplish this, we remember back to Unix basics 101, and execute:</p>


    <pre>
    # chown ldap:ldap /usr/local/etc/openldap/slapd.conf
    # chmod 0440 /usr/local/etc/openldap/slapd.conf
    </pre>

    <p>The second line tells the system to only allow read permission for the user and group who own the file (in this case, the user &#8216;ldap&#8217; and the group &#8216;ldap&#8217;).</p>


    <h3>ldap.conf</h3>


    <p>Next we will need to set up an /usr/local/etc/ldap.conf file. Add the following text to a new file /usr/local/etc/ldap.conf:</p>


    <pre>
    uri ldaps://127.0.0.1/
    base "dc=yourdomain,dc=dom"
    port 389
    binddn cn=pamclient,ou=SystemAccounts,dc=yourdomain,dc=dom
    bindpw SuperSecretPassword
    scope sub
    pam_password exop
    ## The immediately following command is optional. Only if you want SSL.
    ssl on
    nss_base_passwd ou=People,dc=yourdomain,dc=dom?one
    nss_base_group ou=Groups,dc=yourdomain,dc=dom?one
    </pre>

    <p>Here we set our binddn and bindpw to values of an object whos sole purpose will be to be used for fetching information, it is not a real user (we will add this account later in the book). One thing you should take note of, is our bindpw here is unencrypted. Please make sure to remember that when we add this object to our database, we will need to feed it the password you specify here in an encrypted form. For nss_ldap, we must symlink this (or copy whichever you prefer) file to /usr/local/etc/nss_ldap.conf otherwise we won&#8217;t be able to do much of anything.</p>


    <h3>Interlude&#8230;</h3>


    <p>Before we populate our database, we need to make sure that the database directories have appropriate permissions, we can do this by just running one command:</p>


    <pre>
    # chown -R ldap:ldap /var/db/openldap-*
    </pre>

    <p>Now, we&#8217;re halfway there. Stop, take a break, think about how easy this has been so far&#8230; It only gets worse. :)</p>


    <h3>Creating our <span class="caps">LDIF</span> file&#8230;</h3>


    <p>From this point on, we can create our ldif file which we will use to feed our information into the ldap server. As usual, I will provide an example:</p>


    <pre>
    dn: dc=yourdomain,dc=dom
    dc: yourdomain
    objectClass: top
    objectClass: domain
    objectClass: domainRelatedObject
    associatedDomain: yourdomain.dom
    objectClass: domain

    dn: ou=SystemAccounts,dc=blurgle,dc=ca
    ou: SystemAccounts
    objectClass: top
    objectClass: organizationalUnit

    dn: cn=pamclient,ou=SystemAccounts,dc=blurgle,dc=ca
    sn: pamclient
    cn: pamclient
    objectClass: top
    objectClass: person
    userPassword: {SSHA}ZHZ2AHjwr4MyX5zKmw1/IgRNnEjIzSwf

    dn: ou=People,dc=blurgle,dc=ca
    ou: People
    objectClass: top
    objectClass: organizationalUnit

    dn: ou=Groups,dc=blurgle,dc=ca
    ou: Groups
    objectClass: top
    objectClass: organizationalUnit

    dn: uid=testuser,ou=People,dc=yourdomain,dc=dom
    cn: testuser
    sn: Dummy
    objectClass: person
    objectClass: organizationalPerson
    objectClass: inetOrgPerson
    objectClass: posixAccount
    objectClass: top
    objectClass: shadowAccount
    uid: testuser
    userpassword: Encrypted_Password_Generated_by_slappasswd_-s
    uidnumber: 10000
    gidnumber: 10000
    gecos: Test User Dummy
    loginShell: /bin/tcsh
    homeDirectory: /usr/home/testuser
    description: A simple test user.

    dn: ou=Addressbook,uid=testuser,ou=People,dc=yourdomain,dc=dom
    ou: Addressbook
    objectClass: organizationalUnit

    dn: cn=testgroup,ou=Groups,dc=yourdomain,dc=dom
    cn: testgroup
    objectClass: top
    objectClass: posixGroup
    gidnumber: 10000
    memberuid: testuser
    </pre>

    <p><span class="caps">NOTE</span>: The userPassword section for our &#8220;pamclient&#8221; person object is in the encrypted form of the password you used in nss_ldap.conf previously. Please remember this!</p>


    <p>The first five sections are required even if you don&#8217;t plan on adding any users right away. They define where your data goes. The next (sixth) section defines your user. All the fields should be self explanitory, for those who do not know, the &#8220;gecos&#8221; field is the &#8220;Full Name&#8221; field in chfn(1). The seventh section indicates the storage area for testuser&#8217;s address book. The final field is a group definition. It again, is self explanitory.</p>


    <p>To add this, you can use one of two tools, I will discuss the usage of &#8220;slapadd&#8221; as we havn&#8217;t started openldap yet (if you have already started openldap, you can use &#8220;ldapadd&#8221;). Anyway, putting all the above information into a file called &#8220;input.ldif&#8221;, we will run the following command to test to make sure we got no typos:</p>


    <pre>
    # slapadd -u -l input.ldif
    </pre>

    <p>If that works okay, run it again without the -u option:</p>


    <pre>
    # slapadd -l input.ldif
    </pre>

    <p>Next, we&#8217;ll look at putting it all together, and seeing just exactly what we can do.</p>


    <h3>rc.conf</h3>


    <p>You will need to make one change to your /etc/rc.conf before you can successfully start up the openldap server on boot, and that one line would be:</p>


    <pre>
    slapd_enable="YES"
    slapd_flags="-h 'ldap:/// ldaps:///'"
    </pre>

    <p>Once again, if you are choosing not to use <span class="caps">SSL</span>, you can ignore the slapd_flags line entirely.</p>


    <h3>pam.d files</h3>


    <p>Now, we should also edit a couple of files in /etc/pam.d so we can actually log in with the newly created user (we will add it to the database in the next step). We first must create a new /etc/pam.d/ldap file like the pam_ldap pkg-message file told us too, in case you weren&#8217;t paying attention, it goes a little something like this:</p>


    <pre>
    login   auth    sufficient      /usr/local/lib/pam_ldap.so
    </pre>

    <p>Now let&#8217;s alter the /etc/pam.d/sshd file so we can ssh in under our testuser. We will simply find the line that looks like this:</p>


    <pre>
    auth required pam_unix.so no_warn try_first_pass
    </pre>

    <p>And add this line just before it:</p>


    <pre>
    auth sufficient /usr/local/lib/pam_ldap.so no_warn try_first_pass
    </pre>

    <p>We&#8217;ll also need to edit the pam.d/passwd file so we can change passwords for our user accounts. To do this, do the following:</p>


    <pre>
    password  sufficient  pam_unix.so  no_warn try_first_pass nullok
    password  sufficient  /usr/local/lib/pam_ldap.so  use_first_pass
    </pre>

    <p>You can of course, edit more files (ie /etc/pam.d/su would be another one that quickly comes to mind, /etc/pam.d/system, /etc/pam.d/ftpd, and so on), but for now, we&#8217;ll just stick to sshd.</p>


    <p><b>Special note:</b> <i>In order for you to be able to change <span class="caps">LDAP</span> user&#8217;s passwords with passwd(1) you will need to apply the patch outlined in the immediately following page, <a href="#page32">3.9</a>.</i></p>


    <h3>passwd.c patch</h3>


    <p>This page tells you where you need to make a modification to a file that is a part of your FreeBSD world to make sure that you are able to change user&#8217;s passwords who are stored in <span class="caps">LDAP </span>(though this ought to work for users stored in a MySQL backed DB, etc. as well).</p>


    <p>You need to open up /usr/src/usr.bin/passwd/passwd.c in your favourite text editor (please note that this requires you to have the FreeBSD sources downloaded on your system); then make the following changes around line 123 of the file.</p>


    <p>Remove this bit:</p>


    <pre>
    errx(1,
    "Sorry, `passwd' can only change passwords for local or NIS users.");
    </pre>

    <p>And replace that with these lines:</p>


    <pre>
    /* XXX: Green men ought to be supported via PAM. */
    fprintf(stderr, "Now you can change LDAP passwordi via PAM\n");
    </pre>

    <p>Then you need to execute a command to build and install this new version:</p>


    <pre>
    # make obj depend all install
    </pre>

    <p>This should give you a brand new /usr/bin/passwd capable of changing passwords of your <span class="caps">LDAP</span> user. Try it out at the end of this guide to change the password of your &#8220;testuser&#8221; user.</p>


    <h3>nsswitch.conf</h3>


    <p>We need to make one more change to a file in /etc. Specifically, we need to edit (or create if one doesn&#8217;t exist), an /etc/nsswitch.conf file which contains the following information:</p>


    <pre>
    passwd: files ldap
    group: files ldap
    </pre>

    <p>It is very important that &#8216;files&#8217; remains first, and &#8216;ldap&#8217; comes after. If nss is unable to contact your ldap server for whatever reason, you will experience problems trying to log in as your backup user (you should have a user that can log in who authenticates against the standard FreeBSD files.</p>


    <h2>Getting ready to go</h2>


    <h3>Start OpenLDAP</h3>


    <p>At this stage, we now want to start up the openldap server, to do this we run its rc script:</p>


    <pre>
    # /usr/local/etc/rc.d/slapd.sh start
    </pre>

    <p>This may, or may not stall on you for up to 30 to 120 seconds, don&#8217;t worry, this is normal from what I&#8217;ve found (first time I fired it up, it hung for 120 seconds, then each time I ran it after it hung for a few more seconds).</p>


    <h3>Test it out</h3>


    <p>Next, if we were successful, we should be able to see our new user:</p>


    <pre>
    # id testuser
    uid=10000(testuser) gid=10000(testgroup) groups=10000(testgroup)
    </pre>

    <p>Now, if you ssh to localhost, it should work just fine. Entering in the password you created the account with (its unencrypted form of course).</p>


    <h2>Credits</h2>


    <h3>These be the folks making this happen&#8230;</h3>


    <p>While this document has been written by myself, <a href="http://www.blurgle.ca/">Jeremy Tregunna</a> it has also been contributed to, by the following people:</p>


    <ul>
    <li><span class="caps">HEMI </span>- <a href="http://www.puresimplicity.net/~hemi/">http://www.puresimplicity.net/~hemi/</a>
    <ul>
    <li>Found various problems and pointed out issues.</li>
    </ul>
    </li>
    <li>Lewis Thompson &#8211; <a href="http://www.lewiz.org/">http://www.lewiz.org/</a>
    <ul>
    <li>Submitted updates to the configuration, specifically per-user address books and <span class="caps">SSL </span>(though I did chomp it a little to make it more simple).</li>
    </ul>
    </li>
    <li>Ian Moore
    <ul>
    <li>Suggested the usage of the -u option to slapadd to be sure its added properly (avoids headaches if a mistake was made).</li>
    </ul></li>
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
