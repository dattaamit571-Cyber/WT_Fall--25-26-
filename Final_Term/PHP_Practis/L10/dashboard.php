<?php
session_start();

// Check login
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
$sessionId = session_id();
$cookieValue = $_COOKIE["remember_user"] ?? null;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box { width:600px; margin:50px auto; background:white; padding:20px; border-radius:8px; }
        .info { background:#eef; padding:10px; border-radius:6px; }
        a { text-decoration:none; color:#007BFF; }
    </style>
</head>
<body>

<div class="box">
    <h2>Dashboard</h2>

    <p><b>Welcome, <?php echo htmlspecialchars($username); ?>!</b></p>

    <div class="info">
        <p><b>Session Username:</b> <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
        <p><b>Session ID:</b> <?php echo $sessionId; ?></p>

        <?php if ($cookieValue !== null): ?>
            <p><b>Cookie is set.</b></p>
            <p><b>Cookie Value:</b> <?php echo htmlspecialchars($cookieValue); ?></p>
        <?php else: ?>
            <p><b>Cookie is NOT set.</b></p>
        <?php endif; ?>
    </div>

    <p>
        <a href="logout.php">Logout</a>
    </p>
</div>

</body>
</html>
