//Register Form Validation

const registerForm = document.getElementById("registerForm");
registerForm.addEventListener('blur', (event) => {
    console.log(event);
    if (event.target.value != '') event.target.classList.remove('is-invalid');
    registerValidation();
}, true);

function registerValidation() {
    //Variables
    var errors = 0;
    registerForm.classList.remove('is-invalid');
    var nameRegister = document.getElementById("nameRegister");
    var emailRegister = document.getElementById("emailRegister");
    var passwordRegister = document.forms["registerForm"]["passwordRegister"];
    var password2 = document.forms["registerForm"]["password2"];
    var direction = document.getElementById("direction");
    var city=document.getElementById("city");
    var provincia = document.forms["registerForm"]["provincia"];
    var zipCode= document.getElementById("zipCode");
    var phoneRegister=document.getElementById("phoneRegister");
    var terms = document.forms["registerForm"]["terms"];

    //Condicionals 
    if (nameRegister.value == "") {
        nameRegister.classList.add('is-invalid');
        document.getElementById("errorNameRegister").textContent = "This field is required";
        errors++;
    }
    if (emailRegister.value == "" || !emailValidation(emailRegister.value)) {
        emailRegister.classList.add("is-invalid");
        document.getElementById("errorEmailRegister").textContent = "Invalid field, please fill up your email";
        errors++;
    }
    if (passwordRegister.value == "") {
        passwordRegister.classList.add("is-invalid");
        document.getElementById("errorPasswordRegister").textContent = "Please fill up your password";
        errors++;
    }
    if (password2.value == "" || passwordRegister.value !== password2.value) {
        password2.classList.add("is-invalid");
        document.getElementById("errorPassword2").textContent = " Passwords do not match";
        errors++;
    }
    if (direction.value == "") {
        direction.classList.add('is-invalid');
        document.getElementById("errorDirection").textContent = "This field is required";
        errors++;
    }
    if (city.value == "") {
        city.classList.add('is-invalid');
        document.getElementById("errorCity").textContent = "This field is required";
        errors++;
    }
    if (provincia.value == "") {
        provincia.classList.add('is-invalid');
        document.getElementById("errorProvincia").textContent = "This field is required";
        errors++;
    }
    if (zipCode.value == "") {
        zipCode.classList.add('is-invalid');
        document.getElementById("errorZipCode").textContent = "This field is required";
        errors++;
    }
    if (phoneRegister.value == "" || !phoneValidation(phoneRegister.value)) {
        phoneRegister.classList.add("is-invalid");
        document.getElementById("errorPhoneRegister").textContent = "Invalid field, please fill up your phone number";
        errors++;

    }
    if (!terms.checked) {
        terms.classList.add('is-invalid');
        document.getElementById("errorTerms").textContent = "You must accept the terms"
        errors++;
    }
    if (errors > 0) {
        return false;
    } else {
        return true;
    }
}
// Functions 
function emailValidation(emailRegister) {
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(emailRegister) ? true : false;
}
function phoneValidation(phoneRegister){
    var regex=/(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}/;
    return regex.test(phoneRegister)?true:false;
}