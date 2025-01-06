<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $pageTitle = "SCS Scheme";
        include('src/head.php');
    ?>
</head>
<body>
    <img id="background-image" src="https://jtickett.github.io/Portfolio/img/waterposter.png" alt="Background Image"></img>
    <video id="background-video" src="img/waterUHD.mp4" autoplay="true" loop="true" muted="true" poster="img\waterposter.png"></video>

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

            <section id="scs-section" class="section">

                <div id="scs-spacer"></div>

                
                <header id="scs-header">
                    <h2 class="section-title">SCS Scheme</h2>
                </header>

                <div id="scs-wrapper">

                    <h3>Introduction to Scion Coalition Scheme</h3>
                    <p>
                        The Scion Coalition Scheme is an intensive, specially tailored training program run by Netmatters in order to give willing candidates 
                        the opportunity to enter the industry as web developers. Under the supervision of senior web developers, scions generally aim to complete 
                        training within six to nine months. The course is intensive and therefore the level of learning achieved is extensive in a short space of time.
                    </p>

                    <h3>Treehouse</h3>
                    <p>
                        Treehouse is an online learning community, featuring videos covering a number of topics from basic HTML to C# programming, 
                        iOS development, data analysis, and more. By completing courses users can earn points, allowing them to track their progress 
                        and see how much they?ve covered in certain areas.
                    </p>
                    <a href="https://teamtreehouse.com/profiles/jamestickett2">
                        Total Score
                    </a>

                    <h3>About Netmatters</h3>
                    <ul>
                        <li>Established in 2008</li>
                        <li>Norfolk's leading technology company</li>
                        <li>Winner of the Princess Royal Training Award</li>
                        <li>Winner of EDP Skills of Tomorrow Award</li>
                        <li>80+ staff, 2 locations across Norfolk</li>
                        <li>Digital Marketing, Website & Software development & IT Support</li>
                        <li>Broad spectrum of clients, working nationwide</li>
                        <li>Operate to strict company values</li>
                    </ul>
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