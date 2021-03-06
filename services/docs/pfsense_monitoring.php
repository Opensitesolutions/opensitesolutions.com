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

    <h1>Pfsense Monitoring</h1>
    <p>
    Pfsense firewall contains a large selection of real time reporting using stock open source software:
    <ul>
    <li>NTOP</li>
    <li>Dashboard</li>
    </ul>
    </p>
    <p>
    with ajax enabled pages to make updating easy.
    </p>

    <h2>Pfsense Dashboard</h2>

    <p>
    The dashboard diagram in the following image gives a clear view of real time activiy and type of real time monitoring that is available using this open source software firewall.</p>

    <img src="/images/pfsense_dashboard.gif">
    <br><br><b>related articles</b> <a href="firewall.php">PFsense firewall</a>

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
