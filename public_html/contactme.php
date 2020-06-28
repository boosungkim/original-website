<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Contact Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "./scripts/stylesheet.php"; ?>
  </head>
  <body>
    <div class='page'>
        <header class="site-header">
          <?php include "./scripts/nav.php"; ?>
        </header>
        <main>
            <h1 class='main-title'>
                <big>Contact Me</big> <br>
            </h1>
            <div class='links-contactform'>
              <a href="mailto:kimbo@dickinson.edu">
                <img src="images/logos/pixabay-email.png" alt='Email' width="40"/>
              </a>
              <a href="https://www.linkedin.com/in/boosungk/">
                <img src="images/logos/vecteezy-linkedin.svg" alt='LinkedIn' width="40"/>
              </a>
              <a href="https://twitter.com/bytesofboosung">
                <img src="images/logos/vecteezy-twitter.svg" alt='Twitter' width="40"/>
              </a>
            </div>
            <div class="contact-area">
              <p>or use this contact form!</p>
              <div class="contact-error">
              <?php
              if(isset($_GET['x'])){
                echo $_GET['x'];
              }
              ?>
              </div>
              <form class="contact-form" action="scripts/contactform.php" method="post">
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="mail" placeholder="Your Email">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="submit" name="submit">SEND EMAIL</button>
              </form>
            </div>
        </main>
    </div>
  </body>
</html>
