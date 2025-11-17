<!DOCTYPE html>
<html>
<head>
    <title>Lab Task 2</title>

    <style>
        body{
            background-color: skyblue;
        }
        .xform{
            background-color: white;
            text-align: left;
            padding: 0px 20px;
            width: 450px;
            height: auto;
            border-radius: 20px;
        }
        .MI{
            border-radius: 5px;
            width: 450px;
            height: 25px;
        }
        .MB{
            background-color: blue;
            color: white;
        }
    </style>

</head>
<body>
    <center>
        <form class="xform" onsubmit="return false">
            <center>
                <h1>Participents Registration</h1>
            </center>

            Full Name:<br>
            <input type="text" id="name" class="MI" placeholder="Enter your full name"><br><br>

            Email:<br>
            <input type="text" id="email" class="MI" placeholder="Enter your email"><br><br>

            Phone Number:<br>
            <input type="text" id="phone" class="MI" placeholder="Enter your phone number"><br><br>

            Password:<br>
            <input type="text" id="password" class="MI" placeholder="Enter your password"><br><br>

            Confirm Password:<br>
            <input type="text" id="cpassword" class="MI" placeholder="Confirm your password"><br><br>

            <button id="B1" class="btn" onclick="validateForm()">Register</button>

            <div id="D1" style="background-color: indianred; color: white; border-radius: 10px; border-color: red; margin: 10px 0px;"></div>
            <div id="D2" style="background-color: lightgreen; color: white; border-radius: 10px; border-color: green;"></div>
        </form>

        <form class="xform" onsubmit="return false">
            <center><h1>Activity Selection</h1></center>

            Activity Name:<br>
            <input type="text" id="aname" class="MI" placeholder="Enter activity name"><br><br>

            <button id="B2" class="MB" onclick="AddActivity()">Add Activity</button><br><br>

            <div id="D3" style="background-color: indianred; color: white; border-radius: 10px; border-color: red; margin: 10px 0px;"></div>

            <button id="B3" style="border: solid; border-color: red; background-color: indianred; color: white; margin: 10px 0px" onclick="RemoveActivity()">Delete</button>
        </form>
    </center>

    <script src="Mid_Term/Lab_task_Validation.js"></script>
</body>
</html>
