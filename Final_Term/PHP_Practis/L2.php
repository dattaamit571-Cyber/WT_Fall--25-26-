<?php
$result = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    if ($num1 === "" || $num2 === "") {
        $error = "Both numbers are required.";
    }
    elseif (!is_numeric($num1) || !is_numeric($num2)) {
        $error = "Please enter valid numeric values.";
    }
    else {
        switch ($operation) {
            case "+":
                $result = $num1 + $num2;
                break;

            case "-":
                $result = $num1 - $num2;
                break;

            case "*":
                $result = $num1 * $num2;
                break;

            case "/":
                if ($num2 == 0) {
                    $error = "Division by zero is not allowed.";
                } else {
                    $result = $num1 / $num2;
                }
                break;

            default:
                $error = "Invalid operation selected.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>

    <style>
        body {
            background: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .calculator {
            width: 300px;
            margin: 80px auto;
            padding: 20px;
            background: #222;
            border-radius: 10px;
            color: white;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            margin-top: 15px;
            background: #ff9800;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background: #e68900;
        }

        .result {
            margin-top: 15px;
            padding: 10px;
            background: #333;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
        }

        .error {
            margin-top: 15px;
            padding: 10px;
            background: #b71c1c;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>

<div class="calculator">
    <h2>Simple Calculator</h2>

    <form method="POST" action="">
        <input type="text" name="num1" placeholder="Enter first number"
               value="<?php if(isset($_POST['num1'])) echo $_POST['num1']; ?>">

        <input type="text" name="num2" placeholder="Enter second number"
               value="<?php if(isset($_POST['num2'])) echo $_POST['num2']; ?>">

        <select name="operation">
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (×)</option>
            <option value="/">Division (÷)</option>
        </select>

        <button type="submit">Calculate</button>
    </form>

    <?php if ($result !== "") { ?>
        <div class="result">
            Result: <?php echo $result; ?>
        </div>
    <?php } ?>

    <?php if ($error !== "") { ?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php } ?>

</div>

</body>
</html>
