<?php
// Lab Task 02: Online Quiz Application
// Course: Web Technologies
// PHP-only quiz using POST, arrays, loops, and switch feedback

// Questions + options (MCQ)
$questions = [
    1 => [
        "question" => "Which HTML tag is used to create a hyperlink?",
        "options"  => ["<link>", "<a>", "<href>", "<url>"]
    ],
    2 => [
        "question" => "Which HTTP method is commonly used to send form data securely?",
        "options"  => ["GET", "POST", "PUT", "DELETE"]
    ],
    3 => [
        "question" => "Which CSS property is used to change text color?",
        "options"  => ["font-style", "text-decoration", "color", "background-color"]
    ],
    4 => [
        "question" => "In PHP, which symbol is used to start a variable name?",
        "options"  => ["#", "$", "@", "&"]
    ],
    5 => [
        "question" => "Which JavaScript function is used to print something in the browser console?",
        "options"  => ["print()", "console.log()", "log.console()", "echo()"]
    ]
];

// Correct answers stored in an array (by question number)
// Value here matches the exact option text
$correctAnswers = [
    1 => "<a>",
    2 => "POST",
    3 => "color",
    4 => "$",
    5 => "console.log()"
];

// Store user selected answers (for retaining values)
$userAnswers = [];
$errors = [];
$resultDetails = [];
$score = 0;
$percentage = 0;
$feedback = "";
$submitted = false;

// Handle form submit
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $submitted = true;

    // Collect answers and validate
    foreach ($questions as $qNo => $qData) {
        if (isset($_POST["q" . $qNo]) && $_POST["q" . $qNo] !== "") {
            $userAnswers[$qNo] = $_POST["q" . $qNo];
        } else {
            $errors[] = "Please answer Question " . $qNo . ".";
        }
    }

    // If validation passes, calculate score
    if (empty($errors)) {
        $totalQuestions = count($questions);

        // Compare answers using loop
        foreach ($questions as $qNo => $qData) {
            $isCorrect = ($userAnswers[$qNo] === $correctAnswers[$qNo]);

            if ($isCorrect) {
                $score++;
                $resultDetails[$qNo] = "Correct";
            } else {
                $resultDetails[$qNo] = "Incorrect";
            }
        }

        $percentage = ($score / $totalQuestions) * 100;

        // Grade-based feedback using switch (Excellent, Good, Average, Poor)
        // Convert percentage into a simple grade category
        $gradeCategory = "";

        if ($percentage >= 80) {
            $gradeCategory = "A";
        } elseif ($percentage >= 60) {
            $gradeCategory = "B";
        } elseif ($percentage >= 40) {
            $gradeCategory = "C";
        } else {
            $gradeCategory = "D";
        }

        switch ($gradeCategory) {
            case "A":
                $feedback = "Excellent";
                break;
            case "B":
                $feedback = "Good";
                break;
            case "C":
                $feedback = "Average";
                break;
            default:
                $feedback = "Poor";
                break;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Quiz Application</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .box { width: 850px; margin: 30px auto; background: #fff; padding: 20px; border-radius: 8px; }
        .q { background: #fafafa; border: 1px solid #ddd; padding: 15px; border-radius: 6px; margin-bottom: 15px; }
        .error { color: red; }
        .success { color: green; font-weight: bold; }
        .result { background: #eef; padding: 15px; border-radius: 6px; margin-top: 20px; }
        button { padding: 10px; width: 100%; border: none; background: #007BFF; color: white; cursor: pointer; }
        .tag-correct { color: green; font-weight: bold; }
        .tag-wrong { color: red; font-weight: bold; }
    </style>
</head>
<body>

<div class="box">
    <h2>Lab Task 02: Online Quiz Application</h2>
    <p>Answer all questions and submit to view your score and feedback.</p>

    <?php if (!empty($errors)): ?>
        <div class="error">
            <h4>Validation Errors:</h4>
            <ul>
                <?php foreach ($errors as $e): ?>
                    <li><?php echo $e; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <?php foreach ($questions as $qNo => $qData): ?>
            <div class="q">
                <h3>Q<?php echo $qNo; ?>: <?php echo $qData["question"]; ?></h3>

                <?php foreach ($qData["options"] as $opt): ?>
                    <?php
                        // Retain selected value after submission
                        $checked = (isset($userAnswers[$qNo]) && $userAnswers[$qNo] === $opt) ? "checked" : "";
                    ?>
                    <label>
                        <input type="radio" name="q<?php echo $qNo; ?>" value="<?php echo $opt; ?>" <?php echo $checked; ?>>
                        <?php echo $opt; ?>
                    </label>
                    <br>
                <?php endforeach; ?>

                <?php
                    // Show per-question correct/incorrect only if submitted & no validation errors
                    if ($submitted && empty($errors)) {
                        if ($resultDetails[$qNo] === "Correct") {
                            echo "<p class='tag-correct'>Result: Correct ✅</p>";
                        } else {
                            echo "<p class='tag-wrong'>Result: Incorrect ❌ (Correct Answer: <b>" . $correctAnswers[$qNo] . "</b>)</p>";
                        }
                    }
                ?>
            </div>
        <?php endforeach; ?>

        <button type="submit">Submit Quiz</button>
    </form>

    <?php if ($submitted && empty($errors)): ?>
        <div class="result">
            <h3 class="success">Quiz Completed!</h3>
            <p><b>Score:</b> <?php echo $score; ?> / <?php echo count($questions); ?></p>
            <p><b>Percentage:</b> <?php echo round($percentage, 2); ?>%</p>
            <p><b>Feedback:</b> <?php echo $feedback; ?></p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>
