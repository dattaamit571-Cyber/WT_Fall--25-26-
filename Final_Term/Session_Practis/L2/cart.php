<?php
// cart.php
require_once "header.php";

$cart = $_SESSION['cart'] ?? [];
$grandTotal = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f5f6fa; padding: 24px; }
    table { width:100%; border-collapse: collapse; background:#fff; border-radius:12px; overflow:hidden; box-shadow:0 8px 22px rgba(0,0,0,.08); }
    th, td { padding:12px; border-bottom:1px solid #eee; text-align:left; }
    th { background:#0b1a2b; color:#fff; }
    .actions { display:flex; gap:10px; align-items:center; }
    .btn { display:inline-block; padding:10px 12px; border-radius:10px; text-decoration:none; font-weight:700; }
    .btn-primary { background:#2d6cdf; color:#fff; border:0; cursor:pointer; }
    .btn-danger { background:#c0392b; color:#fff; }
    .btn-dark { background:#444; color:#fff; }
    input.qty { width:80px; padding:8px; border:1px solid #ddd; border-radius:10px; }
    .summary { margin-top:14px; max-width:420px; background:#fff; padding:14px; border-radius:12px; box-shadow:0 8px 22px rgba(0,0,0,.08); }
  </style>
</head>
<body>
  <?php /* header already printed */ ?>

  <h2 style="margin:0 0 14px;">Your Cart</h2>

  <?php if (empty($cart)): ?>
    <div style="background:#fff;padding:14px;border-radius:12px;box-shadow:0 8px 22px rgba(0,0,0,.08);">
      Cart is empty.
      <div style="margin-top:12px;">
        <a class="btn btn-primary" href="products.php">Continue Shopping</a>
      </div>
    </div>
  <?php else: ?>

    <table>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Subtotal</th>
        <th>Remove</th>
      </tr>

      <?php foreach ($cart as $id => $item): ?>
        <?php
          $price = (float)$item['price'];
          $qty = (int)$item['quantity'];
          $subtotal = $price * $qty;
          $grandTotal += $subtotal;
        ?>
        <tr>
          <td><?php echo htmlspecialchars($item['product_name']); ?></td>
          <td>৳ <?php echo number_format($price, 2); ?></td>

          <td>
            <form method="POST" action="cart_actions.php" class="actions">
              <input type="hidden" name="action" value="update">
              <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($id); ?>">
              <input class="qty" type="number" name="quantity" min="0" value="<?php echo $qty; ?>" required>
              <button class="btn btn-primary" type="submit">Update</button>
            </form>
            <div style="font-size:12px;color:#555;margin-top:6px;">Set 0 to remove</div>
          </td>

          <td>৳ <?php echo number_format($subtotal, 2); ?></td>

          <td>
            <a class="btn btn-danger" href="cart_actions.php?action=remove&product_id=<?php echo urlencode($id); ?>">
              Remove
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>

    <div class="summary">
      <div style="display:flex;justify-content:space-between;font-weight:800;">
        <span>Grand Total</span>
        <span>৳ <?php echo number_format($grandTotal, 2); ?></span>
      </div>

      <div style="margin-top:12px;display:flex;gap:10px;flex-wrap:wrap;">
        <a class="btn btn-dark" href="products.php">Continue Shopping</a>

        <form method="POST" action="cart_actions.php" style="margin:0;">
          <input type="hidden" name="action" value="empty">
          <button class="btn btn-danger" type="submit">Empty Cart</button>
        </form>
      </div>
    </div>

  <?php endif; ?>
</body>
</html>
