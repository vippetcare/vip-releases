<?php
  include($_SERVER['DOCUMENT_ROOT'] . '/settings.php');
  include(ROOT_PATH . '/lib/password_protect.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>VIP PetCare <?php echo $currentVersion ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="/stylesheets/date-picker.css" rel="stylesheet">
    <link href="/stylesheets/styles.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" href="https://releases.pet-records.com/apple-touch-icon.png">
  </head>
  <body>
    <div class="container">
      <img class="vip-logo" src="/images/vip_petcare_logo.png">
      <h1 class="vip-title">
        Mobile Point of Sale Releases<br>
        <small>Version <?php echo $currentVersion ?></small>
      </h1>
      <hr class="colorgraph">