function Reg() {
    let FullName = document.getElementById("I1").value.trim();
    let Email = document.getElementById("I2").value.trim();
    let PhoneNumber = document.getElementById("I3").value.trim();
    let Password = document.getElementById("I4").value.trim();
    let ConfirmPassword = document.getElementById("I5").value.trim();

    let DIV1 = document.getElementById("D1");
    let DIV2 = document.getElementById("D2");

    DIV1.style.backgroundColor = "indianred";
    DIV1.style.color = "white";
    DIV1.style.padding = "10px";
    DIV1.style.borderRadius = "10px";

    DIV2.style.backgroundColor = "lightgreen";
    DIV2.style.color = "white";
    DIV2.style.padding = "10px";
    DIV2.style.borderRadius = "10px";

    // Validation
    if (FullName === "" || Email === "" || PhoneNumber === "" || Password === "" || ConfirmPassword === "") {
        DIV1.innerHTML = "All fields must be filled!";
        DIV2.innerHTML = "";
        return false;
    }

    if (!Email.includes("@")) {
        DIV1.innerHTML = "Invalid Email! Must contain '@'";
        DIV2.innerHTML = "";
        return false;
    }

    if (isNaN(PhoneNumber)) {
        DIV1.innerHTML = "Phone Number must be numeric!";
        DIV2.innerHTML = "";
        return false;
    }

    if (Password !== ConfirmPassword) {
        DIV1.innerHTML = "Password and Confirm Password must match!";
        DIV2.innerHTML = "";
        return false;
    }

    // Success
    DIV1.innerHTML = "";
    DIV2.innerHTML = `
        Registration Successful! <br>
        Name: ${FullName} <br>
        Email: ${Email} <br>
        Phone: ${PhoneNumber}
    `;

    return false;
}

function AddActivity() {
    let activity = document.getElementById("I6").value.trim();
    let DIV3 = document.getElementById("D3");

    if (activity === "") {
        DIV3.innerHTML = "Activity cannot be empty!";
        return false;
    }

    let p = document.createElement("p");
    p.textContent = activity;

    DIV3.appendChild(p);
}

function RemoveActivity() {
    let DIV3 = document.getElementById("D3");
    DIV3.innerHTML = ""; // Clears all activities
}
