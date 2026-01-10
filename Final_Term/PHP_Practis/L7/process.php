<?php
session_start();

// Sanitize helper
function clean($data) {
    return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, "UTF-8");
}

$errors = [];

// Use isset() checks as required
$name   = isset($_POST["name"]) ? clean($_POST["name"]) : "";
$email  = isset($_POST["email"]) ? clean($_POST["email"]) : "";
$age    = isset($_POST["age"]) ? $_POST["age"] : "";
$gender = isset($_POST["gender"]) ? clean($_POST["gender"]) : "";
$skills = isset($_POST["skills"]) ? $_POST["skills"] : [];
$country = isset($_POST["country"]) ? clean($_POST["country"]) : "";

// Validation rules from task
if ($name === "") {
    $errors[] = "Name must not be empty.";
}

if ($email === "") {
    $errors[] = "Email must not be empty.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email format is invalid.";
}

// Age must be a positive number
if ($age === "" || !is_numeric($age) || (int)$age <= 0) {
    $errors[] = "Age must be a positive number.";
} else {
    $age = (int)$age;
}

// Gender must be selected
if ($gender === "") {
    $errors[] = "Gender must be selected.";
}

// At least one skill must be selected
if (!is_array($skills) || count($skills) < 1) {
    $errors[] = "At least one skill must be selected.";
} else {
    // Sanitize skills array
    $skills = array_map("clean", $skills);
}

// If validation fails: store old values & errors then redirect back
if (!empty($errors)) {
    $_SESSION["errors"] = $errors;
    $_SESSION["old"] = [
        "name" => $name,
        "email" => $email,
        "age" => $age,
        "gender" => $gender,
        "skills" => $skills,
        "country" => $country
    ];
    header("Location: form.php");
    exit();
}

// If valid: display submitted values in well-formatted manner
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Result</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 650px; margin: 30px auto; background: #fff; padding: 20px; border-radius: 8px; }
        .nav a { margin-right: 15px; text-decoration: none; }
        ul { margin-top: 8px; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h2>Submitted Data (Processed by PHP)</h2>

    <div class="nav">
        <a href="form.php">Back to Form</a>
    </div>

    <p class="success">Form submitted successfully!</p>

    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Age:</b> <?php echo $age; ?></p>
    <p><b>Gender:</b> <?php echo $gender; ?></p>
    <p><b>Country:</b> <?php echo $country !== "" ? $country : "Not Selected"; ?></p>

    <p><b>Skills:</b></p>
    <ul>
        <?php foreach ($skills as $s): ?>
            <li><?php echo $s; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

</body>
</html>
