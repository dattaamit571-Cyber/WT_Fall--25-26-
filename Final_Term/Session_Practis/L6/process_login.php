<?php
session_start();

$username = trim($_POST['username'] ?? '');
$password = trim($_POST['password'] ?? '');
$remember = isset($_POST['remember']);

$validUser = "student";
$validPass = "aiub123";

if ($username === $validUser && $password === $validPass) {
    $_SESSION['username'] = $username;

    if ($remember) {
        setcookie("username", $username, time() + 7 * 24 * 60 * 60, "/"); // 1 week
    }

    header("Location: dashboard.php");
    exit();
} else {
    echo "<h3>Invalid username or password.</h3>";
    echo '<a href="login.php">Back to Login</a>';
}
