<!--- begin header --->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=''>
    <meta name="keywords" content="">
    <title>Open source Medical billing software</title>
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

    <h1 id="top">Open source Medical Billing Software</h1>

    <p>
    <ul>
    <li><a href="http://www.oemr.org/" target="_blank">OpenEMR</a> is a free medical practice management, electronic medical records, prescription writing, and medical billing application. These programs are also referred to as electronic health records. It is a free open source replacement for medical applications such as Medical Manager, Health Pro, and Misys. It features support for EDI billing to clearing houses such as MedAvant and ZirMED using ANSI X12. Medical claim and accounts receivable are accomplished through SQL-Ledger, which has been customized. Calendar features include categories for appointment types, colors associated with appointment types, repeating appointments, and the ability to restrict appointments based on type. There are customizable medical encounter forms, support for voice recognition software, electronic or scanned digital document management for records, and support for HL7 messages.</li><br>
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
