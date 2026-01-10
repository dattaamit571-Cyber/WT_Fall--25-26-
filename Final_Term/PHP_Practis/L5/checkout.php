<?php
session_start();

// Same products list here as well
$products = [
    1 => ["id" => 1, "name" => "Wireless Mouse", "price" => 550],
    2 => ["id" => 2, "name" => "Mechanical Keyboard", "price" => 2200],
    3 => ["id" => 3, "name" => "USB Flash Drive 64GB", "price" => 800],
    4 => ["id" => 4, "name" => "Headphone", "price" => 1800],
    5 => ["id" => 5, "name" => "Laptop Stand", "price" => 1200],
    6 => ["id" => 6, "name" => "Webcam HD", "price" => 1600]
];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

$errors = [];
$success = false;

$name = "";
$email = "";
$grandTotal = 0;

// Calculate summary
foreach ($_SESSION["cart"] as $pid => $qty) {
    if (isset($products[$pid])) {
        $grandTotal += $products[$pid]["price"] * $qty;
    }
}

// Handle place order
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["place_order"])) {
    $name = clean_input($_POST["name"] ?? "");
    $email = clean_input($_POST["email"] ?? "");

    if (empty($_SESSION["cart"])) {
        $errors[] = "Your cart is empty. Please add products before checkout.";
    }

    if ($name === "") {
        $errors[] = "Name is required.";
    }

    if ($email === "") {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($errors)) {
        $success = true;

        // Simulate order placed: clear cart
        $_SESSION["cart"] = [];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 900px; margin: 30px auto; background: white; padding: 20px; border-radius: 8px; }
        .nav a { margin-right: 15px; text-decoration: none; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background: #eee; }
        input { width: 100%; padding: 8px; margin: 8px 0; }
        button { width: 100%; padding: 10px; background: #007BFF; color: white; border: none; cursor: pointer; }
        .error { color: red; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>Checkout</h2>

    <div class="nav">
        <a href="index.php">Home</a>
        <a href="cart.php">Cart</a>
        <a href="checkout.php">Checkout</a>
    </div>

    <?php if ($success): ?>
        <p class="success">Order placed successfully! (Simulation)</p>
        <p><b>Customer:</b> <?php echo $name; ?></p>
        <p><b>Email:</b> <?php echo $email; ?></p>
        <p>Your cart has been cleared.</p>
        <a href="index.php">Back to Product List</a>

    <?php else: ?>

        <?php if (!empty($errors)): ?>
            <div class="error">
                <ul>
                    <?php foreach ($errors as $e): ?>
                        <li><?php echo $e; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <h3>Customer Information</h3>
        <form method="post" action="">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required>

            <label>Email</label>
            <input type="text" name="email" value="<?php echo $email; ?>" required>

            <button type="submit" name="place_order">Place Order</button>
        </form>

        <h3>Order Summary</h3>

        <?php if (empty($_SESSION["cart"])): ?>
            <p>Your cart is empty. <a href="index.php">Go to products</a>.</p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>

                <?php foreach ($_SESSION["cart"] as $pid => $qty): ?>
                    <?php if (!isset($products[$pid])) continue; ?>
                    <?php $total = $products[$pid]["price"] * $qty; ?>
                    <tr>
                        <td><?php echo $products[$pid]["name"]; ?></td>
                        <td>৳<?php echo $products[$pid]["price"]; ?></td>
                        <td><?php echo $qty; ?></td>
                        <td>৳<?php echo $total; ?></td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <th colspan="3" style="text-align:right;">Grand Total</th>
                    <th>৳<?php echo $grandTotal; ?></th>
                </tr>
            </table>
        <?php endif; ?>

    <?php endif; ?>

</div>

</body>
</html>
