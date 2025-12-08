  <?php
  $student = array(
    "name"  => "Amit Datta",
    "id"    => "2025-12345",
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
