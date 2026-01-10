<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 500px; margin: 40px auto; background: #fff; padding: 20px; border-radius: 8px; }
        input { width: 100%; padding: 8px; margin: 8px 0; }
        button { width: 100%; padding: 10px; background: #007BFF; color: #fff; border: none; margin-top: 10px; }
        .nav a { margin-right: 15px; text-decoration: none; }
        .hint { font-size: 13px; color: #444; }
    </style>
</head>
<body>

<div class="box">
    <h2>Lab Task 04: Student Grade Calculator</h2>

    <div class="nav">
        <a href="index.php">Home</a>
        <a href="results.php">View All Results</a>
    </div>

    <p class="hint">Enter marks for 5 subjects (0 - 100).</p>

    <form method="post" action="calculate.php">
        <label>Student Name</label>
        <input type="text" name="student_name" required>

        <label>Subject 1 Marks</label>
        <input type="number" name="m1" min="0" max="100" required>

        <label>Subject 2 Marks</label>
        <input type="number" name="m2" min="0" max="100" required>

        <label>Subject 3 Marks</label>
        <input type="number" name="m3" min="0" max="100" required>

        <label>Subject 4 Marks</label>
        <input type="number" name="m4" min="0" max="100" required>

        <label>Subject 5 Marks</label>
        <input type="number" name="m5" min="0" max="100" required>

        <button type="submit">Calculate Grade</button>
    </form>
</div>

</body>
</html>
