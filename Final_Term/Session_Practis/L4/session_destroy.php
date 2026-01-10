<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Destroy</title>
  <style>body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}.card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08)}</style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Logged Out</h2>
    <p>Session has been destroyed successfully.</p>
    <a href="session_start.php">Go back</a>
  </div>
</body>
</html>
