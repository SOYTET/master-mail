<?php 
    if(!isset($_SESSION['Email'])){
        header('location: ./src/login/login.php?ref='.$_SERVER["PHP_SELF"]);
    }
?>