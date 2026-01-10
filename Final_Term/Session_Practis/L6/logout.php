<?php
session_start();
session_unset();
session_destroy();

// optional: delete username cookie
setcookie("username", "", time() - 3600, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout</title>
  <style>body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}.card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08);max-width:600px;margin:0 auto}</style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Logged Out</h2>
    <p>You have logged out successfully.</p>
    <a href="login.php">Go to Login</a>
  </div>
</body>
</html>
