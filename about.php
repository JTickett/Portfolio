<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $pageTitle = "About Me";
    include('src/head.php');
    ?>
</head>

<body>
    <img id="background-image" src="/img/waterposter.jpg" alt="Background Image"></img>
    <video id="background-video" src="/img/waterUHD.mp4" autoplay loop muted poster="/img/waterposter.jpg"></video>

    <div id="page-wrapper">


        <?php
        include('src/nav.php');
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
                <h1 id="banner-text">
                    James Tickett
                </h1>
                <h3 id="banner-subtext">
                    Software Developer
                </h3>

            </div>
            <a id="banner-link" href="#scs-header">
                Scroll Down
                <br>
                <span class="icon-chevron-down"></span>
            </a>
        </header>

        <main id="main">

            <div id="banner-gradient"></div>

            <section id="about-section" class="section">

                <div id="scs-spacer"></div>


                <header id="scs-header">
                    <h2 class="section-title">About Me</h2>
                </header>

                <div id="scs-wrapper">

                    <h3>Personal</h3>
                    <p>
                        I have been passionate about technology since the early days of MS-DOS and Windows 3.11, sparking a lifelong curiosity for both hardware and software. Over the years, I have explored a variety of programming languages and frameworks, largely through self-driven learning. I thrive on new challenges and enjoy creating innovative solutions to complex problems. Recently, I've refocused on development, updating my skills to become a full-stack developer and rekindling my passion for tech.
                    </p>

                    <h3>Education</h3>
                    <p>
                        I graduated with a 2:1 in BSc Computer-Aided Visualization from Anglia Ruskin University, where I honed my skills in 3D modeling, animation, and CAD/CAM. More recently, I completed the Scion Coalition Scheme, an intensive, award-winning training program simulating real-world web development. This experience expanded my expertise in front-end and back-end development, UI/UX design, and databases, while also allowing me to collaborate with and lead peers in team projects.
                    </p>

                    <h3>Experience</h3>
                    <p>
                        My professional background includes several years as a Lead Software Developer, where I worked with technologies like C#, Java, and SQL, creating solutions that integrated with platforms such as AudienceView and Xero. I've also gained practical experience in IT support, CAD visualization, and Drupal development. Most recently, I have been building a portfolio of modern, responsive web applications to showcase my full-stack development capabilities.
                    </p>

                    <h3>Skills</h3>
                    <p>
                        I am a quick learner and have a strong grasp of the fundamentals of web development. I am also a team player and enjoy collaborating with others to achieve common goals. I am a problem solver and enjoy the challenge of finding creative solutions to complex problems. I am a self-starter and enjoy working independently to achieve goals. I am a good communicator and enjoy working with others to achieve common goals.
                    </p>

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
    <?php
    include('src/footer.php');
    ?>
</body>

</html>