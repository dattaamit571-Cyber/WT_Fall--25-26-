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
    else 
    {
        $error = "Failed to publish the quiz. Please try again.";
    }
}
$question =[];
if ($quiz_id) 
{
    $questionsResult = mysqli_query($conn, "SELECT * FROM questions WHERE quiz_id = $quiz_id");
    while ($row = mysqli_fetch_assoc($questionsResult)) 
    {
        $question[] = $row;
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
<title>Add Question - QuizMaster</title>
    <link rel="stylesheet" href="Css/addqs.css" />
    </head>
<body>
<div class="dashboard-layout">
    <aside class="sidebar">
        <h2>Menu</h2>

    <ul>
            <li><a href="../dashboard.php"> Dashboard</a></li>
            <li><a href="create_quiz.php"> Create Quiz</a></li>
            <li><a href="add_question.php"> Add Questions</a></li>
            <li><a href="edit_question.php"> Edit Questions</a></li>
            <li><a href="delete_question.php"> Delete Questions</a></li>
            <li><a href="teacher_results.php"> View Results</a></li>
        </ul>

        <form action="../logout.php" method="post">
            <button type="submit" class="logout-btn">Logout</button>
        </form>

    </aside>

    <main class="content-area">

        <div class="breadcrumbs">Dashboard &gt; Add Question</div>
        <h1>Add New Question</h1>


    <?php if ($successMessage): ?>
        <div class="success-message"><?= htmlspecialchars($successMessage) ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
            <div class="error-message"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

        <form method="POST" action="">
         <div class="form-group">
            <label for="quiz_id">Select Quiz:</label>
            <select id="quiz_id" name="quiz_id" onchange="this.form.submit()" required>
                <option value="">-- Select Quiz --</option>
                <?php mysqli_data_seek($quizzesResult, 0); ?>
                    <?php while ($row = mysqli_fetch_assoc($quizzesResult)): ?>
                    <option value="<?= $row['id'] ?>" <?= ($row['id'] == $quiz_id) ? 'selected' : '' ?>>
                           
                    <?= htmlspecialchars($row['title']) ?>
                        </option>
                    <?php endwhile; ?>

                </select>
            </div>

         <?php if ($quiz_id): ?>

            <div class="form-group">
                <label for="question">Question Text:</label>
                <textarea id="question" name="question" rows="3" placeholder="Enter question text" required></textarea>
            </div>


         <div class="form-group">

                <label>Options:</label>

                <input type="text" name="option1" placeholder="Option 1" required>
                <input type="text" name="option2" placeholder="Option 2" required>
                <input type="text" name="option3" placeholder="Option 3" required>
                <input type="text" name="option4" placeholder="Option 4" required>

            </div>

            <div class="form-group">

                <label for="correct_option">Correct Option (1-4):</label>
                <input type="number" id="correct_option" name="correct_option" min="1" max="4" required>

            </div>

            <button type="submit" name="submit_question" class="quick-btn">Add Question</button>
            <a href="../dashboard.php" class="quick-btn" style="background:#777; margin-left:10px;">Back to Dashboard</a>
 </form>