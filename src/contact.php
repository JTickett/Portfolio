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

        <form id="contact-form" method="POST" action="src/contact-validation.php">

            <div id="contact-firstname-wrapper">
                <label id="contact-firstname-label" class="required-field" for="contact-firstname">First Name</label><br>
                <input id="contact-firstname" class="" type="text" name="contact-firstname">
            </div>

            <div id="contact-lastname-wrapper">
                <label id="contact-lastname-label" class="" for="contact-lastname">Last Name</label><br>
                <input id="contact-lastname" class="" type="text" name="contact-lastname">
            </div>

            <div id="contact-email-wrapper">
                <label id="contact-email-label" class="required-field" for="contact-email">Email</label><br>
                <input id="contact-email" class="" type="text" name="contact-email">
            </div>

            <div id="contact-phone-wrapper">
                <label id="contact-phone-label" class="required-field" for="contact-phone">Phone</label><br>
                <input id="contact-phone" class="" type="text">
            </div>

            <div id="contact-subject-wrapper">
                <label id="contact-subject-label" class="required-field" for="contact-subject">Subject</label><br>
                <input id="contact-subject" class="" type="text">
            </div>

            <div id="contact-message-wrapper">
                <label id="contact-message-label" class="required-field" for="contact-message">Message</label><br>
                <textarea id="contact-message" rows="10" columns="40" class=""></textarea>
            </div>

            <input id="contact-submit" class="" type="submit" value="Submit">

        </form>
    </div>
</section>