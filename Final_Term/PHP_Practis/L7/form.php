<?php
session_start();

// If there are old values from validation failure, load them then clear
$old = $_SESSION["old"] ?? [];
$errors = $_SESSION["errors"] ?? [];

unset($_SESSION["old"]);
unset($_SESSION["errors"]);

// Helper for safe output
function e($value) {
    return htmlspecialchars($value ?? "", ENT_QUOTES, "UTF-8");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Handling</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 650px; margin: 30px auto; background: #fff; padding: 20px; border-radius: 8px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin-top: 6px; }
        .inline { width: auto; }
        .row { margin-top: 8px; }
        button { margin-top: 15px; padding: 10px; width: 100%; border: none; background: #007BFF; color: white; cursor: pointer; }
        .error { color: red; }
        .error-box { border: 1px solid #ffb3b3; background: #ffecec; padding: 10px; border-radius: 6px; margin-bottom: 15px; }
    </style>
</head>
<body>

<div class="box">
    <h2>Lab Task 02: PHP Form Handling and Superglobals</h2>

    <?php if (!empty($errors)): ?>
        <div class="error-box">
            <p class="error"><b>Please fix the following errors:</b></p>
            <ul class="error">
                <?php foreach ($errors as $er): ?>
                    <li><?php echo e($er); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="process.php" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo e($old["name"] ?? ""); ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo e($old["email"] ?? ""); ?>">

        <label for="age">Age</label>
        <input type="number" id="age" name="age" value="<?php echo e($old["age"] ?? ""); ?>">

        <label>Gender</label>
        <div class="row">
            <label class="inline">
                <input class="inline" type="radio" name="gender" value="Male"
                    <?php echo (isset($old["gender"]) && $old["gender"] === "Male") ? "checked" : ""; ?>>
                Male
            </label>
            <label class="inline">
                <input class="inline" type="radio" name="gender" value="Female"
                    <?php echo (isset($old["gender"]) && $old["gender"] === "Female") ? "checked" : ""; ?>>
                Female
            </label>
            <label class="inline">
                <input class="inline" type="radio" name="gender" value="Other"
                    <?php echo (isset($old["gender"]) && $old["gender"] === "Other") ? "checked" : ""; ?>>
                Other
            </label>
        </div>

        <label>Skills (select at least one)</label>
        <?php
            $oldSkills = $old["skills"] ?? [];
            if (!is_array($oldSkills)) $oldSkills = [];
        ?>
        <div class="row">
            <label class="inline">
                <input class="inline" type="checkbox" name="skills[]" value="HTML"
                    <?php echo in_array("HTML", $oldSkills) ? "checked" : ""; ?>>
                HTML
            </label>
            <label class="inline">
                <input class="inline" type="checkbox" name="skills[]" value="CSS"
                    <?php echo in_array("CSS", $oldSkills) ? "checked" : ""; ?>>
                CSS
            </label>
            <label class="inline">
                <input class="inline" type="checkbox" name="skills[]" value="PHP"
                    <?php echo in_array("PHP", $oldSkills) ? "checked" : ""; ?>>
                PHP
            </label>
            <label class="inline">
                <input class="inline" type="checkbox" name="skills[]" value="JavaScript"
                    <?php echo in_array("JavaScript", $oldSkills) ? "checked" : ""; ?>>
                JavaScript
            </label>
        </div>

        <label for="country">Country</label>
        <select id="country" name="country">
            <?php
                $countries = ["Bangladesh", "Netherlands", "India", "Pakistan", "USA", "UK"];
                $selectedCountry = $old["country"] ?? "";
            ?>
            <option value="">Select Country</option>
            <?php foreach ($countries as $c): ?>
                <option value="<?php echo e($c); ?>" <?php echo ($selectedCountry === $c) ? "selected" : ""; ?>>
                    <?php echo e($c); ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Submit</button>

    </form>
</div>

</body>
</html>
