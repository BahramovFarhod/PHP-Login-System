<?php
//if (isset($_POST["'submit'"])) {
    //session_start();
    //unset($_SESSION);
    //session_destroy();
    //include("index.php");
  //  exit();
  # code...
    //echo "Your are succesfully logged out";
//}


if(isset($_POST['submit'])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: ../index.php");
  exit();
}


 ?>
