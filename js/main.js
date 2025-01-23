
let mobileNavIsOpen = false;


window.addEventListener('scroll', function (e) {
    if (window.scrollY > 100) {
        document.querySelector("#page-wrapper").classList.add('is-scrolling');
    } else {
        document.querySelector("#page-wrapper").classList.remove('is-scrolling');
    }
});



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

        const nav = document.querySelector('#sidenav');
        const navWrapper = document.querySelector('#sidenav-wrapper');
        const navMenu = document.querySelector('#sidenav-menu');
        // const navSocials = document.querySelector('#sidenav-socials');

        nav.classList.toggle('mobilenav');
        nav.classList.toggle('sidenav');
        // nav.classList.toggle('bonus');

        navWrapper.classList.toggle('mobilenav-wrapper');
        navWrapper.classList.toggle('sidenav-wrapper');
        navMenu.classList.toggle('mobilenav-menu');
        navMenu.classList.toggle('sidenav-menu');
        // navSocials.classList.toggle('mobilenav-socials');
        // navSocials.classList.toggle('sidenav-socials');
        
        
    
    });
    

})


function displayMobileNav(){


}







function checkEmailValid($email){
    return true;
}

//if email is correct and req fields complete then submit 










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
