<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BPV regis</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/basic.css">
    <!-- My self written css for this project -->
    <link href="css/custom.css" rel="stylesheet">
    <!-- The css for the login page -->
    <link href="css/singin.css" rel="stylesheet">
    <!-- The css for the bpv record page -->
    <link href="css/bpv_record.css" rel="stylesheet">
    <!-- The css for the loops page -->
    <link href="css/loops.css" rel="stylesheet">
    <!-- The css for the carousel page -->
    <link href="css/carousel.css" rel="stylesheet">
    <!-- The css for the bpv st view page -->
    <link href="css/pbv_st_view.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/3.3.7.bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

  </head>

  <body>

  <!-- Begin page content -->

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" a href="./index.php?content=home">BPV KYS</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="./index.php?content=home">Home</a></li>
          <li><a href="./index.php?content=about">About</a></li>
          <li><a href="./index.php?content=register">Registreren</a></li>
          <li><a href="./index.php?content=login">Inloggen</a></li>
          

          <!-- less navbar -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">KZD<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="./index.php?content=variables">Variables</a></li>
              <li><a href="./index.php?content=mixins">Mixins</a></li>
              <li><a href="./index.php?content=guarded_mixins">Guarded Mixins</a></li>
              <li><a href="./index.php?content=loops">loops</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="index.php?content=carousel">Carousel</a></li>
            </ul>
          </li>

          <!-- verwijder dit -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DELETE THIS<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="./index.php?content=student_home">student home</a></li>
              <li><a href="./index.php?content=docent_home">docent home</a></li>
              <li><a href="./index.php?content=root_home">root home</a></li>
              <li><a href="./index.php?content=bpvco_home">bpvco home</a></li>
              <li><a href="./index.php?content=admin_home">admin home</a></li>
            </ul>
          </li>
          <?php 
              session_start();
              include("userrole_links.php");
          ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <footer class="footer">
    <div class="container">
      <p class="text-muted">AM1A</p>
    </div>
  </footer>

  <div class="container">
    <div class="page-header">
      <?php
        $_SESSION["content"] = $_GET["content"];
        if (isset($_GET["content"])) {
          include($_GET["content"].".php");
        } else {
          include("home.php");
        } 
      ?>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src='js/jquery-3.1.1.min.js'></script>
  <script src="js/3.3.7.bootstrap.min.js"></script>
  <script src="js/ie10-viewport-bug-workaround.js"></script>
  <script src="js/home.js"></script>
  <script src="js/navigation.js"></script>
  
  <?php include("loadscript.php") ?>
</body>
</html>