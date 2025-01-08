<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $pageTitle = "James Tickett";
        include('src/head.php');
    ?>
</head>
<body>
    <img id="background-image" src="https://jtickett.github.io/Portfolio/img/waterposter.jpg" alt="Background Image"></img>
    <video id="background-video" src="img/waterUHD.mp4" autoplay="true" loop="true" muted="true" poster="img\waterposter.jpg" playsinline></video>

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
                        <img class="portfolio-item__image" src="img\jsarray2.png" alt="Project Placeholder Image">
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

            <?php
                include('src/contact.php');
            ?>
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