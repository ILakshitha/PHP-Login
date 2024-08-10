<?php
if (isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  $emptyinputs = emptyInputsSignup($name, $email, $username,$pwd, $pwdrepeat);
  $invalidUid = invalidUid($username);
  $invalidEmail = invalidEmail($email);
  $pwdMatch = pwdMatch($pwd , $pwdMatch);
  $uidExists  = uidExists($conn, $username, $email);

  if(emptyInputsLogin($username, $pwd) !==false) {
    header("Location:../signup.php?error=emptyinput")

    exit();
  }
}
else{
    header('Location:../login.php');
}