<?php
session_start();

// Redirect logic: logged-in users accessing login page → dashboard
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

$error = "";
$success = "";

if (isset($_GET['msg']) && $_GET['msg'] === 'logged_out') {
    $success = "You have been logged out successfully.";
}
if (isset($_GET['msg']) && $_GET['msg'] === 'please_login') {
    $error = "Please login to continue.";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Hardcoded credentials for testing
    $validUser = "admin";
    $validPass = "admin123";

    if ($username === $validUser && $password === $validPass) {
        // Session initialization after successful login
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = date("Y-m-d H:i:s");
        $_SESSION['user_role'] = "Admin";

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f5f6fa; padding: 30px; }
    .card { max-width: 420px; margin: 0 auto; background:#fff; padding: 20px; border-radius: 10px; box-shadow: 0 8px 22px rgba(0,0,0,.08); }
    .row { margin-bottom: 12px; }
    label { display:block; margin-bottom: 6px; }
    input { width:100%; padding:10px; border:1px solid #ddd; border-radius: 8px; }
    button { width:100%; padding:10px; border:0; border-radius: 8px; background:#2d6cdf; color:#fff; font-weight:600; cursor:pointer; }
    .msg { margin-bottom: 12px; padding: 10px; border-radius: 8px; }
    .err { background:#ffe5e5; color:#a40000; }
    .ok  { background:#e7fff0; color:#0a6b2e; }
    .hint { margin-top: 10px; font-size: 14px; color:#555; }
  </style>
</head>
<body>
  <div class="card">
    <h2>Member Portal Login</h2>

    <?php if (!empty($error)): ?>
      <div class="msg err"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
      <div class="msg ok"><?php echo htmlspecialchars($success); ?></div>
    <?php endif; ?>

    <form method="POST" action="login.php">
      <div class="row">
        <label>Username</label>
        <input type="text" name="username" required />
      </div>

      <div class="row">
        <label>Password</label>
        <input type="password" name="password" required />
      </div>

      <button type="submit">Login</button>
    </form>

    <div class="hint">
      Test credentials: <b>admin</b> / <b>admin123</b>
    </div>
  </div>
</body>
</html>
