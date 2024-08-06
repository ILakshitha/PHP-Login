<?php
include_once 'header.php' 
?>

<div id="div1">
       <form action="includes/login.inc.php" method="post">


    <label for="lname">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your Email">

    <label for="password">password</label>
    <input type="password" id ="pwd" name="email" placeholder="Enter Your Password"/>
  
    <input type="submit" value="Submit">
       </form>

       <p>New Here ?<a href="signup.php">Register.</a></p>
       </div>
        <?php
include_once 'footer.php' 
?>