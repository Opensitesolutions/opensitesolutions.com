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

      <h1 id="sect1">LDAP Guide</h1>
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
