<?php
    define('TITLE', 'VirTual Reality');
    include'header.php';
?>
<head>
  <style>
    .alert.warning
    {
      background-color: yellow;
      opacity:1;
      margin-top: 5px;
      margin-bottom: 5px;
      font-size: 18pt;
      text-align: center;
    }
    .closeBtn
    {
      float: right;
      cursor: pointer;
      font-size: 15pt;
      font-weight: bold;
      line-height: 22px;
    }
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
    button
    {
      margin-left: 80px;
    }
  </style>
</head>

<!--Alert Message-->
<div class="alert warning">
  <span class="closeBtn" onclick="this.parentElement.style.display='none';">&times;</span>
  <strong>Warning!</strong> This is virtual reality! Which means you are in the game!
</div>

<!--Function-->
<script type="text/javascript">
function enterFullScreen(id) {
  var element = document.getElementById(id);
  if (element.mozRequestFullScreen)
  {
    element.mozRequestFullScreen();
  } else if (element.webkitRequestFullScreen)
  {
    element.webkitRequestFullScreen();
  }
}
</script>

<!--Vr Content-->
<table style="width:90%" align="center">
  <tr>
    <th>Name</th>
    <th>VR</th>
  <tr>

  <tr>
    <td>The Deep</td>
    <td>
      <video class="video_player" id="player" width="50%" controls="controls" autoplay="autoplay">
        <source src="video/thedeep.mp4"/>
      </video>
      <button onclick="enterFullScreen('player'); return false">
        Experience VR!
      </button>
    </td>

    <tr>
      <td>Drive Club</td>
      <td>
        <video class="video_player" id="player" width="50%" controls="controls">
          <source src="video/driveclub.mp4"/>
        </video>
        <button onclick="enterFullScreen('player'); return false">
          Experience VR!
        </button>
      </td>
  </tr>
</table>
