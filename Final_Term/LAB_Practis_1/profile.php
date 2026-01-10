<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="box">
    <h2>User Profile</h2>
    <p>Username: <?php echo $_SESSION['username']; ?></p>
    <p>Role: <?php echo $_SESSION['role']; ?></p>

    <a href="dashboard.php">Back</a>
</div>
