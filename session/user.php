<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'user') {
    header("Location: index.php");
    exit;
}

echo "<h1>Selamat datang, User " . $_SESSION['username'] . "!</h1>";
echo "<a href='logout.php'>Logout</a>";
?>