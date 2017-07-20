<?php
    define('TITLE', 'Rainbow Entertainment');
    include'header.php';
?>

<head>
  <style>
  h3
  {
    font-size: 15pt;
  }
  p
  {
    font-size: 12pt; 
  }
  </style>
</head>
      <!--Body Content-->
      <div class="container">
        <h2 class="text-center">Upcoming PS4 Games</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!--Images for slides-->
        <div class="carousel-inner">
          <div class="item active">
            <img src="image/uncharted.png" alt="Uncharted" style="width:100%;">
          </div>

          <div class="item">
            <img src="image/marvel.jpg" alt="Marvel" style="width:100%">
          </div>

          <div class="item">
            <img src="image/sow.png" alt="Shadow" style="width:100%">
          </div>

          <div class="item">
            <img src="image/farcry5.jpg" alt="Farcry5" style="width:100%">
          </div>

          <div class="item">
            <img src="image/codww2.jpg" alt="WorldWar2" style="width:100%">
          </div>
        </div>

        <!--Left and Right Button-->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>


        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h3 class="text-center">About Us</h3>
            <p class="text-center">We are Rainbow Entertainment!</p>
            <p class="text-center">Work Hard, Play Hard!</p>
          </div>

          <div class="col-sm-4">
            <h3 class="text-center">What We Do?</h3>
            <p class="text-center">We provide information about PS4 Games!</p>
          </div>

          <div class="col-sm-4">
            <h3 class="text-center">For more information about PlayStation</h3>
            <p class="text-center">Click here to access to <a href="https://www.playstation.com/en-us/">PlayStation</a></p>
        </div>
      </div>
    </body>
</html>
