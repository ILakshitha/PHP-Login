<?php
if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  $emptyinputs = emptyInputsSignup($name, $email, $username,$pwd, $pwdrepeat);
  $invalidUid = invalidUid($username);
  $invalidEmail = invalidEmail($email);
  $pwdMatch = pwdMatch($pwd , $pwdMatch);
  $uidExists  = uidExists($conn, $username, $email);

  if($emptyIputs !==false) {
    header("Location:../signup.php?error=emptyinput");
    exit();
  }
  if($invalidUid !==false) {
    header("Location:../signup.php?error=invaliduid");
    exit();
  }
  if($invalidEmail !==false) {
    header("Location:../signup.php?error=invalidemail");
    exit();
  }
  if($pwdMatch !==false) {
    header("Location:../signup.php?error=passworddontmatch");
    exit();
  }
  if($uidExists !==false) {
    header("Location:../signup.php?error=usernametaken");
    exit();
  }

}
else{
    header('Location:../login.php');
}