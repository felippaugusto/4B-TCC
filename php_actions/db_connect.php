<?php
// PHP connection
$serverName = "localhost";
$userName = "root";
$password = "";
$db_name = "tcc_ecommerce";

$connect = mysqli_connect($serverName, $userName, $password, $db_name);

if(mysqli_connect_error()) {
    echo "Deu erro";
}
?>