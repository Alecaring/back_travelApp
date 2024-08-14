import './bootstrap';
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

function removeTextColor(e) {
    e.classList.remove('text-success');
    e.classList.remove('text-white');
}

function checkColortxt(condition, elem) {
    condition ? elem.classList.add('text-success') : elem.classList.add('text-white');
}

document.addEventListener('DOMContentLoaded', () => {

    const regPassElem = document.getElementById('regPassword');
    const reg2PassElem = document.getElementById('password-confirm');
    const pLenghtelem = document.getElementById('pLenght');
    const pCharElem = document.getElementById('pCharM');
    const pNumElem = document.getElementById('pNum');
    const pCharSpecialElem = document.getElementById('pCharSpecial');
    const layerButtonElem = document.getElementById('layerButton'); // Bottone da nascondere
    const submitButtonElem = document.getElementById('submitButton'); // Bottone per inviare il form
    const emailElem = document.getElementById('emailReg'); // Elemento input email
    const emailFeedbackElem = document.getElementById('emailFeedback'); // Feedback per l'email
    const nameElem = document.getElementById('nameReg'); // Elemento input nome
    const nameFeedbackElem = document.getElementById('nameFeedback'); // Feedback per il nome
    const errorMessageElem = document.getElementById('errorMessages'); // Elemento per mostrare messaggi di errore


    const validateName = () => {
        const nameValue = nameElem.value;
        const nameRegex = /^[a-zA-Z\s]+$/; // Solo lettere e spazi sono consentiti

        // Validazione nome
        const isNameValid = nameRegex.test(nameValue) && nameValue.trim().length >= 3;
        if (isNameValid) {
            nameFeedbackElem.textContent = "Nome valido";
            nameFeedbackElem.classList.remove('text-white');
            nameFeedbackElem.classList.add('text-success');
            nameElem.classList.add('is-valid');
            nameElem.classList.remove('is-invalid')
        } else {
            nameFeedbackElem.textContent = "Nome non valido (minimo 3 caratteri, solo lettere)";
            nameFeedbackElem.classList.remove('text-success');
            nameFeedbackElem.classList.add('text-white');
            nameElem.classList.add('is-invalid');
            nameElem.classList.remove('is-valid');
        }

        return isNameValid;
    };

    const validateEmail = () => {
        const emailValue = emailElem.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regex per validare il formato email

        // Validazione email
        const isEmailValid = emailRegex.test(emailValue);
        if (isEmailValid) {
            emailFeedbackElem.textContent = "Email valida";
            emailFeedbackElem.classList.remove('text-white');
            emailFeedbackElem.classList.add('text-success');
            emailElem.classList.add('is-valid');
            emailElem.classList.remove('is-invalid')


        } else {
            emailFeedbackElem.textContent = "Email non valida";
            emailFeedbackElem.classList.remove('text-success');
            emailFeedbackElem.classList.add('text-white');
            emailElem.classList.add('is-invalid');
            emailElem.classList.remove('is-valid');


        }

        return isEmailValid;
    };

    const validatePassword = () => {
        const value = regPassElem.value;
        const value2 = reg2PassElem.value;

        const minLength = 8;
        const hasLowerCase = /[a-z]/.test(value);
        const hasUpperCase = /[A-Z]/.test(value);
        const hasDigit = /\d/.test(value);
        const hasSpecialChar = /[@$!%*?&]/.test(value);

        // Validazione lunghezza
        const isLengthValid = value.length >= minLength;
        removeTextColor(pLenghtelem);
        checkColortxt(isLengthValid, pLenghtelem);

        // Validazione lettera maiuscola
        removeTextColor(pCharElem);
        checkColortxt(hasUpperCase, pCharElem);

        // Validazione numeri
        removeTextColor(pNumElem);
        checkColortxt(hasDigit, pNumElem);

        // Validazione caratteri speciali
        removeTextColor(pCharSpecialElem);
        checkColortxt(hasSpecialChar, pCharSpecialElem);

        // Verifica se entrambe le password sono identiche
        const passwordsMatch = value === value2;

        if (passwordsMatch) {
            reg2PassElem.classList.add('is-valid');
            reg2PassElem.classList.remove('is-invalid');
        } else {
            reg2PassElem.classList.remove('is-valid');
            reg2PassElem.classList.add('is-invalid')

        }

        if (isLengthValid && hasLowerCase && hasUpperCase && hasDigit && hasSpecialChar && passwordsMatch) {
            console.log('Tutti i criteri sono soddisfatti e le password corrispondono.');
            return true;
        } else {
            console.log('Criteri non soddisfatti o le password non corrispondono.');
            return false;
        }
    };

    const validateForm = () => {
        const isNameValid = validateName();
        const isEmailValid = validateEmail();
        const isPasswordValid = validatePassword();

        let errorMessages = [];

        if (!isNameValid) {
            // errorMessages.push("Il nome non è valido. Deve contenere solo lettere e spazi, e avere almeno 3 caratteri.");
        }
        if (!isEmailValid) {
            // errorMessages.push("L'email non è valida. Assicurati che abbia un formato corretto.");
        }
        if (!isPasswordValid) {
            errorMessages.push("La password non è valida.");
        }

        if (errorMessages.length > 0) {
            // Mostra i messaggi di errore
            errorMessageElem.innerHTML = errorMessages.join("<br>");
            errorMessageElem.style.display = 'block';
            // Mostra il bottone layer e nascondi il bottone di submit
            layerButtonElem.style.display = 'block';
            submitButtonElem.style.display = 'none';
            console.log('Form non valido. Non può essere inviato.');
        } else {
            // Nascondi i messaggi di errore
            errorMessageElem.style.display = 'none';
            // Nascondi il bottone layer e mostra il bottone di submit
            layerButtonElem.style.display = 'none';
            submitButtonElem.style.display = 'block';
            console.log('Form valido. Può essere inviato.');
        }
    };

    if (regPassElem && reg2PassElem && emailElem && nameElem) {
        regPassElem.addEventListener('input', validateForm);
        reg2PassElem.addEventListener('input', validateForm);
        emailElem.addEventListener('input', validateForm);
        nameElem.addEventListener('input', validateForm);
    }

    // Gestisci il click sul pulsante layer
    layerButtonElem.addEventListener('click', (e) => {
        e.preventDefault();
        validateForm();
    });

});
// ---------------------------------






