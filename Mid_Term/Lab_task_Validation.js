function reg() {
    let FullName=document.getElementById("name").value;
    let Email=document.getElementById("email").value.trim();
    let phoneNumber=document.getElementById("pnumber").value.trim();
    let Password=document.getElementById("password").value.trim();
    let ConfirmPassword=document.getElementById("cpassword").value.trim();
    let DIV1=document.getElementById("D1");
    let DIV2=document.getElementById("D2");

    if(FullName === "" || Email === "" || phoneNumber === "" || Password === "" || ConfirmPassword === ""){
        DIV1.style.backgroundcolor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "All fields are required!";
        return false;
    }
    let ValidEmail = Email.includes("@");
    if(ValidEmail === false){
        DIV1.style.backgroundcolor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Invalid Email Address! Must Contain '@'";
        return false;
    }
    if(isNaN(phoneNumber)){
        DIV1.style.backgroundcolor = "indianred";
        DIV1.style.color = "white";
        DIV1.innerHTML = "Phone Number must be numeric!";
        return false;
    }