  <?php
  $student = array(
    "name"  => "Amit Datta dip",
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
if ($average >= 80) {
    $grade = "A";
} elseif ($average >= 60) {
    $grade = "B";
} elseif ($average >= 40) {
    $grade = "C";
} else {
    $grade = "F";
}
echo "<h2>Result Summary</h2>";
echo "Student Name: " . $student["name"] . "<br>";
echo "Total Marks: " . $total . "<br>";
echo "Average Marks: " . $average . "<br>";
echo "Grade: " . $grade . "<br>";

?>