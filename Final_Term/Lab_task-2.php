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
