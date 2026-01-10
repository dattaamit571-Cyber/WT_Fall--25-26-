<?php
session_start();

// Hardcoded credentials
$validUser = "admin";
$validPass = "12345";

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $validUser && $password === $validPass) {

        // Store in session
        $_SESSION["username"] = $username;

        // If Remember Me checked → store cookie
        if (isset($_POST["remember_me"])) {
            setcookie("remember_user", $username, time() + (7 * 24 * 60 * 60), "/"); // 7 days
        }

        header("Location: dashboard.php");
        exit();

    } else {
        echo "<h2>Login Failed</h2>";
        echo "<p>Invalid username or password.</p>";
        echo "<a href='login.php'>Back to Login</a>";
    }

} else {
    header("Location: login.php");
    exit();
}
