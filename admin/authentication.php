<?php
session_start();

if(!isset($_SESSION['auth'])){
    $_SESSION['message'] = 'Login to Access Dashboard';
    header("Location: ../login.php");
    exit(0);
}else{
    if($_SESSION['auth_role'] != "1"){
        $_SESSION['message'] = 'You are not Authorized as ADMIN';
        header("Location: ../login.php");
        exit(0);
    }
}

?>