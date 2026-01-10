<?php
session_start();

// Initialize session storage if not exists
if (!isset($_SESSION["results"])) {
    $_SESSION["results"] = [];
}

// Sanitization helper
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Grade function (A: 90+, B: 80-89, etc.)
function getGrade($avg) {
    if ($avg >= 90) return "A";
    elseif ($avg >= 80) return "B";
    elseif ($avg >= 70) return "C";
    elseif ($avg >= 60) return "D";
    else return "F";
}

$errors = [];
$result = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Read and sanitize
    $studentName = isset($_POST["student_name"]) ? clean_input($_POST["student_name"]) : "";

    $marks = [
        isset($_POST["m1"]) ? $_POST["m1"] : "",
        isset($_POST["m2"]) ? $_POST["m2"] : "",
        isset($_POST["m3"]) ? $_POST["m3"] : "",
        isset($_POST["m4"]) ? $_POST["m4"] : "",
        isset($_POST["m5"]) ? $_POST["m5"] : ""
    ];

    // Validate all fields filled
    if ($studentName === "") {
        $errors[] = "Student name is required.";
    }

    for ($i = 0; $i < 5; $i++) {
        if ($marks[$i] === "" && $marks[$i] !== "0") {
            $errors[] = "All marks fields are required.";
            break;
        }
    }

    // Validate marks range 0-100
    for ($i = 0; $i < 5; $i++) {
        if (!is_numeric($marks[$i])) {
            $errors[] = "Marks must be numeric values.";
            break;
        }
        $marks[$i] = (float)$marks[$i];
        if ($marks[$i] < 0 || $marks[$i] > 100) {
            $errors[] = "Marks must be between 0 and 100 (Subject " . ($i + 1) . ").";
            break;
        }
    }

    // If no errors: calculate
    if (empty($errors)) {
        $total = array_sum($marks);
        $average = $total / 5;
        $grade = getGrade($average);

        $result = [
            "name" => $studentName,
            "marks" => $marks,
            "total" => $total,
            "average" => round($average, 2),
            "grade" => $grade
        ];

        // Store multiple student results in session
        $_SESSION["results"][] = $result;
    }
} else {
    $errors[] = "Invalid request.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculation Result</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 700px; margin: 40px auto; background: #fff; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background: #eee; }
        .error { color: red; }
        .nav a { margin-right: 15px; text-decoration: none; }
        .btn { display: inline-block; padding: 10px 14px; background: #007BFF; color: #fff; text-decoration: none; border-radius: 4px; }
        .btn2 { background: #28a745; }
    </style>
</head>
<body>

<div class="box">
    <h2>Student Grade Result</h2>

    <div class="nav">
        <a href="index.php">Home</a>
        <a href="results.php">View All Results</a>
    </div>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <h3>Validation Errors:</h3>
            <ul>
                <?php foreach ($errors as $e): ?>
                    <li><?php echo $e; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <a class="btn" href="index.php">Go Back</a>

    <?php else: ?>
        <table>
            <tr>
                <th>Student Name</th>
                <th>Subject 1</th>
                <th>Subject 2</th>
                <th>Subject 3</th>
                <th>Subject 4</th>
                <th>Subject 5</th>
                <th>Total</th>
                <th>Average</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td><?php echo $result["name"]; ?></td>
                <td><?php echo $result["marks"][0]; ?></td>
                <td><?php echo $result["marks"][1]; ?></td>
                <td><?php echo $result["marks"][2]; ?></td>
                <td><?php echo $result["marks"][3]; ?></td>
                <td><?php echo $result["marks"][4]; ?></td>
                <td><?php echo $result["total"]; ?></td>
                <td><?php echo $result["average"]; ?></td>
                <td><b><?php echo $result["grade"]; ?></b></td>
            </tr>
        </table>

        <p>
            <a class="btn" href="index.php">Add Another Student</a>
            <a class="btn btn2" href="results.php">See All Saved Results</a>
        </p>
    <?php endif; ?>

</div>

</body>
</html>
