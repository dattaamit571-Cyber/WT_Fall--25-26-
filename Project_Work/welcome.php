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
        background-color: linear-gradient(135deg, #6a11cb, #2575fc);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
.welcome-card {
    background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            padding: 50px 40px;
            border-radius: 20px;
            width: 350px;
            text-align: center;
            color: #fff;
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
            background: #fff;
            color: #2575fc;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }
