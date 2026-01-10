<?php
// Initialize variables
$name = "";
$marks = "";
$result = "";

// Process form after submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $marks = $_POST["marks"];

    // Check pass or fail
    if ($marks > 50) {
        $result = "Pass";
    } else {
        $result = "Fail";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pass or Fail Checker</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 400px; margin: 60px auto; background: white; padding: 20px; border-radius: 8px; text-align: center; }
        input { width: 100%; padding: 8px; margin-top: 10px; }
        button { margin-top: 15px; padding: 10px; width: 100%; background: #007BFF; color: white; border: none; }
        .pass { color: green; font-weight: bold; }
        .fail { color: red; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h2>Student Result System</h2>

    <form method="post" action="">
        <label>Student Name</label>
        <input type="text" name="name" required value="<?php echo $name; ?>">

        <label>Marks</label>
        <input type="number" name="marks" required value="<?php echo $marks; ?>">

        <button type="submit">Submit</button>
    </form>

    <?php if ($result != ""): ?>
        <hr>
        <p><b>Name:</b> <?php echo $name; ?></p>

        <?php if ($result == "Pass"): ?>
            <p class="pass">Result: PASS ✅</p>
        <?php else: ?>
            <p class="fail">Result: FAIL ❌</p>
        <?php endif; ?>
    <?php endif; ?>

</div>

</body>
</html>
