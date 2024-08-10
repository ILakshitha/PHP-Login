<?php
include_once 'header.php' 
?>

<div id="div1">
       <form action="includes/signup.inc.php" method="post">

       <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    
    <label for="country">Email</label>
    <input type="text" id ="email" name="email" placeholder="Enter your Email"/>

    <label for="fname">User Name</label>
    <input type="text" id="fname" name="uid" placeholder="Your name..">
    
    <label for="lname">Password</label>
    <input type="password" id="pwd" name="pwd" placeholder="password">

    <label for="lname">Password repeat</label>
    <input type="password" id="pwd" name="pwdrepeat" placeholder="Enter password again">
    <input type="submit" value="Submit">
       </form>
       <p>New Here ?<a href="login.php">Log In.</a></p>
       </div>
        <?php
include_once 'footer.php' 
?>