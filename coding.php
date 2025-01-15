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
                    <pre><code class="language-html">&lt;!-- 
    This HTML is used in my JS Array Project.
    It is a container for an image that is used to display a random image from a list.
    Since I need the image to not to have a preset URL on page load, I am generating a single transparent pixel to use as a temporary placeholder.
    This is a bit of a workaround to make it compliant with W3C HTML validation.
--&gt;
&lt;div class=&quot;image-container&quot; id=&quot;main-image-container&quot;&gt;
    &lt;img id=&quot;random-image&quot;
    src=&quot;data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7&quot;
    alt=&quot;Random Image&quot;&gt;
&lt;/div&gt;</code></pre>

                    <h3>CSS3 and SCSS</h3>
                    <pre><code class="language-css">@mixin button($bgcolor, $brcolor: null, $lheight: 20px, $bradius: $br-small) {
  //  Assign parameters to variables
  background-color: $bgcolor;
  border: 2px solid $brcolor;
  border-radius: $bradius;
  line-height: $lheight;

  //  Default styles of buttons
  color: white;
  display: inline-block;

  //  Prevent underlining links.
  text-decoration: none;
  :hover {
    text-decoration: none;
  }

  //  Allow for additional styles to be added.
  @content;
}</code></pre>
                    <pre><code class="language-css">/*
	This class is used on the image in my JS Array Project.
	It sets it up with a slight blur and desaturation
	When hovering above it, the filters are removed, and a slight zoom effect is used.
*/
.image-container{
  position: relative;
  display: inline-block;
  transition: transform $zoom-duration $zoom-curve;
  filter: blur(0.5px) saturate(0.9);
  cursor: pointer;
  &:hover {
    -ms-transform: scale($zoom-scale-thumb); /* IE 9 */
    -webkit-transform: scale($zoom-scale-thumb); /* Safari 3-8 */
    transform: scale($zoom-scale-thumb);
    filter: blur(0px) saturate(1);
    
    div.delete-button {
      display: block;
    }
  }
}

//	In another seperate file I have all my units stored as variables, allowing quick reconfiguration across the board.
$zoom-duration: 0.3s;
$zoom-scale-thumb: 1.1;
$zoom-scale-main: 1.03;
$zoom-curve: cubic-bezier(0.68, -0.55, 0.27, 1.55);
$transition-button: all 0.3s ease-in-out;</code></pre>

                    <h3>JavaScript</h3>
                    <pre><code class="language-javascript">// Assign image to email
function assignImageToEmail(email, imageURL) {
  const emailInput = document.getElementById("email-input");
  emailInput.setCustomValidity("");
  
  // If the email is not in the list, add it, otherwise do nothing
  if (!isEmailInList(email)) {
    log("New Email: " + email);
    addEmailToList(email);
  }

  // If the image is not already in the list, add it, otherwise report it as duplicated.
  if (!isImageInList(email, imageURL)) {
    addImageToList(email, imageURL);
  } else {
    emailInput.setCustomValidity(
      "This image is already assigned to this email address!"
    );
    emailInput.reportValidity();
    // Timeout needed to avoid clashing with the previous validity message.
    setTimeout(() => {
      emailInput.setCustomValidity("");
    }, 1000);
  }
}</code></pre>

                    <h3>PHP</h3>
                    <pre><code class="language-php">// This is only called once the form has been both validated and sanitised.
function insertContactSubmission(FormData $formData) {
    try {
        $pdo = getPDO();
        $query = "INSERT INTO contact (name, company, email, phone, message, marketing, date) VALUES (:name, :company, :email, :phone, :message, :marketing, NOW())";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':name', $formData->name);
        $stmt->bindValue(':company', $formData->company);
        $stmt->bindValue(':email', $formData->email);
        $stmt->bindValue(':phone', $formData->phone);
        $stmt->bindValue(':message', $formData->message);
        $stmt->bindValue(':marketing', $formData->marketing);
        $success = $stmt->execute();
        
        if ($success) {
            return ['success' => true, 'message' => 'Your message has been sent!'];
        } else {
            return ['success' => false, 'message' => 'Failed to insert contact submission.'];
        }
    } catch (PDOException $e) {
        error_log('PDO Error in insertContactSubmission: ' . $e->getMessage() . 
                  ' [Error Code: ' . $e->getCode() . ']');
        return [
            'success' => false, 
            'message' => 'Database error occurred.', 
            'debug' => $e->getMessage()  // Only in development environment
        ];
    } catch (Exception $e) {
        error_log('General Error: ' . $e->getMessage());
        return ['success' => false, 'message' => 'An error occurred.'];
    }
}</code></pre>

                    <h3>SQL</h3>
                    <pre><code class="language-sql">/*
    This Select statement will join a users table to an orders table, and then select the users who have made more than one order.
    It will then order the results by the total amount of orders they have made, and limit the results to 10.
    The offset is set to 5, so the first 5 results are skipped.
*/
SELECT u.id, u.name, u.email, o.order_id, o.total
FROM users u
JOIN orders o ON u.id = o.user_id
WHERE o.status = 'completed'
GROUP BY u.id, u.name, u.email, o.order_id, o.total
HAVING COUNT(o.order_id) > 1
ORDER BY o.total DESC
LIMIT 10 OFFSET 5;</code></pre>

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