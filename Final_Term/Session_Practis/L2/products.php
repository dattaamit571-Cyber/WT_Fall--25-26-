<?php
// products.php
require_once "header.php";

// at least 5 products
$products = [
    ['id' => 'P101', 'name' => 'Wireless Mouse',     'price' => 650,  'img' => 'https://via.placeholder.com/160?text=Mouse'],
    ['id' => 'P102', 'name' => 'Mechanical Keyboard','price' => 3200, 'img' => 'https://via.placeholder.com/160?text=Keyboard'],
    ['id' => 'P103', 'name' => 'Bluetooth Speaker',  'price' => 2100, 'img' => 'https://via.placeholder.com/160?text=Speaker'],
    ['id' => 'P104', 'name' => 'USB-C Hub',          'price' => 1450, 'img' => 'https://via.placeholder.com/160?text=USB-C+Hub'],
    ['id' => 'P105', 'name' => 'Gaming Headset',     'price' => 2800, 'img' => 'https://via.placeholder.com/160?text=Headset'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products</title>
  <style>
    body { font-family: Arial, sans-serif; background:#f5f6fa; padding: 24px; }
    .grid { display:grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap:16px; }
    .card { background:#fff; border-radius:12px; padding:14px; box-shadow:0 8px 22px rgba(0,0,0,.08); }
    img { width:100%; border-radius:10px; }
    .name { font-weight:700; margin:10px 0 6px; }
    .price { color:#1b4; font-weight:700; margin-bottom:10px; }
    button { width:100%; padding:10px; border:0; border-radius:10px; background:#2d6cdf; color:#fff; font-weight:700; cursor:pointer; }
    input { width:100%; padding:10px; border:1px solid #ddd; border-radius:10px; margin-bottom:10px; }
  </style>
</head>
<body>
  <?php /* header already printed */ ?>

  <h2 style="margin:0 0 14px;">Products</h2>

  <div class="grid">
    <?php foreach ($products as $p): ?>
      <div class="card">
        <img src="<?php echo htmlspecialchars($p['img']); ?>" alt="">
        <div class="name"><?php echo htmlspecialchars($p['name']); ?></div>
        <div class="price">৳ <?php echo number_format($p['price'], 2); ?></div>

        <form method="POST" action="cart_actions.php">
          <input type="hidden" name="action" value="add">
          <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($p['id']); ?>">
          <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($p['name']); ?>">
          <input type="hidden" name="price" value="<?php echo htmlspecialchars($p['price']); ?>">

          <label style="font-size:13px;color:#333;">Quantity</label>
          <input type="number" name="quantity" value="1" min="1" required>

          <button type="submit">Add to Cart</button>
        </form>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
