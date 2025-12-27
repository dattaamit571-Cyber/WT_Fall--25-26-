<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset+"UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz Platform</title>
  <style>
  

   * {
         box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body, html {
            height: 100%;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
              .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 60px;
            border-radius: 15px;
              box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            max-width: 400px;
            text-align: center;
            backdrop-filter: blur(10px);
             -webkit-backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }
          .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.3);
        }
         h1 {
            font-weight: 600;
            font-size: 2.8rem;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }
        