<?php
// cart_actions.php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = []; // cart keyed by product_id
}

// helper: safe int
function to_int($v, $default = 0) {
    if (!isset($v)) return $default;
    if (!is_numeric($v)) return $default;
    return (int)$v;
}

// ---------- ADD TO CART ----------
if (isset($_POST['action']) && $_POST['action'] === 'add') {
    $id = trim($_POST['product_id'] ?? '');
    $name = trim($_POST['product_name'] ?? '');
    $price = (float)($_POST['price'] ?? 0);
    $qty = to_int($_POST['quantity'] ?? 1, 1);

    if ($id !== '' && $name !== '' && $price > 0) {
        if (isset($_SESSION['cart'][$id])) {
            // duplicate item → increase quantity
            $_SESSION['cart'][$id]['quantity'] += max(1, $qty);
        } else {
            $_SESSION['cart'][$id] = [
                'product_id' => $id,
                'product_name' => $name,
                'price' => $price,
                'quantity' => max(1, $qty),
            ];
        }
    }

    header("Location: products.php");
    exit();
}

// ---------- UPDATE QUANTITY ----------
if (isset($_POST['action']) && $_POST['action'] === 'update') {
    $id = trim($_POST['product_id'] ?? '');
    $qty = to_int($_POST['quantity'] ?? 1, 1);

    if ($id !== '' && isset($_SESSION['cart'][$id])) {
        if ($qty <= 0) {
            // qty 0 or negative → remove item
            unset($_SESSION['cart'][$id]);
        } else {
            $_SESSION['cart'][$id]['quantity'] = $qty;
        }
    }

    header("Location: cart.php");
    exit();
}

// ---------- REMOVE ITEM ----------
if (isset($_GET['action']) && $_GET['action'] === 'remove') {
    $id = trim($_GET['product_id'] ?? '');
    if ($id !== '' && isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
    header("Location: cart.php");
    exit();
}

// ---------- EMPTY CART ----------
if (isset($_POST['action']) && $_POST['action'] === 'empty') {
    $_SESSION['cart'] = [];
    header("Location: cart.php");
    exit();
}
