<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['username'];
$hasCookie = isset($_COOKIE['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}.card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08);max-width:600px;margin:0 auto}</style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Dashboard</h2>
    <p>Welcome, <b><?php echo htmlspecialchars($user); ?></b></p>

    <p>
      Remember-me cookie:
      <?php echo $hasCookie ? "<b>Found</b> (username saved)" : "<b>Not found</b>"; ?>
    </p>

    <a href="logout.php">Logout</a>
  </div>
</body>
</html>
