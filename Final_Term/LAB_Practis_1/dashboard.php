<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="box">
    <h2>Dashboard</h2>
    <p>Welcome, <b><?php echo $_SESSION['username']; ?></b></p>
    <p>Role: <?php echo $_SESSION['role']; ?></p>
    <p>Login Time: <?php echo $_SESSION['login_time']; ?></p>

    <a href="profile.php">Profile</a> |
    <a href="logout.php">Logout</a>
</div>
