<!DOCTYPE html>
<html>
<head><title>PHP Code</title></head>
 
<body>
<h1>ASSESSMENT TASK  </h1> 

<?php
$name= "";
$nameerror= "";

if (empty ($_POST["name"]))
{
$nameerror="Name is required";
}
else{
$name= test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name))
{
    $nameerror ="Only letters and white space allowed";
}
 
}
function test_input($data)
{
$data = trim($data);
return $data;
}

?>
<form method="post" action="">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<?php echo $nameerror; ?> <br>
DOB: <input type="date" name="dob" > <br>
Email : <input type="text" name="email"> <br>

<input type="submit" name="submit" value="Submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror))
{
echo "<h3> Your Input: </h3>";
echo "Name: ".$name. "<br>";
}

?>
</body>
</html>
