<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - QuizMaster</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background: white;
            width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1e73d8;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #155bb5;
        }

        .remember {
            margin-bottom: 15px;
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
        }

        .register-link a {
            text-decoration: none;
            color: #1e73d8;
        }
    </style>
</head>

<body>

<div class="login-card">
    <h2>Login to Your Account</h2>

    <form onsubmit="return validateForm()">
        <label>Email Address</label>
        <input type="text" id="email">
        <div id="emailError" class="error"></div>

        <label>Password</label>
        <input type="password" id="password">
        <div id="passwordError" class="error"></div>

        <div class="remember">
            <input type="checkbox"> Remember Me
        </div>

        <button type="submit">Login</button>
    </form>

    <div class="register-link">
        Don't have an account?
        <a href="register.php">Register here</a>
    </div>
</div>

<script>
    function validateForm() {
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;

        let emailError = document.getElementById("emailError");
        let passwordError = document.getElementById("passwordError");

        emailError.innerHTML = "";
        passwordError.innerHTML = "";

        let isValid = true;

        // Email validation
        if (email === "") {
            emailError.innerHTML = "Email is required";
            isValid = false;
        } 
        else if (!email.includes("@")) {
            emailError.innerHTML = "Enter a valid email";
            isValid = false;
        }

        // Password validation
        if (password === "") {
            passwordError.innerHTML = "Password is required";
            isValid = false;
        } 
        else if (password.length < 6) {
            passwordError.innerHTML = "Password must be at least 6 characters";
            isValid = false;
        }

        return isValid; // true = submit, false = stop
    }
</script>

</body>
</html>
