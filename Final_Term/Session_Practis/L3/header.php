<?php
// header.php
?>
<div style="background:#0b1a2b;color:#fff;padding:12px 16px;border-radius:10px;margin-bottom:16px;display:flex;justify-content:space-between;align-items:center;">
  <div style="font-weight:700;">Blog Analytics Tracker</div>

  <div style="display:flex;gap:12px;align-items:center;">
    <a href="index.php" style="color:#fff;text-decoration:none;">Home</a>
    <a href="about.php" style="color:#fff;text-decoration:none;">About</a>
    <a href="services.php" style="color:#fff;text-decoration:none;">Services</a>
    <a href="contact.php" style="color:#fff;text-decoration:none;">Contact</a>

    <form method="post" action="index.php" style="margin:0;">
      <button type="submit" name="clear_history" value="1"
        style="border:0;border-radius:8px;padding:8px 10px;font-weight:700;cursor:pointer;background:#c0392b;color:#fff;">
        Clear History
      </button>
    </form>
  </div>
</div>
