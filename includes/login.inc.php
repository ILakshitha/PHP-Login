<?php
if (isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if(emptyInputs($username, $pwd) !==false) {
    exit();
  }
}
else{
    header('Location:../login.php');
}