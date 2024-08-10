<?php
function emptyInputsSignup($name, $email, $username,$pwd, $pwdrepeat){
   $result;
   if(empty($name) || empty($email) || empty($username)|| empty($pwd)||empty($pwdrepeat)) {
   $result = true;
   } else{
    $result = false;

   }
   return $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    $result = true;
    } else{
     $result = false;
 
    }
    return $result;
 }

 function invalidEmail($email);{
    $result;
    if(!filter_var($email, FILTER_VALIDATION_EMAIL)) {
    $result = true;
    } else{
     $result = false;
 
    }
    return $result;
 }

 function pwdMatch($pwd , $pwdMatch){
    $result;
    if($pwd != $pwdrepeat) {
    $result = true;
    } else{
     $result = false;
 
    }
    return $result;
 }

 function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli)
 }

 