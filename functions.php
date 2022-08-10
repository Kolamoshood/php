<?php 
include('config.php');

function emptySigninInput($username, $email, $password) {
    $result = "";
    if (empty($username) || empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidexists($connection, $email) {
   $sql_query = "SELECT * FROM user WHERE email = $email;";
//    $stmt = mysqli_stmt_init($connection);
    $result = mysqli_query($connection, $sql_query);
//    if (mysqli_stmt_prepare($stmt, $sql_query)) {
    if ($result) {
        header('location: index.php?error=emailexists');
         exit();
    } else {
        $result = false;
        return $result;
    }
    // mysqli_stmt_bind_param($stmt, 's', $email);
    // mysqli_stmt_execute($stmt);

    // $resultdata = myqsli_stmt_get_result($stmt);

    // if ($row = mysqli_fetch_assoc($resultdata)) {
    //     return $row;
    // } else {
    //     $result = false;
    //     return $result;
    // }
    // mysqli_stmt_close($stmt);
}

function create_user($connection, $username, $email, $password) {
    $reg_query = "INSERT INTO user (username, email, password) VALUES ('$username', ' $email', '$password')";
        $result = mysqli_query($connection, $reg_query);
        if ($reg_query) {
        header('location:login.php?regsuccess');
        }
    // if ($result){
    //     header('location:login.php?error=regsuccess');
    //     exit();
    // } else {
    //     header('location:index.php?error=regfailed');
    // }
    
}
?>