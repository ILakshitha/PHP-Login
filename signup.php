<?php
include_once 'header.php' 
?>

<div id="div1">
       <form action="includes/login.inc.php" method="post">

       <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    
    <label for="country">Email</label>
    <input type="text" id ="email" name="email" placeholder="Enter your Email"/>
    
    <label for="lname">Password</label>
    <input type="password" id="pwd" name="password" placeholder="password">
    <input type="submit" value="Submit">
       </form>
       <p>New Here ?<a href="login.php">Log In.</a></p>
       </div>
        <?php
include_once 'footer.php' 
?>