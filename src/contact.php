<section id="contact-section" class="section">
    <div id="contact-wrapper">

        <header>
            <h2 class="section-title">Contact Me</h2>
        </header>

        <div id="message-area">
            <div id="success-message" class="message-box success">
                Placeholder text!
                <button class="success">x</button>
            </div>

            <div id="fail-message" class="message-box fail">
                Placeholder text!
                <button class="fail">x</button>
            </div>
        </div>

        <form id="contact-form" action="" onsubmit="submitContactForm(); return false;">



            <!-- <label id="contact-firstname-label" class="" for="contact-firstname">First Name</label><br> -->
            <input id="contact-firstname" class="" type="text" placeholder="First Name" name="contact-firstname">

            <!-- <label id="contact-lastname-label" class="" for="contact-lastname">Last Name</label><br> -->
            <input id="contact-lastname" class="" type="text" placeholder="Last Name" name="contact-lastname">

            <!-- <label id="contact-email-label" class="" for="contact-email">Email</label><br> -->
            <input id="contact-email" class="" type="text" placeholder="Email Address" name="contact-email">

            <!-- <label id="contact-phone-label" class="" for="contact-phone">Phone</label><br> -->
            <input id="contact-phone" class="" type="text" placeholder="Phone Number">

            <!-- <label id="contact-subject-label" class="" for="contact-subject">Subject</label><br> -->
            <input id="contact-subject" class="" type="text" placeholder="Subject">

            <!-- <label id="contact-message-label" class="" for="contact-message">Message</label><br> -->
            <textarea id="contact-message" rows="10" columns="40" class="" placeholder="Message"></textarea>

            <input id="contact-submit" class="" type="submit" value="Submit">

        </form>
    </div>
</section>