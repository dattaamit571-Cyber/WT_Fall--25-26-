<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'teacher') 

{
    header("Location: ../dashboard.php");
    exit();
}

$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "quiz_app";

$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);
if (!$conn) 

{
    die("Connection failed: " . mysqli_connect_error());
}