<?php
session_start();

// If already logged in, go to dashboard
if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

// Prefill username from cookie if exists
$rememberedUser = $_COOKIE["remember_user"] ?? "";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box { width:400px; margin:60px auto; background:white; padding:20px; border-radius:8px; }
        label { display:block; margin-top:10px; }
        input { width:100%; padding:8px; margin-top:5px; }
        button { margin-top:15px; padding:10px; width:100%; background:#007BFF; color:white; border:none; }
    </style>
</head>
<body>

<div class="box">
    <h2>User Login</h2>

    <form method="post" action="process_login.php">

        <label>Username</label>
        <input type="text" name="username" value="<?php echo htmlspecialchars($rememberedUser); ?>" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>
            <input type="checkbox" name="remember_me"> Remember Me
        </label>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
