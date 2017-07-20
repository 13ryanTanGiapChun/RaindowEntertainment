<?php
if(isset($_POST['registerBtn'])) {

  include_once'DB-inc.php';

  $first = mysqli_real_escape_string($conn, $_POST['firstname']);
  $last = mysqli_real_escape_string($conn, $_POST['lastname']);
  $userNama = mysqli_real_escape_string($conn, $_POST['username']);
  $emailAdd = mysqli_real_escape_string($conn, $_POST['inputEmail']);
  $pw = mysqli_real_escape_string($conn, $_POST['inputPwd']);


  if(empty($first) || empty($last) || empty($userNama) || empty($emailAdd) || empty($pw))
  {
    header("Location: ../Register.php?Register=empty");
    exit();
  } else {
    //Check input characters
    if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
    {
      header("Location: ../Register.php?Register=invalid");
      exit();
    } else {
      //Check email
        if(!filter_var($emailAdd, FILTER_VALIDATE_EMAIL)){
          header("Location: ../Register.php?Register=email");
          exit();
        } else {
            $sql = "SELECT * FROM customer WHERE custUsername='$userNama'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
              header("Location: ../Register.php?Register=usertaken");
              exit();
            } else {
                //Hash the password
                $hashedPw = password_hash($pw, PASSWORD_DEFAULT);
                //Insert the users data into database
                $sql = "INSERT INTO customer (custFirst, custLast, custUsername, custPwd, custEmail) VALUES ('$first', '$last', '$userNama', '$hashedPw', '$emailAdd');";
                mysqli_query($conn, $sql);
                header("Location: ../Register.php?Register=success");
                exit();
            }
        }
    }
  }

} else { 
  header("Location: ../Register.php");
  exit();
}
?>
