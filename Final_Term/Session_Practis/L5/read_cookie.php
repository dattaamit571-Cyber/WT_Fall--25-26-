<?php
$theme = $_COOKIE['user_theme'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read Cookie</title>
  <style>body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}.card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08)}</style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Theme Status</h2>

    <?php if ($theme): ?>
      <p>Hello! Your preferred theme is <b><?php echo htmlspecialchars($theme); ?></b>.</p>
    <?php else: ?>
      <p>No theme selected. Please choose your preferred theme.</p>
      <a href="set_cookie.php">Go to theme selection</a>
    <?php endif; ?>

    <div style="margin-top:12px;">
      <a href="delete_cookie.php">Delete Theme Cookie</a>
    </div>
  </div>
</body>
</html>
