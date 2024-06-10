

//  An effect to make the Banner Text gently fade in from transparent
function fadeIn(){

    $("#banner-text").fadeIn(3000);

}

//  A subtle wave animation effect for the Banner Text
function makeWave(){
    const banner = document.querySelector("#banner-text");
    banner.innerHTML = banner.textContent.replace(/\S/g, '<span class="wave">$&</span>');

    const element = document.querySelectorAll("span");
    for (let i=0; i<element.length; i++) {
        element[i].style.animationDelay = i*0.10 + "s";
    }
}




function checkEmailValid($email){
    return true;
}

//if email is correct and req fields complete then submit 


function submitContactForm(){
    //  Read all the values from the input fields
    // const conFirst = document.querySelector("#contact-firstname")
    // const conLast = document.querySelector("#contact-lastname")
    // const conEmail = document.querySelector("#contact-email")
    // const conPhone = document.querySelector("#contact-phone")
    // const conSubject = document.querySelector("#contact-subject")
    // const conMessage = document.querySelector("#contact-message")

    const conFirst = $("#contact-firstname")
    const conLast = $("#contact-lastname")
    const conEmail = $("#contact-email")
    const conPhone = $("#contact-phone")
    const conSubject = $("#contact-subject")
    const conMessage = $("#contact-message")

    //  Store in an array (for looping)
    const conFields = [conFirst,conLast,conEmail,conPhone,conSubject,conMessage];

    //  Create an object to track missing fields
    let errors = {};

    //  Check that none of the required values are missing
    for (field in conFields) {

        //  Debug data
        console.log("Field Name: " + field);
        console.log("Field Value: " + conFields[field].val());

        if (conFields[field].val() == "") {
            errors[field] = true;
        } else {
            errors[field] = false;
        }
    }

    //  1. Report on any missing fields
    console.log(errors);
    //  Mark fields as incomplete

    //  2. Check validity of email
    let emailValid = checkEmailValid()
    
    if (emailValid) {
        // Form Submit!
        console.log("Form completed successfully");
        alert("Success!");
    } else {
        //  Display validation error.
    }
}
