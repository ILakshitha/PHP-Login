<?php
include_once 'header.php' 
?>
       <form action="includes/login.inc.php" method="post">

       <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Email</label>
    <input type="text" id ="email" name="email" placeholder="Enter your Email"/>
  
    <input type="submit" value="Submit">
       </form>

        <?php
include_once 'footer.php' 
?>