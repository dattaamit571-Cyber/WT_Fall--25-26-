<?php
// -------------------------
// Registration Form + PHP Validation (Same Page)
// -------------------------

// Helper function (sanitize)
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Initialize variables
$fullName = $email = $username = $age = $gender = $course = "";
$terms = "";
$errors = [];
$success = false;

// Retain skills not needed here; just retain form values
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Use isset() properly to retrieve values
    $fullName = isset($_POST["full_name"]) ? clean_input($_POST["full_name"]) : "";
    $email = isset($_POST["email"]) ? clean_input($_POST["email"]) : "";
    $username = isset($_POST["username"]) ? clean_input($_POST["username"]) : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $confirmPassword = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : "";
    $age = isset($_POST["age"]) ? clean_input($_POST["age"]) : "";
    $gender = isset($_POST["gender"]) ? clean_input($_POST["gender"]) : "";
    $course = isset($_POST["course"]) ? clean_input($_POST["course"]) : "";
    $terms = isset($_POST["terms"]) ? $_POST["terms"] : "";

    // -------------------------
    // Validations (Doing all 10 = safest)
    // -------------------------

    // 1) All fields must not be empty (except checkbox checked separately)
    if ($fullName === "" || $email === "" || $username === "" || $password === "" || $confirmPassword === "" || $age === "" || $course === "") {
        $errors[] = "All fields must not be empty.";
    }

    // 2) Full Name must contain only letters and spaces
    if ($fullName !== "" && !preg_match("/^[A-Za-z\s]+$/", $fullName)) {
        $errors[] = "Full Name must contain only letters and spaces.";
    }

    // 3) Email must be valid format
    if ($email !== "" && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email must be a valid email format.";
    }

    // 4) Username at least 5 characters
    if ($username !== "" && strlen($username) < 5) {
        $errors[] = "Username must be at least 5 characters long.";
    }

    // 5) Password at least 6 characters
    if ($password !== "" && strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    // 6) Password and Confirm Password must match
    if ($password !== "" && $confirmPassword !== "" && $password !== $confirmPassword) {
        $errors[] = "Password and Confirm Password must match.";
    }

    // 7) Age must be 18 or above
    if ($age !== "") {
        if (!is_numeric($age)) {
            $errors[] = "Age must be a number.";
        } elseif ((int)$age < 18) {
            $errors[] = "Age must be 18 or above.";
        }
    }

    // 8) Gender must be selected
    if ($gender === "") {
        $errors[] = "Gender must be selected.";
    }

    // 9) Course must be selected (not empty)
    if ($course === "") {
        $errors[] = "Course must be selected.";
    }

    // 10) Terms & Conditions must be checked
    if ($terms === "") {
        $errors[] = "You must agree to the Terms & Conditions.";
    }

    // If no errors, success
    if (empty($errors)) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 650px; margin: 30px auto; background: #fff; padding: 20px; border-radius: 8px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin-top: 6px; }
        .inline { width: auto; }
        button { margin-top: 15px; padding: 10px; width: 100%; background: #007BFF; color: white; border: none; cursor: pointer; }
        .error-box { background: #ffecec; border: 1px solid #ffb3b3; padding: 10px; border-radius: 6px; margin-bottom: 15px; }
        .success-box { background: #eaffea; border: 1px solid #9be59b; padding: 10px; border-radius: 6px; margin-top: 15px; }
        .error { color: red; }
        .success { color: green; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h2>Online Student Registration</h2>

    <!-- Show Errors -->
    <?php if (!empty($errors)): ?>
        <div class="error-box">
            <p class="error"><b>Validation Failed:</b></p>
            <ul class="error">
                <?php foreach ($errors as $er): ?>
                    <li><?php echo $er; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form (same page, no redirect) -->
    <form method="post" action="">

        <label for="full_name">Full Name</label>
        <input type="text" id="full_name" name="full_name" value="<?php echo $fullName; ?>">

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">

        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>">

        <label for="password">Password</label>
        <input type="password" id="password" name="password">

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password">

        <label for="age">Age</label>
        <input type="number" id="age" name="age" value="<?php echo $age; ?>">

        <label>Gender</label>
        <label class="inline">
            <input class="inline" type="radio" name="gender" value="Male" <?php if ($gender === "Male") echo "checked"; ?>>
            Male
        </label>
        <label class="inline">
            <input class="inline" type="radio" name="gender" value="Female" <?php if ($gender === "Female") echo "checked"; ?>>
            Female
        </label>

        <label for="course">Course Selection</label>
        <select id="course" name="course">
            <option value="">Select Course</option>
            <option value="CSE" <?php if ($course === "CSE") echo "selected"; ?>>CSE</option>
            <option value="EEE" <?php if ($course === "EEE") echo "selected"; ?>>EEE</option>
            <option value="BBA" <?php if ($course === "BBA") echo "selected"; ?>>BBA</option>
            <option value="English" <?php if ($course === "English") echo "selected"; ?>>English</option>
        </select>

        <label class="inline">
            <input class="inline" type="checkbox" name="terms" value="yes" <?php if ($terms === "yes") echo "checked"; ?>>
            I agree to the Terms & Conditions
        </label>

        <button type="submit">Register</button>
    </form>

    <!-- Success Output -->
    <?php if ($success): ?>
        <div class="success-box">
            <p class="success">Registration Successful!</p>

            <h3>Submitted Details (Password Hidden)</h3>
            <p><b>Full Name:</b> <?php echo $fullName; ?></p>
            <p><b>Email:</b> <?php echo $email; ?></p>
            <p><b>Username:</b> <?php echo $username; ?></p>
            <p><b>Age:</b> <?php echo $age; ?></p>
            <p><b>Gender:</b> <?php echo $gender; ?></p>
            <p><b>Course:</b> <?php echo $course; ?></p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
