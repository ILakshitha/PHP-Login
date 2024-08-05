<?php
include_once 'header.php' 
?>

<div id="div1">
       <form action="includes/login.inc.php" method="post">

       <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your Email">

    <label for="password">password</label>
    <input type="password" id ="pwd" name="email" placeholder="Enter Your Password"/>
  
    <input type="submit" value="Submit">
       </form>
       </div>
        <?php
include_once 'footer.php' 
?>