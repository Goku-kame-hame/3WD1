<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$credentials = [
    'admin' => ['username' => 'admin', 'password' => 'admin123'],
    'user' => ['username' => 'user', 'password' => 'user123'],
    'superadmin' => ['username' => 'superadmin', 'password' => 'super123'],
];

if (isset($credentials[$role])) {
    if ($username === $credentials[$role]['username'] && $password === $credentials[$role]['password']) {
        // Login berhasil
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        switch ($role) {
            case 'admin':
                header("Location: admin.php");
                exit;
            case 'user':
                header("Location: user.php");
                exit;
            case 'superadmin':
                header("Location: superadmin.php");
                exit;
        }
    } else {

        echo "Username atau password salah!";
    }
} else {
    echo "Role tidak valid!";
}
?>