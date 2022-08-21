<?php
include('../config.php');
session_start();

$user_check = $_SESSION['matric_no'];
$ses_sql = mysqli_query($connection, "SELECT * FROM student WHERE matric_no = '$user_check'");
$row = mysqli_fetch_array($ses_sql);
$login_session = $row['matric_no'];



if(!isset($_SESSION['matric_no'])){
    header("location: ../portal.login.php");
}



?>