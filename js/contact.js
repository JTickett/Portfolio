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
            submitForm(firstnameField.value.trim(), lastnameField.value.trim(), emailField.value.trim(), phoneField.value.trim(), subjectField.value.trim(), messageField.value.trim());
        } else {
            //alert('Form submitted');
            console.log('Alert user to fill in all required fields');
        }
    });

    
function submitForm(firstname, lastname, email, phone, subject, message) {

    const messageBoxes = document.getElementById('message-area');
    messageBoxes.innerHTML = '';

    const formData = new FormData();
    formData.append("firstname", firstname);
    formData.append("lastname", lastname);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("subject", subject);
    formData.append("message", message);

    fetch("src/contact-validation.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Show success message
            makeMessageBox(data.message, 'success');
            const form = document.getElementById('email-form');
            form.reset();
        } else {
            console.log('Error!');
            console.log(data);
            // Show error message

            for (let i = 0; i < data.message.length; i++) {
                makeMessageBox(data.message[i], 'fail');
            }
        }
    })
    .catch(error => {
        console.error("Error:", error);
        makeMessageBox("An unexpected error occurred. Please try again.", 'fail');
    });

}

function isNameValid() {
    // Get the name value
    const firstname = firstnameField.value.trim();

    // Check if it's blank
    if (firstname === '') {
        firstnameField.classList.add('has-error');
        hasError = true;
        console.log('First Name field blank');
        return false;
    } else {
        firstnameField.classList.remove('has-error');
        hasError = false;
        console.log('First Name field valid');

        // There doesn't need to be any more validation here
        return true;
    }
}

// Not sure if this is needed or not since it's not a required field, but it may need some sanitisation done to it
function isSubjectValid() {
    const subject = subjectField.value.trim();
    if (subject === '') {
        subjectField.classList.add('has-error');
        hasError = true;
        console.log('Subject field blank');
        return false;
    } else {
        subjectField.classList.remove('has-error');
        hasError = false;
        console.log('Subject field valid');
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
    
    var firstnameValid = isNameValid();
    var emailValid = isEmailValid();
    var phoneValid = isPhoneValid();
    var subjectValid = isSubjectValid();
    var messageValid = isMessageValid();

    if (firstnameValid && emailValid && phoneValid && subjectValid && messageValid) {
        return true;
    } else {
        return false;
    }
}

function makeMessageBox(message, type) {
    const messageBoxes = document.getElementById('message-area');
    const messageBox = document.createElement('div');
    const button = document.createElement('button');
    button.innerHTML = 'x';

    if (type === 'success') {
        messageBox.classList.add('message-box', 'success');
        button.classList.add('success');
    } else if (type === 'fail') {
        messageBox.classList.add('message-box', 'fail');
        button.classList.add('fail');
    }

    messageBox.innerHTML = message;
    messageBox.appendChild(button);
    messageBoxes.appendChild(messageBox);
}

});

