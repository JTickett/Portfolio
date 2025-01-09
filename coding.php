<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $pageTitle = "Coding Examples";
        include('src/head.php');
    ?>
</head>
<body>
    <img id="background-image" src="https://jtickett.github.io/Portfolio/img/waterposter.jpg" alt="Background Image"></img>
    <video id="background-video" src="img/waterUHD.mp4" autoplay="true" loop="true" muted="true" poster="img\waterposter.jpg"></video>

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

            <section id="coding-section" class="section">

                <div id="scs-spacer"></div>

                
                <header id="scs-header">
                    <h2 class="section-title">Coding Examples</h2>
                </header>

                <div id="scs-wrapper">

                    <h3>HTML5</h3>
                    <p>
                        Coming Soon...
                    </p>

                    <h3>CSS3</h3>
                    <p>
                        Coming Soon...
                    </p>

                    <h3>JavaScript</h3>
                    <p>
                        Coming Soon...
                    </p>

                    <h3>PHP</h3>
                    <p>
                        Coming Soon...
                    </p>

                    <h3>C# .NET</h3>
                    <p>
                        Coming Soon...
                    </p>

                    <h3>SQL</h3>
                    <p>
                        Coming Soon...
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
</body>
</html>