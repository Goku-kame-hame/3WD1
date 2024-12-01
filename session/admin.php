<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit;
}

echo "<h1>Selamat datang, Admin " . $_SESSION['username'] . "!</h1>";
echo "<a href='logout.php'>Logout</a>";
?>