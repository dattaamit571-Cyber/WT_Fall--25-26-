<?php
session_start();

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "quiz_app"; 

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);


if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST')
 {
   
    $name = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';
    $role = mysqli_real_escape_string($conn, $_POST['role'] ?? '');

   
    if ($name && $email && $password && $confirmPassword && $role && $password === $confirmPassword) 
         
    {
        
        $checkQuery = "SELECT * FROM users WHERE email = '$email'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) 
        
        {
            $error = "Email already exists!";
        } 
        else 
        {
          
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
           
            $sql = "INSERT INTO users (username, email, password, role) VALUES ('$name', '$email', '$hashedPassword', '$role')";
            if (mysqli_query($conn, $sql)) 
            {
                $successMessage = "Registration Successful";
            } else 
            {
                $error = "Registration failed.  try again.";
            }
        }
    } 
    else 
            {
        $error = "Please fill  all fields correctly.";
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - QuizMaster</title>

    
    <link rel="stylesheet" href="css/style.css">
    <style>
          /* Styles */

        .popup-success
        
        {
        display: <?php echo $successMessage ? 'flex' : 'none'; ?>;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: 999;
        }
             .popup-box
         {
            background-color: #fff;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px #333;
            text-align: center;
        }

        .popup-box h2 
        {
            color: green;
        }

        .error-message
         {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
<?php if (!empty($successMessage)): ?>
    
    <div class="popup-success">
        <div class="popup-box">
            <h2><?php echo $successMessage; ?></h2>
            <p><a href="login.php">Click here to login</a></p>
        </div>
    </div>

<?php endif; ?>
<div class="register-container">
    <h1>Create Your Account</h1>

    <?php if (!empty($error)): ?>
       
        <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
    <?php endif; ?>

    <div class="error-box" id="errorBox"></div>

    <form id="registerForm" action="" method="POST" onsubmit="return validateForm();">
        
    <div class="form-group">
            <label for="username">Full Name</label>
            <input type="text" id="username" name="username" placeholder="Enter your full name">
        </div>
