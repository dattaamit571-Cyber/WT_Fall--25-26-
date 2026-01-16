<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher') {
    header("Location: login.php");
    exit();
}

$userId = $_SESSION['user_id'];
$username = $_SESSION['username'] ?? 'Teacher';

if ($username === 'Teacher') 
    {
    $conn = mysqli_connect("localhost", "root", "", "quiz_app");
    if ($conn)
    {
        $stmt = mysqli_prepare($conn, "SELECT username FROM users WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $userId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $fetchedUsername);

        if (mysqli_stmt_fetch($stmt)) 

        {
            $username = $fetchedUsername;
            $_SESSION['username'] = $username;
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teacher Dashboard - QuizMaster</title>
    <link rel="stylesheet" href="Css/dashboard.css">
</head>

<body>

<div class="dashboard-layout">

    <aside class="sidebar">
        <h2>Teacher Menu</h2>

        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="teacher/create_quiz.php">Create Quiz</a></li>
            <li><a href="teacher/add_question.php">Add Questions</a></li>
            <li><a href="teacher/edit_question.php">Edit Questions</a></li>
            <li><a href="teacher/delete_question.php">Delete Questions</a></li>
            <li><a href="teacher/teacher_results.php">View Results</a></li>
        </ul>

        <form action="logout.php" method="POST" style="margin-top:20px;">
        <button type="submit" class="btn logout-btn">Logout</button>
        </form>
    </aside>

    <main class="content-area">

        <div class="breadcrumbs">Teacher Dashboard</div>
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>Manage your quizzes, questions, and student results.</p>

        