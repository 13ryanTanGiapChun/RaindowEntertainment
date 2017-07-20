<?php
session_start();

if(isset($_POST['loginButton'])) {

  include 'DB-inc.php';

  $userNama = mysqli_real_escape_string($conn, $_POST['username']);
  $pw = mysqli_real_escape_string($conn, $_POST['inputPwd']);

  //Check if inputs are empty
  if(empty($userNama) || empty($pw)) {
    header("Location: ../Home.php?login=empty");
    exit();
  } else {
      $sql = "SELECT * FROM customer WHERE custUsername='$userNama'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck < 1) {
        header("Location: ../Home.php?login=error1");
        exit();
      } else {
          if($row = mysqli_fetch_assoc($result)) {
            //Checking password
            $hashedPwdCheck = password_verify($pw, $row['custPwd']);
            if($hashedPwdCheck == false) {
                header("Location: ../Home.php?login=error2");
                exit();
            } elseif($hashedPwdCheck == true) {
                //Log in the user here
                $_SESSION['c_ID'] =$row['custID'];
                $_SESSION['c_firstN'] =$row['custFirst'];
                $_SESSION['c_lastN'] =$row['custLast'];
                $_SESSION['c_email'] =$row['custUsername'];
                $_SESSION['c_Uname'] =$row['custEmail'];
                header("Location: ../Home.php?login=success");
                exit();
            }
          }
      }
  }
} else {
    header("Location: ../Home.php?login=error3");
    exit();
}
?>
