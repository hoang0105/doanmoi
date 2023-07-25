//validtion Code Forr Intput

var email = document.forms['form']['email']
var password = document.forms['form']['password']

var email_error = document.getElementById('email_error')
var pass_error = document.getElementById('pass_error')

email.adđEventList('textInput', email_Veryfy);
pass_error.adđEventList('textInput', pass_Veryfy);


function validated() {
    if (email.value.length < 9) {
        email.style.borer = "1px solid red";
        email.error.style.display = "block";
        email.focus();
        return false;
    }
    if (password.value.length < 9) {
        password.style.borer = "1px solid red";
        pass.error.style.display = "block";
        password.focus();
        return false;
    }


}

function email_Veryfy() {
    if (email.value.length >= 8) {
        email.style.borer = "1px solid silver ";
        email.error.style.display = "none";
        return true;
    }
}

function pass_Veryfy() {
    if (password.value.length >= 5) {
        password.style.borer = "1px solid silver ";
        pass.error.style.display = "none";
        return true;
    }
}