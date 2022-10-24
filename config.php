<?php 

$servername = "localhost";
$databaseUser = "root";
$databasePassword = "";
$databaseName = "php";

$connection = new mysqli($servername, $databaseUser, $databasePassword, $databaseName);

if (!$connection){
    echo "connection failed";
};

?>
