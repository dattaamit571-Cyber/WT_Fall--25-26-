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