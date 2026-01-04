<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}

 $role = $_SESSION['role'];
 $userId = $_SESSION['user_id'];
 $username = $_SESSION['username'] ?? 'User';

if ($username === 'User') 
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

    <meta charset="UTF-8" />
    <title>Dashboard - QuizMaster</title>
    <link rel="stylesheet" href="Css/dashboard.css" />

</head>
<body>

<div class="dashboard-layout">
  
<aside class="sidebar">

  <h2>Menu</h2>
        <ul>
            <?php if ($role === 'student'): ?> 

          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="student/view_quiz.php"> Available Quizzes</a></li>
          <li><a href="student/view_my_results.php"> My Results</a></li>

          <?php elseif ($role === 'teacher'): ?>

          <li><a href="dashboard.php"> Dashboard</a></li>
          <li><a href="teacher/create_quiz.php"> Create Quiz</a></li>
    <li><a href="teacher/add_question.php"> Add Questions</a></li>
    <li><a href="teacher/edit_question.php"> Edit Questions</a></li>
    <li><a href="teacher/delete_question.php"> Delete Questions</a></li>
    <li><a href="teacher/teacher_results.php"> View Results</a></li>

    <?php elseif ($role === 'admin'): ?>

                <li><a href="dashboard.php"> Dashboard</a></li>
                <li><a href="admin/admin_manage_users.php"> Manage Users</a></li>
                <li><a href="admin/admin_manage_quizzes.php"> Manage Quizzes</a></li>
             <?php endif; ?>

            <li><a href="logout.php"> Logout</a></li>
        </ul>

        <form action="logout.php" method="POST" style="margin-top: 20px;">
        <button type="submit" class="btn logout-btn">Logout</button>
    </form>
    </aside>

   
    <main class="content-area">
        <div class="breadcrumbs">Dashboard</div>

       



          <?php if ($role === 'student'): ?>

            <h1>Welcome, <?= htmlspecialchars($username) ?> (Student)</h1>
            <p>Here are the quizzes available to you:</p>
            <a href="student/view_quiz.php" class="quick-btn">Take a Quiz</a>
            <a href="student/view_my_results.php" class="quick-btn">View My Results</a>

          <?php elseif ($role === 'teacher'): ?>

            <h1>Welcome, <?= htmlspecialchars($username) ?> (Teacher)</h1>
            <p>Manage your quizzes and questions from here.</p>

            <div class="quick-actions">
                <a href="teacher/create_quiz.php" class="quick-btn"> New Quiz</a>
                <a href="teacher/teacher_results.php" class="quick-btn">View Results</a>
            </div>

          <?php elseif ($role === 'admin'): ?>

            <h1>Welcome, <?= htmlspecialchars($username) ?> (Admin)</h1>
            <p>Manage users and quizzes system-wide.</p>

             <div class="quick-actions">
                <a href="admin/admin_manage_users.php" class="quick-btn"> Manage Users</a>
                <a href="admin/admin_manage_quizzes.php" class="quick-btn"> Manage Quizzes</a>
            </div>

        <?php else: ?>

            <h1>Unknown Role</h1>
            <p>Your role is not recognized.</p>

        <?php endif; ?>

    </main>
</div>
</body>
</html>