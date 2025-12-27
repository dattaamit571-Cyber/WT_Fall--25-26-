<?php
session_start();



<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Quiz Platform</title>

    
    <link rel="stylesheet" href="css/style.css" />
    <style>

.remember-me {
    display: flex;
    align-items: center;
    gap: 8px; 
    margin-bottom: 15px;
    }

.remember-me input[type="checkbox"]{
    margin: 0;
    width: 16px;
    height: 16px;
    cursor: pointer;
 }
 .error-message{
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
 .login-container{
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
        