AOS.init();

let fnameInput = document.getElementById("fnameInput");
let lnameInput = document.getElementById("lnameInput");
let emailInput = document.getElementById("emailInput");
let phoneNumInput = document.getElementById("phoneNumInput");
let inputfNameAlert = document.getElementById("inputfNameAlert");
let inputlNameAlert = document.getElementById("inputlNameAlert");
let inputEmailAlert = document.getElementById("inputEmailAlert");
 let inputNumAlert = document.getElementById("inputNumAlert");
 let BasicsalaryInput = document.getElementById("BasicsalaryInput");
 let BasicsalaryAlert = document.getElementById("BasicsalaryAlert");
function validateFName() {
    let regex = /^([A-Z]|[a-z])[a-z]{2,8}$/;
    if (regex.test(fnameInput.value)== true) {
        inputfNameAlert.classList.replace("d-block" , "d-none");
    } else {
        inputfNameAlert.classList.replace("d-none" , "d-block");
    }
}
fnameInput.addEventListener("keyup" , function(){
    validateFName(fnameInput.value);
})
function validateLName() {
    let regex = /^([A-Z]|[a-z])[a-z]{2,8}$/;
    if (regex.test(lnameInput.value)== true) {
        inputlNameAlert.classList.replace("d-block" , "d-none");
    } else {
        inputlNameAlert.classList.replace("d-none" , "d-block");
    }
}
lnameInput.addEventListener("keyup" , function(){
    validateLName(lnameInput.value);
})

function validatePhone() {
    var regex = /^(002)?01(1|0|5|2)[0-9]{8}$/;
    if (regex.test(phoneNumInput.value)== true) {
        inputNumAlert.classList.replace("d-block" , "d-none");
    } else {
        inputNumAlert.classList.replace("d-none" , "d-block");
    }
}
phoneNumInput.addEventListener("keyup" , function(){
    validatePhone(phoneNumInput.value);
})
function validateEmail() {
    let  regex = /^[a-zA-Z0-9]{5,60}@[a-z]{3,10}.com$/;
    if (regex.test( emailInput.value)== true) {
        inputEmailAlert.classList.replace("d-block" , "d-none");
    } else {
        inputEmailAlert.classList.replace("d-none" , "d-block");
    }
}
emailInput.addEventListener("keyup" , function(){
    validateEmail(emailInput.value);
})
function validatePhone() {
    var regex = /^\d{1,6}(?:\.\d{0,2})?$/;
    if (regex.test(BasicsalaryInput.value)== true) {
        BasicsalaryAlert.classList.replace("d-block" , "d-none");
    } else {
        BasicsalaryAlert.classList.replace("d-none" , "d-block");
    }
}
BasicsalaryInput.addEventListener("keyup" , function(){
    validatePhone(BasicsalaryInput.value);
})
