<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Boo Sung Kim's Homepage</title>
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
          <big>Boo Sung Kim</big> <br>
          <small>Math student by day, CS student by night</small>
          <small><a href="rss.xml">RSS</a></small>
        </h1>
        <div class="links-wrapper">
        <div class='links'>
          <div class='professional'>
            <p>Professional:</p>
            <a href="mailto:kimbo@dickinson.edu">
              <img src="images/logos/pixabay-email.png" alt='Email' width="23"/>
            </a>
            <a href="https://www.linkedin.com/in/boosungk/">
              <img src="images/logos/vecteezy-linkedin.svg" alt='LinkedIn' width="23"/>
            </a>
          </div>
          <div class='software'>
            <p>Software:</p>
            <a href="https://github.com/boosungkim">
              <img src="images/logos/vecteezy-github.svg" alt='GitHub' width="23"/>
            </a>
          </div>
          <div class='social'>
            <p>Social:</p>
            <a href="https://www.youtube.com/converge2diverge">
              <img src="images/logos/vecteezy-youtube.svg" alt='YouTube' width="23"/>
            </a>
            <a href="https://twitter.com/bytesofboosung">
              <img src="images/logos/vecteezy-twitter.svg" alt='Twitter' width="23"/>
            </a>
          </div>
        </div>
      </div>
        <div class='main-section'>
            <div class='img-section'>
                <img src="images/profile.png" alt='Profile picture'>
            </div>
            <div class='text-section' id="about-me">
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
        <div class='main-section' id="dickinson">
            <div class='text-section'>
                <h2>Studying and working at Dickinson College</h2>
                <p>
                    During my freshman year at college, I worked as a Phonathon student caller (meaning I solicited donations for my college) and a <a href="https://www.dickinson.edu/news/article/3634/quantifying_success">Quantitative Reasoning Associate</a> for MATH 170 Single Variable Calculus.
                </p>
                <p>
                    Starting next semester during my sophomore year, I will work as a Resident Advisor (provided students will return to campus) and a Teaching Assistant for MATH 171 Multivariable Calculus, Math Help Room, and CS Help Room.
                </p>
            </div>
            <div class='img-section'>
                <img src="images/dickinson.png" alt='Dickinson College'>
            </div>
        </div>
        <div class='main-section' id="linux">
          <div class='img-section'>
            <img src="images/thinkpad.png" alt='My Arch Linux setup'>
          </div>
          <div class='text-section'>
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
        <div class='main-section' id="c2d">
            <div class='text-section'>
              <h2>Converge2Diverge</h2>
              <p>
                <a href="https://www.youtube.com/converge2diverge">Converge2Diverge</a> (C2D) is a YouTube channel mainly about Mathematics, though I have started uploading Computer Science/Programming content recently.
              </p>
              <p>
                The logo, designed by my friend <a href="https://www.instagram.com/hi_sseungchol/">Andy Lee</a>, is the Greek letter Phi (φ), which is the symbol for the Golden Ratio.
              </p>
              <p>
                The name "Converge2Diverge" stems from a Math high school club I founded back in 2017: Converge to Diverge. I chose the name for two reasons:
                <ul>
                  <li> 1) "converge" and "diverge" are math terms and</li>
                  <li> 2) I wanted the club to be a place where people can "converge" to "diverge" their ideas.</li>
                </ul>
              </p>
            </div>
            <div class='img-section'>
              <img src="images/c2d.png" alt='Converge2Diverge'>
            </div>
        </div>
        <div class='recent-blogs'>
            <h2>Recent Blogs</h2>
            <div class='blogindex' style='width:100%'>
                  <div class='row'>
                    <p class='date'>2020/06/26</p>
                    <p class='title'><a href="blogs/june2020/blog-zero-why-i-started-a-blog.php">Blog Zero: Why I started a blog</a></p>
                    <p class='tags'>[Blog]</p>
                  </div>
                  <div class='row'>
                    <p class='date'></p>
                    <p class='title'><a href=""></a></p>
                    <p class='tags'></p>
                  </div>
                  <div class='row'>
                    <p class='date'></p>
                    <p class='title'><a href=""></a></p>
                    <p class='tags'></p>
                  </div>
            </table>
        </div>
      </main>
    </div>
  </body>
  <footer>
      <a href="https://www.vecteezy.com/free-vector/github">Github Vectors by Vecteezy</a>
  </footer>
</html>
