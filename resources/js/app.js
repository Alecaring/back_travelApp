import './bootstrap';
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

// function validate() {
//     var email = document.getElementById("email");
//     var password = document.getElementById("password");

//     console.log(email.value);
//     console.log(password.value);


// }

document.addEventListener('DOMContentLoaded', function () {
    function validate(event) {
        event.preventDefault();

        var email = document.getElementById("email");
        var password = document.getElementById("password");
        var errorMessage = document.getElementById("error-message");

        var messages = [];

        if (!validateEmail(email.value)) {
            messages.push("Please enter a valid email address.");
        }

        if (!validatePassword(password.value)) {
            messages.push("The password must contain at least 6 characters.");
        }

        if (messages.length > 0) {
            displayErrors(messages, errorMessage);
        } else {
            errorMessage.innerHTML = "";
            errorMessage.classList.remove("alert", "alert-danger");

            event.target.querySelector('button[type="submit"]').disabled = true;
            event.target.submit();
        }
    }

    function validateEmail(email) {
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function validatePassword(password) {
        return password.length >= 6;
    }

    function displayErrors(messages, errorMessage) {
        errorMessage.innerHTML = messages.join("<br>");
        errorMessage.classList.add("alert", "alert-danger");
    }

    // var form = document.querySelector('form');
    // form.addEventListener('submit', validate);
});

