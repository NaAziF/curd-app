document.getElementById('signUpDiv').style="display:none";

function inputValidator(e) {
    let warningDiv = document.getElementById('warning');
    let userName = document.getElementById('inputName3');
    let email = document.getElementById('inputEmail3');
    let phone = document.getElementById('inputPhone');
    let password = document.getElementById('inputPassword3');
    let confirmPassword = document.getElementById('inputPassword2');
    if (userName.value == "" || email.value == "" || password.value == "" || confirmPassword.value == "" || phone.value == "") {
        warningDiv.innerHTML = "<b>Please Fill All The Details</b>"
        e.preventDefault();
        return false;
    } else if (confirmPassword.value != password.value) {

        warningDiv.innerHTML = "<b>Passwords Did Not match</b>"

        e.preventDefault();
        return false;
    }
}

function hideSignUp(hide,show) {
  
    
    let div=document.getElementById(hide)
    div.style="display:none";  
    
    let div2=document.getElementById(show)
    div2.style="display:block";}   


function loginValidator(e) {
    let warningDiv = document.getElementById('warning-2');
  
    let email = document.getElementById('loginEmail');
  
    let password = document.getElementById('loginPassword');
    
    if (email.value == "" || password.value == "") {
        warningDiv.innerHTML = "<b>Please Enter Email/Phone No. & Password</b>"
        e.preventDefault();
        return false;


    }}
  