<?php
require_once "auth.php";
require_login();

$username = $_SESSION['username'];
$login_time = $_SESSION['login_time'];
$user_role = $_SESSION['user_role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f5f6fa; padding: 30px; }
    .card { max-width: 700px; margin: 0 auto; background:#fff; padding: 20px; border-radius: 10px; box-shadow: 0 8px 22px rgba(0,0,0,.08); }
    a.btn { display:inline-block; padding:10px 14px; background:#2d6cdf; color:#fff; border-radius: 8px; text-decoration:none; margin-right: 8px; }
    a.btn.secondary { background:#444; }
    .info { background:#f1f5ff; padding:12px; border-radius: 10px; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Dashboard</h2>

    <p><b>Welcome, <?php echo htmlspecialchars($username); ?>!</b></p>

    <div class="info">
      <p><b>Role:</b> <?php echo htmlspecialchars($user_role); ?></p>
      <p><b>Login time:</b> <?php echo htmlspecialchars($login_time); ?></p>
    </div>

    <p style="margin-top:16px;">
      <a class="btn" href="profile.php">Go to Profile</a>
      <a class="btn secondary" href="logout.php">Logout</a>
    </p>
  </div>
</body>
</html>
