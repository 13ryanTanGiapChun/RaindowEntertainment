<?php
    define('TITLE', 'Upcoming - Rainbow Entertainment');
    include'header.php';
?>
<html>
    <head>
        <title>Upcoming Games - Rainbow Entertainment</title>
        <link rel="icon" type="image/jpg" href="">
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Bootstrap Core CSS-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">

        <!--Custom CSS-->
        <link rel="stylesheet" type="text/css" href="custom.css">
        <link href="https://fonts.googleapis.com/css?family=Oregano" rel="stylesheet">

        <style>
        table, th, td
        {

          border: 5px solid gray;
          text-align: center;
          padding:8px;
          margin-top: 8px;
          font-size: 15pt;
        }

        th, td
        {
          font-style: italic;
          padding:8px;
        }
        </style>
      </head>

          <!--Upcoming Games Videos-->
          <table style="width:90%" align="center">
            <tr>
              <th>Name</th>
              <th>Video</th>
              <th>Photo</th>
            </tr>

            <tr>
              <td>Marvel vs Capcom</td>
              <td><video width="450" height="450" controls>
                  <source src="video/marvel.mp4" type="video/mp4">
                  </video>
              </td>
              <td><img src="image/marvel2.jpg" alt"Marvel" style="width:300px; height:350px;"></td>
            </tr>

            <tr>
              <td>Shadow of War</td>
              <td><video width="450" height="450" controls>
                  <source src="video/shadow.mp4" type="video/mp4">
                  </video>
              </td>
              <td><img src="image/shadow.jpg" alt"Shadow of War" style="width:300px; height:350px;"></td>
            </tr>

            <tr>
              <td>Call of Duty: World War 2</td>
              <td><video width="450" height="450" controls>
                  <source src="video/ww2.mp4" type="video/mp4">
                  </video>
              </td>
              <td><img src="image/ww2.jpg" alt"World War 2" style="width:300px; height:350px;"></td>
            </tr>

            <tr>
              <td>Farcry 5</td>
              <td><video width="450" height="450" controls>
                  <source src="video/farcry5.mp4" type="video/mp4">
                  </video>
              </td>
              <td><img src="image/farcry52.jpg" alt"Farcry 5" style="width:300px; height:350px;"></td>
            </tr>

            <tr>
              <td>Uncharted: The Lost Legacy</td>
              <td><video width="450" height="450" controls>
                  <source src="video/uncharted.mp4" type="video/mp4">
                  </video>
              </td>
              <td><img src="image/uncharted2.png" alt"Uncharted" style="width:300px; height:350px;"></td>
            </tr>

          </table>
      </body>
  </html>
