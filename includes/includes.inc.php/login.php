<?php
session_start();
if (isset($_POST['submit'] )) {

  include '../include/dbh.inc.php';
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $password = mysqli_real_escape_string($conn, $_POST['u_pwd']);

  //Error handlers
  if (empty($uid) || empty($password)) {
    header("location: ../index.php?login=empty");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE user_uid='".$uid."' OR user_email='".$uid."';";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if ($resultcheck < 1) {
      header("location: ../index.php?login=error1");
      exit();
    } else {
      if ($row = mysqli_fetch_assoc($result)) {
        //de-hashing the password
        $hashedpasswordcheck = password_verify($password, $row['user_pwd']);
        if ($hashedpasswordcheck == false) {
          header("location: ../index.php?login=error2");
          exit();
        }
        else if ($hashedpasswordcheck == true) {
            $session ['u_id'] = $row['user_id'];
            header("location: ./about.php?login=succes");
            exit();
        }
      }
    }  # code...
  }
}
  else {
    header("location: ../index.php?login=error3");
    exit();
  }
	?>
