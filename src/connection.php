<?php 
$db_server = "localhost";
$username = "root";
$password = "";
$db_connect = "mail";

// connection query
$connection_mail = mysqli_connect($db_server, $username, $password, $db_connect);
if(!($connection_mail)){
    die("connection death");
}
 ?>