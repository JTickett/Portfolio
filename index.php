<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('inc/head.php');
    ?>
</head>
<body>
    <img id="background-image" src="https://jtickett.github.io/Portfolio/img/waterposter.jpg" alt="Background Image"></img>
    <video id="background-video" src="img/waterUHD.mp4" autoplay="true" loop="true" muted="true" poster="img\waterposter.jpg" playsinline></video>

    <div id="page-wrapper">
        
        <?php
            include('inc/nav.php');
        ?>

        <header id="banner-section">

            <!-- TODO: This needs to move out of this section, but for now I'm not sure how to get rid of the visible space at the bottom of the page -->
            <!-- Mobile Menu (with Burger) -->
            <nav>
                <div id="hamburger">
                    <div id="burger"></div>
                </div>
            </nav>

            <div id="banner-overlay">
                <!-- <img src="img\banner1.jpg" alt="Banner Image" id="banner-image"> -->
                <h1 id="banner-text">James Tickett</h1>
                <h3 id="banner-subtext">Software Developer</h3>

            </div>
            <a id="banner-link" href="#portfolio-header">
                Scroll Down
                <br>
                <span class="icon-chevron-down"></span>
            </a>
        </header>

        <main id="main">

            <div id="banner-gradient"></div>

            <section id="portfolio-section" class="section">

                <div id="portfolio-spacer"></div>

                
                <header id="portfolio-header">
                    <h2 class="section-title">Projects</h2>
                </header>

                <div id="portfolio-wrapper">

                    <div class="portfolio-item">
                        <img class="portfolio-item__image" src="img\homepage.png" alt="Project Placeholder Image">
                        <h3 class="portfolio-item__title">Netmatters Homepage</h3>
                        <a target="_blank" class="portfolio-item__link1" href="https://netmatters.james-tickett.netmatters-scs.co.uk/">View Project</a>
                        <a target="_blank" class="portfolio-item__link2" href="https://github.com/JTickett/Netmatters-Website">View Code</a>
                    </div>
                    <div class="portfolio-item">
                        <img class="portfolio-item__image" src="img\portfolio2.jpg" alt="Project Placeholder Image">
                        <h3 class="portfolio-item__title">Portfolio Website</h3>
                        <a target="_blank" class="portfolio-item__link1" href="https://james-tickett.netmatters-scs.co.uk/">View Project</a>
                        <a target="_blank" class="portfolio-item__link2" href="https://github.com/JTickett/Portfolio-Website">View Code</a>
                    </div>
                    <div class="portfolio-item">
                        <img class="portfolio-item__image" src="img\jsarray.png" alt="Project Placeholder Image">
                        <h3 class="portfolio-item__title">Javascript Array</h3>
                        <a target="_blank" class="portfolio-item__link1" href="https://js-array.james-tickett.netmatters-scs.co.uk/">View Project</a>
                        <a target="_blank" class="portfolio-item__link2" href="https://github.com/JTickett/jsarray">View Code</a>
                    </div>
                    <div class="portfolio-item">
                        <img class="portfolio-item__image" src="img\homepage.png" alt="Project Placeholder Image">
                        <h3 class="portfolio-item__title">Project Title</h3>
                        <a target="_blank" class="portfolio-item__link1" href="">View Project</a>
                        <a target="_blank" class="portfolio-item__link2" href="">View Code</a>
                    </div>
                    <div class="portfolio-item">
                        <img class="portfolio-item__image" src="img\homepage.png" alt="Project Placeholder Image">
                        <h3 class="portfolio-item__title">Project Title</h3>
                        <a target="_blank" class="portfolio-item__link1" href="">View Project</a>
                        <a target="_blank" class="portfolio-item__link2" href="">View Code</a>
                    </div>
                    <div class="portfolio-item">
                        <img class="portfolio-item__image" src="img\homepage.png" alt="Project Placeholder Image">
                        <h3 class="portfolio-item__title">Project Title</h3>
                        <a target="_blank" class="portfolio-item__link1" href="">View Project</a>
                        <a target="_blank" class="portfolio-item__link2" href="">View Code</a>
                    </div>

                </div>
            </section>

            <section id="contact-section" class="section">
                <div id="contact-wrapper">

                    <header>
                        <h2 class="section-title">Contact Me</h2>
                    </header>

                    <!-- <embed src="https://teamtreehouse.com/profiles/jamestickett2" style="width:500px; height: 300px;">    
                    <iframe src="https://teamtreehouse.com/profiles/jamestickett2" width="100%" height="300">
                        <p>Your browser does not support iframes.</p>
                    </iframe> -->

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
        </main>

        <footer id="footer">
            <a id="footer-link" href="#banner-section">
                <span class="icon-chevron-up"></span>
                <br>
                Back to Top
            </a>
            
        </footer>
    </div>
    
</body>
</html>