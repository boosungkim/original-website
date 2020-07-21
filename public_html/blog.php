<!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset="utf-8">
    <title>Boo Sung Kim's Blog Index</title>
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
                <big>Boo Sung's Blog Index</big> <br>
            </h1>
            <span class="blog-links">
                <a href="blogrolling.php">Rolling View</a>
                <a href="https://boosungkim.com/rss.xml">
                  <img src="images/logos/iconfinder-rss.svg" alt='rss' width="25"/>
                </a>
                <a href="https://boosungkim.com/lists/?p=subscribe&id=1">Subscribe!</a>
            </span>
            <div class="blog-section">
              <!--Insert new blog here-->
              <h2>July 2020</h2>
              <div class='blogindex' style='width:100%'>
                <!--Insert new blog of the same month here-->
		<div class='row'>
                  <p class='date'>2020/07/20</p>
                  <p class='title'><a href="blogs/july2020/the-start-of-my-ai-journey.php">The start of my AI journey: Walking before running</a></p>
                  <p class='tags'>[Devlog][Project]</p>
                </div>
		
                <div class='row'>
                  <p class='date'>2020/07/03</p>
                  <p class='title'><a href="blogs/july2020/sticky-business-of-setting-up-a-web-server.php">Sticky business of setting up a web server</a></p>
                  <p class='tags'>[Documentation][Project]</p>
                </div>
              </div>
            </div>
            <div class="blog-section">
                <h2>June 2020</h2>
                <div class='blogindex' style='width:100%'>
                  <!--Insert new blog of the same month here-->
                  <div class='row'>
                    <p class='date'>2020/06/26</p>
                    <p class='title'><a href="blogs/june2020/blog-zero-why-i-started-a-blog.php">Blog Zero: Why I started a blog</a></p>
                    <p class='tags'>[Blog]</p>
                  </div>
                </div>
            </div>
            <?php include "./scripts/emailform.php"; ?>
        </main>
    </div>
  </body>
</html>
