function validateForm() {

    let fullname = document.forms['form']['name'].value;
    let email = document.forms['form']['email'].value;
    let password = document.forms['form']['password'].value;
    let Cpassword = document.forms['form']['Cpassword'].value;
    let country = document.forms['form']['country'].value;
    let gender = document.forms['form']['gender'].value;

    let name_err = document.getElementById('nameErr');
    let email_err = document.getElementById('emailErr');
    let password_err = document.getElementById('passwordErr');
    let Cpassword_err = document.getElementById('CpasswordErr');
    let country_err = document.getElementById('countryErr');
    let gender_err = document.getElementById('genderErr');

    name_err.innerHTML = "";
    email_err.innerHTML = "";
    password_err.innerHTML = "";
    Cpassword_err.innerHTML = "";
    country_err.innerHTML = "";
    gender_err.innerHTML = "";

    if(fullname == "") {
        name_err.innerHTML = "Please enter vaild name.";
        return false;
    }

    if(!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
        email_err.innerHTML = "Please enter valid email address.";
        return false;
    }

    if(password.length < 8){
        password_err.innerHTML = "Please enter valid password.";
        return false;
    }

    if(password !== Cpassword){
        Cpassword_err.innerHTML = "Please enter valid password.";
        return false;
    }

    if(country == ""){
        country_err.innerHTML = "Please select country name.";
        return false;
    }

    if(gender == ""){
        gender_err.innerHTML = "Please select your gender.";
        return false;
    }

    return true;
}