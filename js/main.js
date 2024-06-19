
let mobileNavIsOpen = false;






//  This event is on the Page Load, and it's main purpose is to trigger the text animations
window.addEventListener('load', function () {


    const delay = 5000;

    //  Just for debug purposes :)
    console.log("Page Loaded: " + new Date(Date.now()).toISOString());

    //  Start wave animation
    makeWave()

    //  Set it to Flex, Hide it again, *then* fade in.
    //  This might seem weird, but it is kind of necessary to do it this way 
    $("#banner-section").css("display","flex").hide().fadeIn(delay);

    //  The idea was that this line would be spat out once the animation completed, but it doesn't appear to work that way at all... it's instant
    console.log("Fading in done: " + new Date(Date.now()).toISOString());

    
    const burgerIcon = document.querySelector('#hamburger');
    burgerIcon.addEventListener('click', function() {

        
        //  1. Make the sidebar display
        const $mobileNav = $('#sidenav');

        
        if (!mobileNavIsOpen) {
            //  If it's not already open, then open it
            $mobileNav.css('display','block').css('width','100%')
            //  and update the variable to show it's open
            mobileNavIsOpen = true;
        } else {
            $mobileNav.css('display','none').css('width','100%')
            mobileNavIsOpen = false;
        }

        

    
    });

})


function displayMobileNav(){


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







//  A subtle wave animation effect for the Banner Text
//  NOTE: Currently relying on Vanilla JS, but would like to convert to Jquery if possible :)
function makeWave(){
    const banner = document.querySelector("#banner-text");

    banner.innerHTML = banner.textContent.replace(/\S/g, '<span class="wave">$&</span>');

    const element = document.querySelectorAll("span");
    for (let i=0; i<element.length; i++) {
        element[i].style.animationDelay = i*0.10 + "s";
    }
}





//  NOTE: These FADE functions are no longer used, but there's no harm in keeping them and they can help demonstrate the workings of it.
//  An effect to make the Banner Text gently fade in from transparent
function fadeIn(){
    $("#banner-section").fadeIn(3000);
}
//  Testing Fade Out
function fadeOut(){
    $("#banner-section").fadeOut(3000);
}