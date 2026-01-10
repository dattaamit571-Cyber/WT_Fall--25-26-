<?php
require_once "auth.php";
require_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f5f6fa; padding: 30px; }
    .card { max-width: 700px; margin: 0 auto; background:#fff; padding: 20px; border-radius: 10px; box-shadow: 0 8px 22px rgba(0,0,0,.08); }
    a.btn { display:inline-block; padding:10px 14px; background:#2d6cdf; color:#fff; border-radius: 8px; text-decoration:none; margin-right: 8px; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Profile</h2>

    <p><b>Username:</b> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
    <p><b>Role:</b> <?php echo htmlspecialchars($_SESSION['user_role']); ?></p>
    <p><b>Login time:</b> <?php echo htmlspecialchars($_SESSION['login_time']); ?></p>

    <p style="margin-top:16px;">
      <a class="btn" href="dashboard.php">Back to Dashboard</a>
      <a class="btn" href="logout.php" style="background:#444;">Logout</a>
    </p>
  </div>
</body>
</html>
