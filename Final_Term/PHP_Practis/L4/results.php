<?php
session_start();

// Initialize if not set
if (!isset($_SESSION["results"])) {
    $_SESSION["results"] = [];
}

// Clear results
if (isset($_GET["clear"]) && $_GET["clear"] == "1") {
    $_SESSION["results"] = [];
    header("Location: results.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>All Results</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 900px; margin: 40px auto; background: #fff; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background: #eee; }
        .nav a { margin-right: 15px; text-decoration: none; }
        .btn { display: inline-block; padding: 10px 14px; background: #007BFF; color: #fff; text-decoration: none; border-radius: 4px; }
        .danger { background: #dc3545; }
        .muted { color: #666; }
    </style>
</head>
<body>

<div class="box">
    <h2>All Students' Results (Stored in Session)</h2>

    <div class="nav">
        <a href="index.php">Home</a>
        <a href="results.php">Refresh</a>
    </div>

    <p>
        <a class="btn" href="index.php">Add New Student</a>
        <a class="btn danger" href="results.php?clear=1" onclick="return confirm('Are you sure you want to clear all results?');">
            Clear Results
        </a>
    </p>

    <?php if (empty($_SESSION["results"])): ?>
        <p class="muted">No results stored yet. Please add a student from the Home page.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>#</th>
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

            <?php foreach ($_SESSION["results"] as $index => $r): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $r["name"]; ?></td>
                    <td><?php echo $r["marks"][0]; ?></td>
                    <td><?php echo $r["marks"][1]; ?></td>
                    <td><?php echo $r["marks"][2]; ?></td>
                    <td><?php echo $r["marks"][3]; ?></td>
                    <td><?php echo $r["marks"][4]; ?></td>
                    <td><?php echo $r["total"]; ?></td>
                    <td><?php echo $r["average"]; ?></td>
                    <td><b><?php echo $r["grade"]; ?></b></td>
                </tr>
            <?php endforeach; ?>

        </table>
    <?php endif; ?>

</div>

</body>
</html>
