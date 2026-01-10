<?php
// Initialize variables
$name = $email = $password = $confirmPassword = "";
$errors = [];
$success = false;

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirmPassword = $_POST["confirm_password"] ?? "";

    // Validation
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if (empty($confirmPassword)) {
        $errors[] = "Confirm Password is required";
    }

    if (!empty($password) && $password !== $confirmPassword) {
        $errors[] = "Passwords do not match";
    }

    if (empty($errors)) {
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>

    <!-- CSS INCLUDED IN SAME FILE -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        input {
            width: 250px;
            padding: 6px;
        }
        .error {
            color: red;
            background: #ffe6e6;
            padding: 10px;
            margin-bottom: 15px;
        }
        .success {
            color: green;
            background: #e6ffe6;
            padding: 10px;
        }
    </style>
</head>

<body>

<h2>User Registration Form</h2>

<?php if (!empty($errors)): ?>
    <div class="error">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($success): ?>
    <div class="success">
        <h3>Registration Successful!</h3>
        <p><strong>Name:</strong> <?= $name ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
    </div>
<?php else: ?>

<form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?= $name ?>"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?= $email ?>"><br><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="confirm_password"><br><br>

    <input type="submit" value="Register">
</form>

<?php endif; ?>

</body>
</html>