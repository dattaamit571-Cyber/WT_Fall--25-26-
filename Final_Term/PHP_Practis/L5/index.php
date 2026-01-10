<?php
session_start();

/*
    Product data (id, name, price, image)
    Images are simple placeholders using online links (no extra folder needed)
*/
$products = [
    1 => ["id" => 1, "name" => "Wireless Mouse", "price" => 550, "image" => "https://via.placeholder.com/120?text=Mouse"],
    2 => ["id" => 2, "name" => "Mechanical Keyboard", "price" => 2200, "image" => "https://via.placeholder.com/120?text=Keyboard"],
    3 => ["id" => 3, "name" => "USB Flash Drive 64GB", "price" => 800, "image" => "https://via.placeholder.com/120?text=USB+64GB"],
    4 => ["id" => 4, "name" => "Headphone", "price" => 1800, "image" => "https://via.placeholder.com/120?text=Headphone"],
    5 => ["id" => 5, "name" => "Laptop Stand", "price" => 1200, "image" => "https://via.placeholder.com/120?text=Stand"],
    6 => ["id" => 6, "name" => "Webcam HD", "price" => 1600, "image" => "https://via.placeholder.com/120?text=Webcam"]
];

// Create cart session if not exists
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = []; // cart format: [product_id => quantity]
}

// Handle add-to-cart (POST)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["add_to_cart"])) {
    $productId = (int)$_POST["product_id"];

    if (isset($products[$productId])) {
        if (isset($_SESSION["cart"][$productId])) {
            $_SESSION["cart"][$productId] += 1;
        } else {
            $_SESSION["cart"][$productId] = 1;
        }
    }
    header("Location: index.php");
    exit();
}

// Cart item count
$cartCount = array_sum($_SESSION["cart"]);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { width: 900px; margin: 30px auto; }
        .topbar { background: white; padding: 15px; border-radius: 8px; margin-bottom: 15px; }
        .topbar a { text-decoration: none; margin-right: 15px; }
        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; }
        .card { background: white; padding: 15px; border-radius: 8px; }
        .card img { display: block; margin-bottom: 10px; }
        button { padding: 10px; width: 100%; border: none; background: #007BFF; color: white; cursor: pointer; }
        .price { font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <div class="topbar">
        <h2 style="margin:0;">Product Catalog</h2>
        <p style="margin:8px 0;">
            <a href="index.php">Home</a>
            <a href="cart.php">View Cart (<?php echo $cartCount; ?>)</a>
        </p>
    </div>

    <div class="grid">
        <?php foreach ($products as $p): ?>
            <div class="card">
                <img src="<?php echo $p["image"]; ?>" alt="product">
                <h3><?php echo $p["name"]; ?></h3>
                <p class="price">Price: ৳<?php echo $p["price"]; ?></p>

                <form method="post" action="">
                    <input type="hidden" name="product_id" value="<?php echo $p["id"]; ?>">
                    <button type="submit" name="add_to_cart">Add to Cart</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
