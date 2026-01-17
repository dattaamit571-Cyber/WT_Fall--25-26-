<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'teacher')
{
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