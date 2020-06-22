<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Contact Me</title>
    <?php include "./scripts/stylesheet.php"; ?>
  </head>
  <body>
    <div class='page'>
        <header class="site-header">
          <?php include "./scripts/nav.php"; ?>
        </header>
        <main>
            <h1 class='main-title'>
                <big>Send Email</big> <br>
            </h1>
            <div class="f">
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
                <!-- <input type="submit" value="Submit"> -->
                <button type="submit" name="submit">SEND EMAIL</button>
              </form>
            </div>
        </main>
    </div>
  </body>
</html>
