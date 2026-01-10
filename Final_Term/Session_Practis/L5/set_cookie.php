<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $theme = $_POST['theme'] ?? '';
    if ($theme === 'Light' || $theme === 'Dark') {
        setcookie("user_theme", $theme, time() + 7 * 24 * 60 * 60, "/"); // 1 week
        header("Location: read_cookie.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Set Cookie</title>
  <style>body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px}.card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08)}select,button{padding:10px;border-radius:10px;border:1px solid #ddd}button{border:0;background:#2d6cdf;color:#fff;font-weight:700;cursor:pointer}</style>
</head>
<body>
  <div class="card">
    <h2 style="margin:0 0 10px;">Choose Theme</h2>
    <form method="POST">
      <label>Preferred Theme:</label><br><br>
      <select name="theme" required>
        <option value="">Select</option>
        <option value="Light">Light</option>
        <option value="Dark">Dark</option>
      </select>
      <button type="submit">Save Theme</button>
    </form>
  </div>
</body>
</html>
