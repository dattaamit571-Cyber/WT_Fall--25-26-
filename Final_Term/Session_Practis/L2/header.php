<?php
// header.php
session_start();

$cart = $_SESSION['cart'] ?? [];
$itemCount = 0;
foreach ($cart as $item) {
    $itemCount += (int)($item['quantity'] ?? 0);
}
?>
<div style="background:#0b1a2b;color:#fff;padding:12px 16px;border-radius:10px;margin-bottom:18px;display:flex;justify-content:space-between;align-items:center;">
  <div style="font-weight:700;">Electronics Store</div>
  <div style="display:flex;gap:12px;align-items:center;">
    <a href="products.php" style="color:#fff;text-decoration:none;">Products</a>
    <a href="cart.php" style="color:#fff;text-decoration:none;">
      Cart (<b><?php echo $itemCount; ?></b>)
    </a>
  </div>
</div>
