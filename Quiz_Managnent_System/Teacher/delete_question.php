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

$successMessage = "";
$error = "";

$quiz_id = intval($_GET['quiz_id'] ?? 0);
$question_id = intval($_GET['question_id'] ?? 0);

if ($question_id && $_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete'])) 

{
    $sql = "DELETE FROM questions WHERE id = $question_id";
    if (mysqli_query($conn, $sql)) 
    
    {
        $successMessage = "Question deleted successfully.";
    } 
    else 
    {
        $error = "Failed to delete question.";
    }
}