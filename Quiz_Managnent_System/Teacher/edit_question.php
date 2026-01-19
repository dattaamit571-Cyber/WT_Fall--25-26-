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
$questions = [];
$quiz_id = intval($_GET['quiz_id'] ?? 0);
$user_id = intval($_SESSION['user_id'] ?? 0);

 if ($_SERVER['REQUEST_METHOD'] === 'POST')
 
{
    $question_id = intval($_POST['question_id'] ?? 0);
    $question = mysqli_real_escape_string($conn, $_POST['question'] ?? '');
    $option1 = mysqli_real_escape_string($conn, $_POST['option1'] ?? '');
    $option2 = mysqli_real_escape_string($conn, $_POST['option2'] ?? '');
    $option3 = mysqli_real_escape_string($conn, $_POST['option3'] ?? '');
    $option4 = mysqli_real_escape_string($conn, $_POST['option4'] ?? '');
    $correct_option = intval($_POST['correct_option'] ?? 0);

if ($question_id && $question && $option1 && $option2 && $option3 && $option4 && $correct_option >= 1 && $correct_option <= 4) 
{
        $sql = "UPDATE questions SET 
            question_text='$question', 
            option_1='$option1', 
            option_2='$option2', 
            option_3='$option3', 
            option_4='$option4', 
            correct_option=$correct_option 
            WHERE id=$question_id";
