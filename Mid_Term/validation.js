function SubmitForm() {
    let name = document.getElementById("Fullname").value.trim();
    let email = document.getElementById("Email").value.trim();
    let phone = document.getElementById("Phone").value.trim();
    let pass = document.getElementById("Pass").value;
    let cPass = document.getElementById("CPass").value;
    if(!email
        alert("Email is required."
            return;
    )
    if(!phone.match(/^\d{10}$/)) {
        alert("Phone number must be 10 digits.");
        return;
    } 
    if(pass.length < 8) {
        alert("Password must be at least 8 characters long.");
        return;
    }
    if(pass !== cPass) {
        alert("Passwords do not match.");
        return;


    alert("Form submitted successfully!");
}