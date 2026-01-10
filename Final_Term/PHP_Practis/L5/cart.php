<?php
session_start();

// Same product list must exist here too (no database used)
$products = [
    1 => ["id" => 1, "name" => "Wireless Mouse", "price" => 550, "image" => "https://via.placeholder.com/80?text=Mouse"],
    2 => ["id" => 2, "name" => "Mechanical Keyboard", "price" => 2200, "image" => "https://via.placeholder.com/80?text=Keyboard"],
    3 => ["id" => 3, "name" => "USB Flash Drive 64GB", "price" => 800, "image" => "https://via.placeholder.com/80?text=USB+64GB"],
    4 => ["id" => 4, "name" => "Headphone", "price" => 1800, "image" => "https://via.placeholder.com/80?text=Headphone"],
    5 => ["id" => 5, "name" => "Laptop Stand", "price" => 1200, "image" => "https://via.placeholder.com/80?text=Stand"],
    6 => ["id" => 6, "name" => "Webcam HD", "price" => 1600, "image" => "https://via.placeholder.com/80?text=Webcam"]
];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// Update quantity
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["update_qty"])) {
    $pid = (int)$_POST["product_id"];
    $qty = (int)$_POST["quantity"];

    if ($qty <= 0) {
        unset($_SESSION["cart"][$pid]);
    } else {
        $_SESSION["cart"][$pid] = $qty;
    }
    header("Location: cart.php");
    exit();
}

// Remove item
if (isset($_GET["remove"])) {
    $pid = (int)$_GET["remove"];
    unset($_SESSION["cart"][$pid]);
    header("Location: cart.php");
    exit();
}

$grandTotal = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 900px; margin: 30px auto; background: white; padding: 20px; border-radius: 8px; }
        .nav a { margin-right: 15px; text-decoration: none; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background: #eee; }
        .btn { display:inline-block; padding:10px 14px; text-decoration:none; border-radius:4px; color:white; }
        .blue { background:#007BFF; }
        .green { background:#28a745; }
        .red { background:#dc3545; }
        input[type=number] { width: 70px; padding: 6px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Shopping Cart</h2>

    <div class="nav">
        <a href="index.php">Home</a>
        <a href="cart.php">Cart</a>
        <a href="checkout.php">Checkout</a>
    </div>

    <?php if (empty($_SESSION["cart"])): ?>
        <p>Your cart is empty. <a href="index.php">Go back to products</a>.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>

            <?php foreach ($_SESSION["cart"] as $pid => $qty): ?>
                <?php
                    if (!isset($products[$pid])) continue;

                    $price = $products[$pid]["price"];
                    $total = $price * $qty;
                    $grandTotal += $total;
                ?>
                <tr>
                    <td>
                        <img src="<?php echo $products[$pid]["image"]; ?>" alt="img">
                        <br>
                        <?php echo $products[$pid]["name"]; ?>
                    </td>
                    <td>৳<?php echo $price; ?></td>
                    <td>
                        <form method="post" action="">
                            <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
                            <input type="number" name="quantity" value="<?php echo $qty; ?>" min="0">
                            <button type="submit" name="update_qty" class="btn blue" style="border:none; cursor:pointer;">Update</button>
                        </form>
                    </td>
                    <td>৳<?php echo $total; ?></td>
                    <td>
                        <a class="btn red" href="cart.php?remove=<?php echo $pid; ?>" onclick="return confirm('Remove this item?');">Remove</a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <th colspan="3" style="text-align:right;">Grand Total</th>
                <th colspan="2">৳<?php echo $grandTotal; ?></th>
            </tr>
        </table>

        <p style="margin-top: 15px;">
            <a class="btn green" href="checkout.php">Proceed to Checkout</a>
        </p>
    <?php endif; ?>

</div>

</body>
</html>
