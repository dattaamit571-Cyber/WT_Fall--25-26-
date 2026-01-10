<?php
setcookie("user_theme", "", time() - 3600, "/"); // expire in past
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Cookie</title>
  <style>body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}.card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08)}</style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Cookie Deleted</h2>
    <p>Cookie has been deleted successfully.</p>
    <a href="set_cookie.php">Set a new cookie</a>
  </div>
</body>
</html>
