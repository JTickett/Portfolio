document.addEventListener('DOMContentLoaded', function() {

    // Create session variable
    var hasError = false;

    const kayleighsSpecialRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    const phoneRegex = /^[0-9]{10,15}$/;

    // Get the form element
    const form = document.getElementById('contact-form');

    // Assign form elements to variables
    const firstnameField = form.elements['contact-firstname'];
    const lastnameField = form.elements['contact-lastname'];
    const emailField = form.elements['contact-email'];
    const phoneField = form.elements['contact-phone'];
    const subjectField = form.elements['contact-subject'];
    const messageField = form.elements['contact-message'];


        
    // Add an event listener to the form
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const messageBoxes = document.getElementById('message-area');
        messageBoxes.innerHTML = '';

        // If any of the fields are invalid, alert the user
        if (isFormValid()) {
            //alert('Please fill in all required fields');
            console.log('Form Submitting...');
            submitForm(nameField.value.trim(), companyField.value.trim(), emailField.value.trim(), phoneField.value.trim(), messageField.value.trim(), marketing.checked);
        } else {
            //alert('Form submitted');
            console.log('Alert user to fill in all required fields');
        }
    });

    

});



// Not sure if this is needed or not since it's not a required field, but it may need some sanitisation done to it
function isCompanyValid() {
    const company = companyField.value.trim();
    if (company === '') {
        companyField.classList.add('has-error');
        hasError = true;
        console.log('Company field blank');
        return false;
    } else {
        companyField.classList.remove('has-error');
        hasError = false;
        console.log('Company field valid');
        return true;
    }
}

function isEmailValid() {
    const email = emailField.value.trim();
    if (email === '') {
        emailField.classList.add('has-error');
        hasError = true;
        console.log('Email field blank');
        return false;
    } else if (!kayleighsSpecialRegex.test(email)) {
        emailField.classList.add('has-error');
        hasError = true;
        console.log('Email field invalid');
        return false;
    } else {
        emailField.classList.remove('has-error');
        hasError = false;
        console.log('Email field valid');
        return true;
    }
}

function isPhoneValid() {
    const phone = phoneField.value.trim();
    if (phone === '') {
        phoneField.classList.add('has-error');
        hasError = true;
        console.log('Phone field blank');
        return false;
    } else if (!phoneRegex.test(phone)) {
        phoneField.classList.add('has-error');
        hasError = true;
        console.log('Phone field invalid');
        return false;
    } else {
        phoneField.classList.remove('has-error');
        hasError = false;
        console.log('Phone field valid');
        return true;
    }
}

// From what I can tell, this field doesn't check for a max length, however I did break it by using too many characters lol
function isMessageValid() {
    const message = messageField.value.trim();
    if (message === '') {
        messageField.classList.add('has-error');
        hasError = true;
        console.log('Message field blank');
        return false;
    } else if (message.length <= 5) {
        messageField.classList.add('has-error');
        hasError = true;
        console.log('Message field too short');
        return false;
    } else {
        messageField.classList.remove('has-error');
        hasError = false;
        console.log('Message field valid');
        return true;
    }
}

function isFormValid() {
    
    var nameValid = isNameValid();
    var emailValid = isEmailValid();
    var phoneValid = isPhoneValid();
    var messageValid = isMessageValid();

    if (nameValid && emailValid && phoneValid && messageValid) {
        return true;
    } else {
        return false;
    }
}
