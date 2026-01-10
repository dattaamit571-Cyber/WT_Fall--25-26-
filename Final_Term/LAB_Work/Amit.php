<?php
session_start();

/* ---------- LOGOUT ---------- */
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_unset();
    session_destroy();
    setcookie("user_email", "", time() - 3600);
    header("Location: index.php");
    exit();
}

/* ---------- REGISTRATION ---------- */
$regError = "";
if (isset($_POST['register'])) {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass  = $_POST['password'];
    $cpass = $_POST['confirm_password'];

    if ($name == "" || $email == "" || $pass == "" || $cpass == "") {
        $regError = "All fields are required";
    } elseif ($pass != $cpass) {
        $regError = "Password does not match";
    } else {
        // Save data in session (beginner method)
        $_SESSION['reg_name']  = $name;
        $_SESSION['reg_email'] = $email;
        $_SESSION['reg_pass']  = $pass;
        $_SESSION['step'] = "login";
    }
}

/* ---------- LOGIN ---------- */
$loginError = "";
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass  = $_POST['password'];

    if (
        $email == ($_SESSION['reg_email'] ?? "") &&
        $pass  == ($_SESSION['reg_pass'] ?? "")
    ) {
        $_SESSION['username'] = $_SESSION['reg_name'];
        $_SESSION['login_time'] = date("h:i:s A");

        // COOKIE
        setcookie("user_email", $email, time() + 3600);

        $_SESSION['step'] = "dashboard";
    } else {
        $loginError = "Invalid email or password";
    }
}

/* ---------- PAGE CONTROL ---------- */
$page = $_SESSION['step'] ?? "register";
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Login System</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            text-align: center;
        }
        .box {
            background: white;
            width: 320px;
            margin: auto;
            padding: 20px;
            margin-top: 60px;
            border-radius: 6px;
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 5px;
        }
        button {
            padding: 8px 15px;
            background: #2575fc;
            color: white;
            border: none;
            cursor: pointer;
        }
        .error {
            color: red;
        }
    </style>
</head>

<body>

<!-- ---------- REGISTRATION PAGE ---------- -->
<?php if ($page == "register") { ?>
<div class="box">
    <h2>Register</h2>
    <form method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="confirm_password" placeholder="Confirm Password"><br><br>
        <button name="register">Register</button>
    </form>
    <p class="error"><?php echo $regError; ?></p>
</div>
<?php } ?>

<!-- ---------- LOGIN PAGE ---------- -->
<?php if ($page == "login") { ?>
<div class="box">
    <h2>Login</h2>
    <form method="post">
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button name="login">Login</button>
    </form>
    <p class="error"><?php echo $loginError; ?></p>
</div>
<?php } ?>

<!-- ---------- DASHBOARD ---------- -->
<?php if ($page == "dashboard" && isset($_SESSION['username'])) { ?>
<div class="box">
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <p>Login Time: <?php echo $_SESSION['login_time']; ?></p>
    <p>Email from Cookie:
        <?php echo $_COOKIE['user_email'] ?? "No cookie"; ?>
    </p>
    <a href="?action=logout">Logout</a>
</div>
<?php } ?>

</body>
</html>
