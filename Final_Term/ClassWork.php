<?php
$student = array(
    "name"  => "Amit Datta Dip",
    "id"    => "22-48860-3",
    "dept"  => "CSE",
    "marks" => array(85, 78, 92, 74)
);
echo "<h2>Student Information</h2>";
foreach ($student as $key => $value) {
    if ($key == "marks") {
        echo "Marks: ";
        foreach ($value as $m) {
            echo $m . " ";
        }
        echo "<br>";
    } else {
        echo ucfirst($key) . ": " . $value . "<br>";
    }
}
$total = 0;
foreach ($student["marks"] as $mark) {
    $total += $mark;
}
$average = $total / count($student["marks"]);