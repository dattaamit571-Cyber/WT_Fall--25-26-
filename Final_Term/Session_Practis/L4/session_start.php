<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "AMIT DATTA DIP"; // sample name (you can change)
}

if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}

$_SESSION['visits']++; // increment each reload
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Start</title>
  <style>body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}.card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08)}</style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Session Started</h2>
    <p><b>Welcome,</b> <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p><b>Number of visits this session:</b> <?php echo (int)$_SESSION['visits']; ?></p>
    <a href="session_destroy.php">End Session (Logout)</a>
  </div>
</body>
</html>
