<?php
include_once 'header.php' 
?>

<div id="div1">
       <form action="includes/signup.inc.php" method="post">

    <label for="fname">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name..">

    
    <label for="country">Email</label>
    <input type="text" id ="email" name="email" placeholder="Enter your Email"/>

    <label for="fname">User Name</label>
    <input type="text" id="uid" name="uid" placeholder="Your name..">
    
    <label for="lname">Password</label>
    <input type="password" id="pwd" name="pwd" placeholder="password">

    <label for="lname">Password repeat</label>
    <input type="password" id="pwdrepert" name="pwdrepeat" placeholder="Enter password again">
    <input type="submit" name="submit" value="Submit">
       </form>
       <?php
       if(isset($_GET["error"])){
         if($_GET["error"]=="emptyinput"){
            echo'<div class="error">Fill All Field</div>';
         }elseif($_GET["error"]=="invaliduid"){
            echo'<div class="error">Wrong ID</div>';
         }elseif($_GET["error"]=="invalidemail"){
            echo'<div class="error">Wrong email</div>';
         }elseif($_GET["error"]=="passwordsdontmatch"){
            echo'<div class="error">Password not mached</div>';
         }elseif($_GET["error"]=="stmtfailed"){
            echo'<div class="error">somthing went wrong</div>';
         }elseif($_GET["error"]=="usernametaken"){
            echo'<div class="error">Already include username or email</div>';
         }
       }
       ?>
       <p>New Here ?<a href="login.php">Log In.</a></p>
       </div>
        <?php
include_once 'footer.php' 
?>