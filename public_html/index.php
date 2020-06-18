<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Boo Sung Kim's Homepage</title>
    <link rel="stylesheet" href="styles/styles.css?version=1.0.0">
  </head>
  <body>
    <div class='page'>
      <header class="site-header">
          <?php include "./scripts/nav.php"; ?>
      </header>
      <main>
        <h1 class='main-title'>
          <big>Boo Sung Kim</big> <br>
          <small>Math student by day, CS student by night</small>
        </h1>
        <div class='links'>
          <div class='professional'>
            Professional:
            <a href="mailto:kimbo@dickinson.edu">
              <img src="images/logos/pixabay-email.png" alt='Email' width="23"/>
            </a>
            <a href="https://www.linkedin.com/in/boosungk/">
              <img src="images/logos/vecteezy-linkedin.svg" alt='LinkedIn' width="23"/>
            </a>
          </div>
          <div class='software'>
            Software:
            <a href="https://github.com/boosungkim">
              <img src="images/logos/vecteezy-github.svg" alt='GitHub' width="23"/>
            </a>
          </div>
          <div class='social'>
            Social:
            <a href="https://www.youtube.com/converge2diverge">
              <img src="images/logos/vecteezy-youtube.svg" alt='YouTube' width="23"/>
            </a>
            <a href="https://twitter.com/bytesofboosung">
              <img src="images/logos/vecteezy-twitter.svg" alt='Twitter' width="23"/>
            </a>
          </div>
        </div>
        <div class='main-section'>
            <div class='left'>
                <img src="images/profile.png" alt='Profile picture'>
            </div>
            <div class='right'>
                <h2>About Me</h2>
                <p>
                    Hello, my name is Boo Sung and I am from South Korea. I became passionate about math when I was 15 and began programming in early 2019. Now, I am a sophomore double majoring in Mathematics and Computer Science.
                </p>
                <p>
                    I write weekly blogs about Math and Computer Science related topics.
                </p>
                <p>
                    I also have a YouTube channel, <a href="https://www.youtube.com/converge2diverge">Converge2Diverge</a>, where I make videos about Math and Computer Science.
                </p>
                <p>
                    I am still exploring my different interests, but I currently have a strong passion in Linux, Machine Learning, and Open Source projects.
                </p>
            </div>
        </div>
        <div class='main-section'>
            <div class='left'>
                <h2>Studying and working at Dickinson College</h2>
                <p>
                    During my freshman year at college, I worked as a Phonathon student caller (meaning I solicited donations for my college) and a <a href="https://www.dickinson.edu/news/article/3634/quantifying_success">Quantitative Reasoning Associate</a> for MATH 170 Single Variable Calculus.
                </p>
                <p>
                    Starting next semester during my sophomore year, I will work as a Resident Advisor (provided students will return to campus) and a Teaching Assistant for MATH 171 Multivariable Calculus, Math Help Room, and CS Help Room.
                </p>
            </div>
            <div class='right'>
                <img src="images/dickinson.png" alt='Dickinson College'>
            </div>
        </div>
        <div class='main-section'>
          <div class='left'>
            <img src="images/linux-screenshot.png" alt='My Arch Linux setup'>
          </div>
          <div class='right'>
            <h2>My Linux passion</h2>
            <p>
              I was first introduced to Linux late 2019 and decided to try it out for myself early 2020. My first and current setup is Arch Linux on a ThinkPad X220.
            </p>
            <p>
              I just started using Linux a regular basis, so I am still busy exploring the wonders of customizability.
            </p>
            <p>
              My end goals are to use Linux on my ThinkPad as my daily driver and to get more involved with the Open Source community behind Linux and its many packages.
            </p>
          </div>
        </div>
        <div class='main-section'>
            <div class='left'>
              <h2>Converge2Diverge</h2>
              <p>
                <a href="https://www.youtube.com/converge2diverge">Converge2Diverge</a> (C2D) is a YouTube channel mainly about Mathematics, though I have started uploading Computer Science/Programming content recently.
              </p>
              <p>
                The logo, designed by my friend Andy Lee (<a href="https://www.instagram.com/hi_sseungchol/">his instagram</a>), is the Greek letter Phi (φ), which is the symbol for the Golden Ratio.
              </p>
              <p>
                The name "Converge2Diverge" stems from a Math high school club I founded back in 2017: Converge to Diverge. I chose the name for two reasons:
                <ul>
                  <li> 1) "converge" and "diverge" are math terms and</li>
                  <li> 2) I wanted the club to be a place where people can "converge" to "diverge" their ideas.</li>
                </ul>
              </p>
            </div>
            <div class='right'>
              <img src="images/c2d.png" alt='Converge2Diverge' width="400">
            </div>
        </div>
        <div class='recent-blogs'>
            <h2>Recent Blogs</h2>
            <table class='blogindex' style='width:100%'>
                  <tr>
                    <td style='width:10%'>2020/05/25</td>
                    <td style='width:40%'><a href="blogs/template.php">Test post</a></td>
                    <td style='width:50%'>[Sample][Tag][Right][Here]</td>
                  </tr>
                  <tr>
                    <td style='width:10%'></td>
                    <td style='width:40%'><a href=""></a></td>
                    <td style='width:50%'></td>
                  </tr>
                  <tr>
                    <td style='width:10%'></td>
                    <td style='width:40%'><a href=""></a></td>
                    <td style='width:50%'></td>
                  </tr>
            </table>
        </div>
      </main>
    </div>
  </body>
  <footer>
      <a href="https://www.vecteezy.com/free-vector/github">Github Vectors by Vecteezy</a>
  </footer>
</html>
