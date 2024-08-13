<?php
include_once 'header.php' 
?>

<div id="div1">
       <form action="includes/login.inc.php" method="post">


    <label for="lname">User Name</label>
    <input type="text" id="uid" name="uid" placeholder="Enter your User Name">

    <label for="password">password</label>
    <input type="password" id ="pwd" name="pwd" placeholder="Enter Your Password"/>
  
    <input type="submit" name="submit" value="Submit">
       </form>

       <p>New Here ?<a href="signup.php">Register.</a></p>
       </div>
        <?php
include_once 'footer.php' 
?>