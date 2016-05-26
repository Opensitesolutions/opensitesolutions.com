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
     <link href="/style.css" rel="stylesheet">
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
