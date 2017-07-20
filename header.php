<?php
    session_start();
?>
<html>
    <head>
        <title>
          <?php
              if(defined('TITLE')) {
                  echo TITLE;
              } else {
                  echo 'Rainbow Entertainment';
              }
          ?>
        </title>
        <link rel="icon" type="image/jpg" href="">
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap Core CSS-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <!--Script to move the carousel-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--Custom CSS-->
        <link rel="stylesheet" type="text/css" href="custom.css">
        <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">
    </head>
    <body>
      <!--Navigation-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Rainbow Entertainment</a>
                </div>

                <ul class="nav navbar-nav">
                    <li><a href="Home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-headphones"></span> Games <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="Upcoming.php">Upcoming Games</a></li>
                            <li><a href="Vr.php">Virtual Reality Games</a></li>
                        </ul>
                    </li>
                    <li><a href="Gallery.php"><span class="glyphicon glyphicon-picture"></span> Images </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php
                  if(isset($_SESSION['c_ID'])){
                    echo '<form action="function/logout-inc.php" class="pull-right" method="post">
                              <button class="btn-info navbar-btn" style="border-radius:12px;" type="submit" name="logoutButton">Logout</button>
                     </form>';
                  } else {
                    echo '<li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>';
                  }
                  ?>
                </ul>
            </div>
        </nav>
