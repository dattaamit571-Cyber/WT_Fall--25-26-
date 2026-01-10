<?php
// Initialize variables
$name = $email = $subject = $message = "";
$errors = [];
$success = false;

// Sanitize function
function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Form submission check
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Name validation
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = clean_input($_POST["name"]);
    }

    // Email validation
    if (empty($_POST["email"])) {
        $errors[] = "Email is required.";
    } else {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
    }

    // Subject validation
    if (empty($_POST["subject"])) {
        $errors[] = "Subject is required.";
    } else {
        $subject = clean_input($_POST["subject"]);
    }

    // Message validation
    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = clean_input($_POST["message"]);
        if (strlen($message) < 10) {
            $errors[] = "Message must be at least 10 characters long.";
        }
    }

    // File validation (optional)
    if (!empty($_FILES["attachment"]["name"])) {
        $allowedTypes = ["image/jpeg", "image/png", "application/pdf"];
        $fileType = $_FILES["attachment"]["type"];
        $fileSize = $_FILES["attachment"]["size"];

        if (!in_array($fileType, $allowedTypes)) {
            $errors[] = "Only JPG, PNG, and PDF files are allowed.";
        }

        if ($fileSize > 2 * 1024 * 1024) {
            $errors[] = "File size must be less than 2MB.";
        }
    }

    // If no errors
    if (empty($errors)) {
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 400px; margin: 40px auto; background: white; padding: 20px; border-radius: 8px; }
        input, select, textarea { width: 100%; padding: 8px; margin-top: 8px; }
        button { padding: 10px; background: #007BFF; color: white; border: none; margin-top: 10px; width: 100%; }
        .error { color: red; }
        .success { color: green; font-weight: bold; }
    </style>
</head>

<body>

<div class="box">

<h2>Contact Form</h2>

<?php if ($success): ?>
    <p class="success">Email sent successfully!</p>

    <h4>Submitted Information:</h4>
    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Subject:</b> <?php echo $subject; ?></p>
    <p><b>Message:</b> <?php echo $message; ?></p>

    <a href="contact.php">Send another message</a>

<?php else: ?>

    <?php
    if (!empty($errors)) {
        echo "<div class='error'><ul>";
        foreach ($errors as $e) {
            echo "<li>$e</li>";
        }
        echo "</ul></div>";
    }
    ?>

<form method="post" action="" enctype="multipart/form-data">

    <label>Name *</label>
    <input type="text" name="name" value="<?php echo $name; ?>">

    <label>Email *</label>
    <input type="text" name="email" value="<?php echo $email; ?>">

    <label>Subject *</label>
    <select name="subject">
        <option value="">Select</option>
        <option value="General" <?php if($subject=="General") echo "selected"; ?>>General</option>
        <option value="Support" <?php if($subject=="Support") echo "selected"; ?>>Support</option>
        <option value="Feedback" <?php if($subject=="Feedback") echo "selected"; ?>>Feedback</option>
    </select>

    <label>Message *</label>
    <textarea name="message"><?php echo $message; ?></textarea>

    <label>Attachment (optional)</label>
    <input type="file" name="attachment">

    <button type="submit">Send</button>

</form>

<?php endif; ?>

</div>

</body>
</html>
