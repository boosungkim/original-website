<!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset="utf-8">
    <title>Boo Sung Kim's Projects</title>
    <?php include "./scripts/stylesheet.php"; ?>
  </head>
  <body>
    <div class='page'>
        <header class="site-header">
          <?php include "./scripts/nav.php"; ?>
        </header>
        <main>
            <h1 class='project-title-top'>
                <big>Boo Sung's Projects</big>
            </h1>
            <h1 class='project-title'>
                <small>Ongoing</small>
            </h1>
            <!-- <div class='project-post'>
              <div class=left-section>
                <h2>Data Structures and Algorithms from Scratch</h2>
                <p></p>
                <small><a href="https://github.com/boosungkim/dsa-from-scratch">Link to code</a></small>
              </div>
            </div> -->
            <div class='project-post'>
              <div class=left-section>
                <div>
                <h2>The Dickinson Menu Bot</h2>
                <small><a href="https://github.com/boosungkim/dickinson-menu-bot">GitHub</a></small>
                <p>A Java webscraper that extracts and emails the users the daily menu from the Dickinson College Dining website.</p>
                <br/>
                <p>Currently: Swtiching the code back to Python for better implementation of future ideas. Adding a subscription system.</p>
                </div>

                <span>
                  <p>Technology Used</p>
                  <div class="table-section">
                    <ul>
                      <li>Java</li>
                      <li>Shell scripting</li>
                    </ul>
                    <ul>
                      <li>Python</li>
                      <li>Raspberry Pi</li>
                    </ul>
                  </div>
                </span>
              </div>
              <div class='right-section'>
                <a href="images/menu.png"><img src="images/menu.png" alt='menu' width='450'/></a>
              </div>
            </div>
            <h1 class='project-title'>
                <small>Previous</small>
            </h1>
        </main>
    </div>
  </body>
</html>
