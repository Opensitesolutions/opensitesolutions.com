<?php
set_include_path ("/var/www/html/opensitesolutions.com/");
?>

<?php
    include 'includes/header.inc';
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
                                <h2 id="sect1">Apache</h2>
				<?php
					include 'includes/adds/google_advertise.inc';
				?>

<pre>
<cite>
BSD LDAP configuration

1. Install Packages
2. BSD 5.x System Settings
3. System Authenticaton
4. BSD PAM modules
5. Automounting Home Directories.
6. Changing your password.

1. Install Packages
-----------------------------
packages to install
	a. openldap-client-x.xx Open source LDAP client implementation .
	b. nss_ldap-x.xxx      RFC 2307 NSS module
		cd /usr/ports/net/nss_ldap
	c. pam_ldap-x.x.x      A pam module for authenticating with LDAP
		cd /usr/ports/security/pam_ldap/
		make install clean ( if you build this port first, the following ports will also be installed
			- gettext-0.16.1_3    GNU gettext package
			- gmake-3.81_2        GNU version of 'make' utility
			- libiconv-1.11_1     A character set conversion library
			- libtool-1.5.24      Generic shared library support script
			- openldap-client-2.3.40 Open source LDAP client implementation 
			- pam_ldap-1.8.4      A pam module for authenticating with LDAP

2. BSD 5.x System Settings
--------------------------------------------------
BSD system uses /etc/ldap.conf
pam_ldap uses /usr/local/etc/ldap.conf
nss_ldap usees /usr/local/etc/nss_ldap.conf

+Create a symlink for /etc/ldap.conf pointing to /usr/local/etc/ldap.conf
ln -s /usr/local/etc/ldap.conf /etc/ldap.conf


6.x Systems Settings
----------------------------------
1. cd  /usr/locatl/etc 
	- create config file
		cp nss_ldap.conf.sample nss_ldap.conf
	- created ldap config file
		cp ldap.conf.dist

Configuration parametets (Minimal) /usr/local/etc/nss_ldap.con and /usr/local/etc/ldap.conf
1. host <ip address of ldap servers seperated by spaces> 
2. Distinguished name base <dc=domain,dc=com>

Openldap cleint uses /usr/local/etc/openldap/ldap.conf as it's configuration file 
change the BASE and URI value to reflect your domain. commands that use this conf file are
ldapsearch  

3. System Authentication
--------------------------------------
edit /etc/nsswitch.conf to look the settings below. - (File can be downloaded from current directory)

passwd:	files ldap
group:	files ldap
shells: 	files ldap	

authenticate first from local system settings and then from LDAP directory

4. BSD PAM modules
---------------------------------
PAM modules are located in /etc/pam.d directory 
add the following line before each "auth required section" in the files mentioned below.
	------ 	auth	sufficient	/usr/local/lib/pam_ldap.so	no_warn try_first_pass	---------
Files
-sshd 
username password sent to Ldap directory.

-system file
allows users to su to another login name as well as becoming root(users must exist in the wheel group)

-login
allows your ldap account to login from the console

Adding the line above will enable LDAP authentication for that application

5. Automounting Directory
---------------------------------------
1. As root create		 /.amd_mnt
2. start mountd manually 	 mountd -r
3. Turn on rpcbind
4.. start amd manually enter the following command -  amd -a /.amd_mnt -l syslog /host /etc/amd.map /net/ /etc/amd.map
5. To have these feautures start up automatically enter the follwoing settings in /etc/rc.conf
	rpcbind_enable="YES"
	mountd_flags="-r"
	amd_enable="YES"
</cite>
</pre>
                        </div>
                </div>
        <!-- End center Column -->


<?php
    include 'includes/left.inc';
?>


<?php
    include 'includes/footer.inc';
?>
