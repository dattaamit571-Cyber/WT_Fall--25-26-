<?php
// auth.php
session_start();

function require_login() {
    if (!isset($_SESSION['username']) || !isset($_SESSION['login_time']) || !isset($_SESSION['user_role'])) {
        header("Location: login.php?msg=please_login");
        exit();
    }
}
