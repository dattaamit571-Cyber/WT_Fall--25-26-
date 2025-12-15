<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>

<body>

<h1>ASSESSMENT TASK</h1>
<?php
$name = $dob = $email = $gender = $blood = "";
$degree = [];
$nameErr = $dobErr = $emailErr = $genderErr = $degreeErr = $bloodErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["dob"])) {
        $dobErr = "DOB is required";
    } else {
        $dob = $_POST["dob"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["degree"])) {
        $degreeErr = "Select at least one degree";
    } else {
        $degree = $_POST["degree"];
    }

    if (empty($_POST["blood"])) {
        $bloodErr = "Blood group is required";
    } else {
        $blood = $_POST["blood"];
    }
}
function test_input($data)
{
    return trim($data);
}
?>
<form method="post" action="">

    Name:
    <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color:red;"><?php echo $nameErr; ?></span>
    <br><br>
    
    DOB:
    <input type="date" name="dob" value="<?php echo $dob; ?>">
    <span style="color:red;"><?php echo $dobErr; ?></span>
    <br><br>

    Email:
    <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color:red;"><?php echo $emailErr; ?></span>
    <br><br>
    
    Gender:
    <input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
    <input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
    <input type="radio" name="gender" value="Other" <?php if($gender=="Other") echo "checked"; ?>> Other
    <span style="color:red;"><?php echo $genderErr; ?></span>
    <br><br>
    Degree:
    <input type="checkbox" name="degree[]" value="SSC"> SSC
    <input type="checkbox" name="degree[]" value="HSC"> HSC
    <input type="checkbox" name="degree[]" value="BSc"> BSc
    <input type="checkbox" name="degree[]" value="MSc"> MSc
    <span style="color:red;"><?php echo $degreeErr; ?></span>
    <br><br>
    Blood Group:
    <select name="blood">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>
    <span style="color:red;"><?php echo $bloodErr; ?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>