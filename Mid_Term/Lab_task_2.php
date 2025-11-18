<!DOCTYPE html>
<html>
<head>
<title>Lab Task 2</title>
<link rel="stylesheet" href="Lab_task_2.css">
</head>
<body>
<center>
<form class="xform" onsubmit="return false">
<center><h1>Registration Form</h1></center>

Full Name:
<input type="text" id="name" class="Amit" placeholder="Enter your full name"><br><br>  

Email:
<input type="text" id="email"class="Amit" placeholder="Enter your email"><br><br>

Phone Number:
<input type="text" id="pnumber" class="Amit" placeholder="Enter your phone number"><br><br>

Password:
<input type="text" id="password" class="Amit" placeholder="Enter your password"><br><br>

Confirm Password:
<input type="text" id="cpassword" class="Amit" placeholder="Confirm your password"><br><br>

<button id="B1" class="btn" onclick="reg()">Register</button>
<div id="D1" style="background-color: indianred; color: white; border-radius: 10px; border-color: red;margin: 10px 0px;"></div>
<div id="D2" style="background-color:  lightgreen; color: white; border-radius: 10px; border-color: green;"></div>

</form>
<form class="xform" onsubmit="return false">
<center><h1>Activity Selection</h1></center>

    
Activity Name:
<input type="text" id="aname" class="Amit" placeholder="Enter activity name"><br><br>
<button id="B2" class="btn" onclick="AddActivity()">Add Activity</button><br> <br>

<div id="D3" style="margin: 10px 0px"></div>
<button id="B3" style="border: solid; border-color: red; background-color: indianred; color: white; margin: 10px 0px" onclick="RemoveActivity()">Delete</button>

</form>
</center>
<script src="Lab_task_Validation.js"></script> 
</body>
</html>