<?php
session_start();

if ($_SESSION['login'] == true){
    header('Location: /session/member.php');
    exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if ($_POST['username'] == 'eko' && $_POST['password'] = 'eko'){
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = 'eko';
        header('Location: /session/member.php');
        exit();
    } else {
        $error = "Login Gagal";
    }
}

?>