document.addEventListener('DOMContentLoaded', () => {

    const logEmailElem = document.getElementById('logEmail');
    const logPasswordElem = document.getElementById('logPassword');
    const emailValidElem = document.getElementById('emailValid');
    const passwordValidElem = document.getElementById('passwordValid');
    const layerButtonElem = document.getElementById('layerButton'); // Bottone da nascondere
    const submitButtonElem = document.getElementById('submitButton'); // Bottone per inviare il form
    const feedbackEmailLogElem = document.getElementById('feedbackEmailLog');
    const feedbackPasslLogElem = document.getElementById('feedbackPasslLog');

    const validateLogin = () => {
        const emailValue = logEmailElem.value;
        const passwordValue = logPasswordElem.value;

        // Validazione email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const isEmailValid = emailRegex.test(emailValue);
        removeTextColor(emailValidElem);
        checkColortxt(isEmailValid, emailValidElem);
        if (!isEmailValid) {
            feedbackEmailLogElem.textContent = "email errata";
            feedbackEmailLogElem.classList.remove('text-success')
            feedbackEmailLogElem.classList.add('text-danger');
            logEmailElem.classList.remove('is-valid');
            logEmailElem.classList.add('is-invalid');

        } else {
            feedbackEmailLogElem.textContent = "email corretta";
            feedbackEmailLogElem.classList.remove('text-danger');
            feedbackEmailLogElem.classList.add('text-success')
            logEmailElem.classList.add('is-valid');
            logEmailElem.classList.remove('is-invalid');


        }

        // Validazione password
        const minLength = 8;
        const isPasswordValid = passwordValue.length >= minLength;
        removeTextColor(passwordValidElem);
        checkColortxt(isPasswordValid, passwordValidElem);

        

            if (!isPasswordValid) {
                feedbackPasslLogElem.textContent = "password errata";
                feedbackPasslLogElem.classList.remove('text-success')
                feedbackPasslLogElem.classList.add('text-danger');
                logPasswordElem.classList.remove('is-valid');
                logPasswordElem.classList.add('is-invalid');
            } else {
                feedbackPasslLogElem.textContent = "password corretta";
                feedbackPasslLogElem.classList.remove('text-danger');
                feedbackPasslLogElem.classList.add('text-success')
                logPasswordElem.classList.add('is-valid');
                logPasswordElem.classList.remove('is-invalid');
            }
        

        // Controllo combinato

        if (isEmailValid && isPasswordValid) {
            // Nascondi il bottone layer e abilita il bottone di submit
            layerButtonElem.style.display = 'none';
            submitButtonElem.style.display = 'block';
            console.log('Email e password validi.');
        } else {
            // Mostra nuovamente il bottone layer se la validazione fallisce
            layerButtonElem.style.display = 'block';
            submitButtonElem.style.display = 'none';
            console.log('Email o password non validi.');
        }


    };

    if (logEmailElem && logPasswordElem) {
        logEmailElem.addEventListener('input', validateLogin);
        logPasswordElem.addEventListener('input', validateLogin);
    }

    layerButtonElem.addEventListener('click', (e) => {
        e.preventDefault();
        validateLogin();
    });

});

