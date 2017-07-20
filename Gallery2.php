<?php
    define('TITLE', 'Gallery - Rainbow Entertainment');
    include'header.php';
?>
<html>
  <head>
    <style>
    .prevButton
    {
      text-align: left;
      text-decoration: none;
      font-size: 15pt;
      margin-left: 10px;
    }
    .prevButton > a
    {
      text-decoration: none;
      color: black;
    }
    </style>
  </head>
      <body>
          <!--Gallery 2-->
          <div class="container">
            <a download="image/theorder.jpg" href="image/theorder.jpg"><img src="image/theorder.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">
            <a download="image/wd2.jpg" href="image/wd2.jpg"><img src="image/wd2.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">
            <a download="image/jc3.jpg" href="image/jc3.jpg"><img src="image/jc3.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">
            <a download="image/ffxv.jpg" href="image/ffxv.jpg"><img src="image/ffxv.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">
            <a download="image/bf1.jpg" href="image/bf1.jpg"><img src="image/bf1.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">
            <a download="image/naruto.jpg" href="image/naruto.jpg"><img src="image/naruto.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">
            <a download="image/bb.jpg" href="image/bb.jpg"><img src="image/bb.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">
            <a download="image/i2.jpg" href="image/i2.jpg"><img src="image/i2.jpg" style="float:none; padding: 20px; margin-bottom:0.5em; margin-right:1%; height:50%; width:45%;">

          </div>

          <!--Previous Button-->
          <div class="prevButton">
            <a href="Gallery.php" class="previous">&laquo; Previous</a>
          </div>

          <!--Bootstrap JS-->
          <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
      </body>
  </html>
