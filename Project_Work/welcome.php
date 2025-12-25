<!DOCTYPE html>
<html lang="en">
<Head>
    <meta charset ="UTF-8">
    <title>QuizMaster</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
}
   body {
            height: 100vh;
            background: linear-gradient(135deg, royalblue,Purple);
            display: flex;
            align-items: center;
            justify-content: center;
        }
 .welcome-card {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 50px 40px;
            border-radius: 20px;
            width: 350px;
            text-align: center;
            color: white;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        } 
 .welcome-card h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
 .welcome-card h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
 .welcome-card p {
            font-size: 16px;
            margin-bottom: 35px;
            line-height: 1.5;
        }
 .btn-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
.btn-group a {
            text-decoration: none;
            background: white;
            color: red;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }
 .btn-group a:hover {
            background: white;
            transform: scale(1.05);
        }
    </style>
    </Head>
<body>
    <div class="welcome-card">
        <h1>Welcome to</h1>
        <h2>QuizMaster</h2>
        <p>Your ultimate destination for fun and challenging quizzes! Test your knowledge across various topics and see how you stack up against others.</p>
        <div class="btn-group">
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
    </div>