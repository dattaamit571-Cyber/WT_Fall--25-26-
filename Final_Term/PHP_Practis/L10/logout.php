<?php
session_start();

// Destroy session
session_unset();
session_destroy();

// Remove cookie if exists
if (isset($_COOKIE["remember_user"])) {
    setcookie("remember_user", "", time() - 3600, "/");
}

// Redirect to login
header("Location: login.php");
exit();
