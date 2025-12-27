<?php
session_start();

 $servername = "localhost";
 $db_username = "root";
 $db_password = "";
 $dbname = "quiz_app";

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);
    
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

   $loginError = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') 

{
    $email = mysqli_real_escape_string($conn, $_POST['loginEmail'] ?? '');
    $password = $_POST['loginPassword'] ?? '';
    $rememberMe = isset($_POST['remember_me']);

    if ($email && $password) 
    
    {
        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) === 1) 
        {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) 
            
            {
                
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

               
                if ($rememberMe) 
                
                {
                    setcookie("remembered_email", $email, time() + (86400 * 30), "/");
                    setcookie("remembered_password", $password, time() + (86400 * 30), "/");
                } else 
                
                {
                    setcookie("remembered_email", "", time() - 3600, "/");
                    setcookie("remembered_password", "", time() - 3600, "/");
                }

                header("Location: dashboard.php");
                exit();
            } 
            
        else
            
            {
                $loginError = "Invalid password.";
            }
        } 
        else 
        {
            $loginError = "User not found.";
        }
    } 
    else 
    {
        $loginError = "Please fill in all fields.";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Quiz Platform</title>

    
    <link rel="stylesheet" href="css/style.css" />
    <style>


/* Styles */
        .remember-me 
        {
    display: flex;
    align-items: center;
    gap: 8px; 
    margin-bottom: 15px;
}

.remember-me input[type="checkbox"] 

{
    margin: 0;
    width: 16px;
    height: 16px;
    cursor: pointer;
}
        .error-message 
        
        {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
        .login-container
        
        {
            max-width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.1);
        }
        .form-group 
        
        {
            margin-bottom: 15px;
        }
     label 
     {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] 
        {
            width: 100%;
            padding: 8px 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn 
        
        {
            background-color: #1976d2;
            color: white;
            font-weight: 600;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .btn:hover {
            background-color: #155a9f;
        }
        .form-footer 
        
        {
            text-align: center;
            margin-top: 15px;
        }
        .remember-me 
        
        {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>Login to Your Account</h1>

    <?php if (!empty($loginError)): ?>
    <div class="error-message"><?= htmlspecialchars($loginError) ?></div>
    <?php endif; ?>

    <form id="loginForm" action="" method="POST" onsubmit="return validateLogin();">
       
    <div class="form-group">
            <label for="loginEmail">Email Address</label>
            <input type="text" id="loginEmail" name="loginEmail" placeholder="example@email.com"
                   value="<?= isset($_COOKIE['remembered_email']) ? htmlspecialchars($_COOKIE['remembered_email']) : '' ?>" required>
        
                </div>

        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" name="loginPassword" placeholder="Your password"
                   value="<?= isset($_COOKIE['remembered_password']) ? htmlspecialchars($_COOKIE['remembered_password']) : '' ?>" required>
        </div>

        <div class="form-group remember-me">
            
        <label><input type="checkbox" name="remember_me" <?= isset($_COOKIE['remembered_email']) ? 'checked' : '' ?>> Remember Me</label>
        </div>

        <button type="submit" class="btn">Login</button>
    </form>

    <div class="form-footer">
        Don't have an account? <a href="register.php">Register here</a>
    </div>
</div>


<script src="js/validation.js"></script>
<script>

function validateLogin() 

{
    const email = document.getElementById('loginEmail').value.trim();
    const password = document.getElementById('loginPassword').value.trim();

    if (!email || !password) 
    {
        alert("Please fill  all fields.");
        return false;
    }
   
}
</script>
</body>
</html>