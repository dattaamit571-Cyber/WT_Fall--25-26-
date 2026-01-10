<?php
$prefill = $_COOKIE['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}
    .card{max-width:420px;margin:0 auto;background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08)}
    input{width:100%;padding:10px;border:1px solid #ddd;border-radius:10px;margin:8px 0}
    button{width:100%;padding:10px;border:0;border-radius:10px;background:#2d6cdf;color:#fff;font-weight:700;cursor:pointer}
  </style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Login</h2>

    <form method="POST" action="process_login.php">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo htmlspecialchars($prefill); ?>" required>

      <label>Password</label>
      <input type="password" name="password" required>

      <label style="display:flex;gap:8px;align-items:center;margin:10px 0;">
        <input type="checkbox" name="remember" value="1" style="width:auto;margin:0;">
        Remember Me
      </label>

      <button type="submit">Login</button>
    </form>

    <p style="margin-top:10px;color:#555;font-size:13px;">
      Test: <b>student</b> / <b>aiub123</b>
    </p>
  </div>
</body>
</html>
