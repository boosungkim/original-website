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
        </h1>
        <div class="links-wrapper">
        <div class='links'>
          <div class='professional'>
            <p>Professional:</p>
            <a href="mailto:kimbo@dickinson.edu">
              <img src="images/logos/iconfinder-email.svg" alt='Email' width="25"/>
            </a>
            <a href="https://www.linkedin.com/in/boosungk/">
              <img src="images/logos/iconfinder-linkedin.svg" alt='LinkedIn' width="26"/>
            </a>
          </div>
          <div class='software'>
            <p>Software:</p>
            <a href="https://github.com/boosungkim">
              <img src="images/logos/iconfinder-github.svg" alt='GitHub' width="26"/>
            </a>
          </div>
          <div class='social'>
            <p>Social:</p>
            <a href="https://boosungkim.com/rss.xml">
              <img src="images/logos/iconfinder-rss.svg" alt='rss' width="25"/>
            </a>
            <a href="https://www.youtube.com/converge2diverge">
              <img src="images/logos/iconfinder-youtube.svg" alt='YouTube' width="25"/>
            </a>
            <a href="https://twitter.com/bytesofboosung">
              <img src="images/logos/iconfinder-twitter.svg" alt='Twitter' width="25"/>
            </a>
          </div>
        </div>
      </div>
        <div class='main-section'>
            <div class='img-section'>
                <img src="images/profile.png" alt='Profile picture'>
            </div>
            <div class='text-section' id="about-me">
                <h2>About me</h2>
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
                    I am still exploring different fields, but I currently interested in Software Engineering, Linux, Machine Learning, and Open Source projects.
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
        <div class='main-section' id="software-engineering">
          <div class='img-section'>
            <img src="images/software-engineering.JPG" alt='Software Engineering'>
          </div>
          <div class='text-section'>
            <h2>My software engineering passion</h2>
            <p>
              To me, the best part about software engineering is having the ability to make softwares that can assist people.
            </p>
            <p>
              When I first started programming, I created miscellaneous projects here and there. But while coding my first practical project, the <a href="projects.php#dickinson-menu-bot">Dickinson Menu Bot</a>, I felt a sense of accomplishment from creating a piece of software that actually helped people.
            </p>
            <p>
              Again, I am still exploring the diverse fields of programming, but I still love the idea of creating a product that can impact people positively.
            </p>
          </div>
        </div>
        <div class='main-section' id="linux">
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
          <div class='img-section'>
            <img src="images/thinkpad.png" alt='My Arch Linux setup'>
          </div>
        </div>
        <div class='main-section' id="c2d">
            <div class='img-section'>
              <img src="images/c2d.png" alt='Converge2Diverge'>
            </div>
            <div class='text-section'>
              <h2>Converge2Diverge</h2>
              <p>
                <a href="https://www.youtube.com/converge2diverge">Converge2Diverge</a> (C2D) is a YouTube channel mainly about Mathematics and Computer Science.
              </p>
              <p>
                The logo, designed by my friend <a href="https://www.instagram.com/hi_sseungchol/">Andy Lee</a>, is the Greek letter Phi (φ), which is the symbol for the Golden Ratio.
              </p>
              <p>
                The name "Converge2Diverge" stems from a Math high school club, Converge to Diverge. I chose the name because I wanted the club to be a place where people can "converge" to "diverge" their ideas.
              </p>
              <p>
                <b>Videos in progress:</b><br>
                - The ThinkPad Experience (and Arch Linux btw!): Post-Production<br>
                - Reviewing Multivariable Calculus but in Minecraft: Pre-production
              </p>
            </div>
        </div>
        <div class='recent-blogs'>
            <h2>Recent blogs</h2>
            <div class='blogindex' style='width:100%'>
                  <div class='row'>
                    <p class='date'>2020/07/03</p>
                    <p class='title'><a href="blogs/july2020/sticky-business-of-setting-up-a-web-server.php">Sticky business of setting up a web server</a></p>
                    <p class='tags'>[Documentation][Project]</p>
                  </div>
                  <div class='row'>
                    <p class='date'>2020/06/26</p>
                    <p class='title'><a href="blogs/june2020/blog-zero-why-i-started-a-blog.php">Blog Zero: Why I started a blog</a></p>
                    <p class='tags'>[Blog]</p>
                  </div>
                  <!-- <div class='row'>
                    <p class='date'></p>
                    <p class='title'><a href=""></a></p>
                    <p class='tags'></p>
                  </div> -->
            </div>
        </div>
        <?php include "./scripts/emailform.php"; ?>
      </main>
    </div>
  </body>
  <footer>
  </footer>
</html>
