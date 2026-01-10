<?php
require_once "tracker.php";

// Clear History button
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['clear_history'])) {
    // delete cookies
    setcookie('total_visits', '', time() - 3600, "/");
    setcookie('visitor_id', '', time() - 3600, "/");
    setcookie('first_visit', '', time() - 3600, "/");
    setcookie('last_visit', '', time() - 3600, "/");
    setcookie('visit_history', '', time() - 3600, "/");

    // clear session tracking
    $_SESSION = [];
    session_destroy();

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analytics Dashboard</title>
  <style>
    body{font-family:Arial,sans-serif;background:#f5f6fa;padding:24px;}
    .card{background:#fff;padding:16px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08);margin-bottom:14px;}
    ul{margin:8px 0 0 18px;}
    table{width:100%;border-collapse:collapse;}
    th,td{padding:10px;border-bottom:1px solid #eee;text-align:left;}
    th{background:#0b1a2b;color:#fff;}
  </style>
</head>
<body>
  <?php require "header.php"; ?>

  <div class="card">
    <h2 style="margin:0 0 10px;">Visitor Summary</h2>
    <p><b>Total visits (cookie):</b> <?php echo (int)($_COOKIE['total_visits'] ?? 0); ?></p>
    <p><b>Current session duration:</b> <?php echo $sessionDuration; ?> seconds</p>
    <p><b>Pages visited in this session:</b></p>
    <ul>
      <?php foreach ($pagesThisSession as $p): ?>
        <li><?php echo htmlspecialchars($p); ?></li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="card">
    <h3 style="margin:0 0 10px;">Visitor Statistics</h3>
    <p><b>First visit date:</b>
      <?php echo $firstVisitTs ? date("Y-m-d H:i:s", $firstVisitTs) : "N/A"; ?>
    </p>
    <p><b>Last visit date:</b>
      <?php echo $lastVisitTs ? date("Y-m-d H:i:s", $lastVisitTs) : "N/A"; ?>
    </p>
    <p><b>Visits in last 24 hours (from last-5 cookie array):</b> <?php echo $visitsLast24h; ?></p>
  </div>

  <div class="card">
    <h3 style="margin:0 0 10px;">Last 5 Visits</h3>
    <table>
      <tr><th>#</th><th>Page</th><th>Timestamp</th></tr>
      <?php foreach ($visitHistory as $i => $h): ?>
        <tr>
          <td><?php echo $i + 1; ?></td>
          <td><?php echo htmlspecialchars($h['page']); ?></td>
          <td><?php echo date("Y-m-d H:i:s", (int)$h['time']); ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
    <p style="margin:10px 0 0;color:#555;font-size:13px;">
      Note: last-24-hours count is limited to the last 5 stored visits (as required).
    </p>
  </div>
</body>
</html>
