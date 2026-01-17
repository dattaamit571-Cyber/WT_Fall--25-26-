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
$publishMessage = "";
$error = "";
$teacherId = $_SESSION['user_id'];

$quizzesResult = mysqli_query($conn, "SELECT id, title FROM quizzes WHERE created_by = $teacherId");

$quiz_id = intval($_POST['quiz_id'] ?? $_GET['quiz_id'] ?? 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_question'])) 
   
    {
    $question = mysqli_real_escape_string($conn, $_POST['question'] ?? '');
    $option1 = mysqli_real_escape_string($conn, $_POST['option1'] ?? '');
    $option2 = mysqli_real_escape_string($conn, $_POST['option2'] ?? '');
    $option3 = mysqli_real_escape_string($conn, $_POST['option3'] ?? '');
    $option4 = mysqli_real_escape_string($conn, $_POST['option4'] ?? '');
    $correct_option = intval($_POST['correct_option'] ?? 0);

    if ($quiz_id && $question && $option1 && $option2 && $option3 && $option4 && $correct_option >= 1 && $correct_option <= 4) 
      {
        $sql = "INSERT INTO questions (quiz_id, question_text, option_1, option_2, option_3, option_4, correct_option) 
                VALUES ($quiz_id, '$question', '$option1', '$option2', '$option3', '$option4', $correct_option)";
        if (mysqli_query($conn, $sql)) 
        {
            $successMessage = "Question added successfully.";
        } 
        else
         {
            $error = "Failed to add question. Please try again.";
        }
    } 
       else 
    {
        $error = "Please fill all fields correctly.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['publish_quiz'])) 
{

    $quiz_id = intval($_POST['quiz_id']);
    $update = mysqli_query($conn, "UPDATE quizzes SET is_published = 1 WHERE id = $quiz_id");
    if ($update)
    {
        $publishMessage = "Published successfully!";
    } 