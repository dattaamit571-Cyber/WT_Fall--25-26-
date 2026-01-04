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