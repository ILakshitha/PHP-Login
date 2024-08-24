<?php
include_once 'header.php' 

?>
        <h1>
            Hello <?php
            if(isset($_SESSION["username"])){

                echo $_SESSION["username"];
            } else{
                echo 'User!!';
            }
            
            ?>
        </h1>

        <?php
include_once 'footer.php' 
?>

  