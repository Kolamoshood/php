<?php
include('config.php');
session_start();

$user_check = $_SESSION['email'];
$ses_sql = mysqli_query($connection, "SELECT * FROM user WHERE email = '$user_check'");
$row = mysqli_fetch_array($ses_sql);
$login_session = $row['email'];


if(isset($_SESSION['email'])){
    header("location: user.php");
}else{
    header("location: index.php");
}
?>