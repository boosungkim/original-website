<!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset="utf-8">
    <title>Boo Sung Kim's Rolling Blog</title>
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
                <big>Boo Sung's Rolling Blog</big> <br>
            </h1>
            <!--Insert new blog here-->
            <span class="blog-links">
                <a href="blog.php">Blog Index</a>
                <a href="https://boosungkim.com/rss.xml">
                  <img src="images/logos/iconfinder-rss.svg" alt='rss' width="25"/>
                </a>
                <a href="https://boosungkim.com/lists/?p=subscribe&id=1">Subscribe!</a>
            </span>
            <span id="blog-zero-why-i-started-a-blog"></span>
            <div class="rolling-post">
              <h2>Blog Zero: Why I started a blog</h2>
              <small>
                <p class="date">2020/06/26</p>
                <a href="blogs/june2020/blog-zero-why-i-started-a-blog.php">Link</a>
              </small>
              <p>
                So this is my first official blog post of this website! I have to admit that setting up the basics of this web server was a lot more complicated than I anticipated, but here we are!
              </p>
              <p>
                On this site, I plan to post mainly about Math and Computer Science, my two great passions and also my majors. I will upload my opinions on various technologies, documentations I write while working on personal projects, and even potentially devlogs for particular projects.
              </p>
              <p>
                The primary reason I started writing about the my Math and Computer Science endeavors is to practice my communication skills. Up till now, I have worked on my technology skillsets, but not so much on communication. I realized recently that I should be able to convey my ideas in a clear and concise manner—even to people who may not be familiar with technologies I work with. Like most things, the best way to better my interpersonal skills is to practice.
              </p>
              <p>
                While that may be my main reason, I am already learning far beyond just communication skills: I learnt how to set up a server, the basics of the LAMP stack, and more. More on that on the next blog post about setting up a web server.
              </p>
              <small>
                  <a href="https://boosungkim.com/rss.xml">RSS</a><br>
                  <a href="https://boosungkim.com/lists/?p=subscribe&id=1">Subscribe!</a>
              </small>
            </div>
            <?php include "./scripts/emailform.php"; ?>
        </main>
    </div>
  </body>
</html>
