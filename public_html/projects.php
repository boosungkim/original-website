<!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset="utf-8">
    <title>Boo Sung Kim's Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <span id="ongoing"></span>
            <h1 class='project-title'>
                <small>Ongoing</small>
            </h1>
            <!-- Enter new ongoing projects here -->
            <!-- The Dickinson Menu Bot -->
            <span id="dickinson-menu-bot"></span>
            <div class='project-post'>
              <div class='top-section'>
                <div class=left-section>
                  <div>
                  <h2>Dickinson Menu Bot</h2>
                  <div class="subtitle">
                      <small class="project-info">(Sept 2019 - Present)</small>
                      <small class="project-info"><a href="https://github.com/boosungkim/dickinson-menu-bot">GitHub</a></small>
                  </div>
                  <p><i>A Java webscraper that extracts and emails the users the daily menu from the Dickinson College Dining website.</i></p>
                  <br/>
                  <p><b>Motivation:</b></p>
                  <p>I overheard my classmates complaining about how the college has no means of sending the dining menu to students directly, so I decided to make a program to solve the inconvenience.</p>
                  <br/>
                  <p><b>Impact:</b></p>
                  <p>Offers both the students and faculty on campus an easy method of checking the menu. Current userbase: 20.</p>
                  <br/>
                  <p><b>In development:</b></p>
                  <p>Switch Java code to Python for better implementation of future ideas.</p>
                  <p>Add a subscription system/database to increase userbase.</p>
                  </div>
                  <br/>
                </div>
                <div class='right-section'>
                  <a href="images/menu.png"><img src="images/menu.png" alt='menu' width='450'/></a>
                </div>
              </div>
              <div class="table-section-wrapper">
                <p><b>Technology Used:</b></p>
                <div class="table-section">
                  <div class="col">
                    <p>Java</p>
                    <p>Shell scripting</p>
                  </div>
                  <div class="col">
                    <p>Python</p>
                    <p>Raspberry Pi</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Personal Web Server System -->
            <span id="personal-web-server-system"></span>
            <div class='project-post'>
              <div class='top-section'>
                <div class=left-section>
                  <div>
                  <h2>Personal Web Server System</h2>
                  <div class="subtitle">
                      <small class="project-info">(May 2020 - Present)</small>
                      <small class="project-info"><a href="https://github.com/boosungkim/personal-website">Website Specific Code</a></small>
                  </div>
                  <p><i>My Debian based web server hosted on a Virtual Private Server for websites/web applications.</i></p>
                  <br/>
                  <p><b>Motivation:</b></p>
                  <p>To host my website and various other web applications with the freedom to incorporate scripts for automation, I decided to host my own web server on a Virtual Private Server.</p>
                  <br/>
                  <p><b>Impact:</b></p>
                  <p>So far, I have been able to learn the process of setting up a Debian Linux server, server security measures with SSH and a firewall, X.509 HTTPS certificate for TLS encryption, and an SMTP mail server.</p>
                  <br/>
                  <p><b>In development:</b></p>
                  <p>Implementing an email subscription system using PHP and MariaDB.</p>
                  <p>Adding media queries for mobile website usage.</p>
                  <p></p>
                  <p></p>
                  </div>
                  <br/>
                </div>
                <div class='right-section'>
                  <a href="images/lamp-diagram.jpeg"><img src="images/lamp-diagram.jpeg" alt='menu' width='450'/></a>
                </div>
              </div>
              <div class="table-section-wrapper">
                <p><b>Technology Used:</b></p>
                <div class="table-section">
                  <div class="col">
                    <p>Virtual Private Server</p>
                    <p>Debian Linux Operating System</p>
                  </div>
                  <div class="col">
                    <p>Shell Scripting</p>
                    <p>Linux Apache MariaDB PHP (LAMP) Stack</p>
                  </div>
                  <div class="col">
                    <p>Basic server security (SSH, firewalls)</p>
                    <p>Certbot</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Personal Linux Environment Set Up -->
            <span id="personal-linux-environment-setup"></span>
            <div class='project-post'>
              <div class='top-section'>
                <div class=left-section>
                  <h2>Personal Linux Environment Setup</h2>
                  <div class="subtitle">
                      <small class="project-info">(Mar 2020 - Present)</small>
                      <small class="project-info"><a href="https://github.com/boosungkim/dotfiles">GitHub</a></small>
                  </div>
                  <p><i>My personal Arch Linux workflow ported on my ThinkPad X220.</i></p>
                  <br/>
                  <p><b>Motivation:</b></p>
                  <p>I want to be able to study the basics of the command line and Linux, customize my workflow extensively, and learn how to troubleshoot and read documents effectively.</p>
                  <br/>
                  <p><b>Impact:</b></p>
                  <p>I am now capable of basic usage of the Linux command line, troubleshooting, and technical documentations.</p>
                  <br/>
                  <p><b>In development:</b></p>
                  <p>Setting up a wpa_supplicant file to allow the Linux OS to connect to the college's WPA2 Enterprise WiFi.</p>
                </div>
                <div class='right-section'>
                  <a href="images/thinkpad.png"><img src="images/thinkpad.png" alt='thinkpad with linux' width='450'/></a>
                </div>
              </div>
              <div class="table-section-wrapper">
                <p><b>Technology Used:</b></p>
                <div class="table-section">
                  <div class="col">
                    <p>Arch Linux</p>
                    <p>Shell Scripting</p>
                  </div>
                  <div class="col">
                    <p>Bare Git Repository</p>
                    <p>UN*X File System Partitioning/Architecture</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of ongoing projects -->
            <span id="previous"></span>
            <h1 class='project-title'>
              <small>Previous</small>
            </h1>
            <!-- Enter new previous projects here -->
            <!-- Reddit Comment Responder -->
            <span id="reddit-comment-responder"></span>
            <div class='project-post'>
              <div class='top-section'>
                <div class=left-section>
                  <div>
                  <h2>Reddit Comment Responder</h2>
                  <div class="subtitle">
                      <small class="project-info">(June 2019)</small>
                      <small class="project-info"><a href="https://github.com/boosungkim/TatsuBot">GitHub</a></small>
                  </div>
                  <p><i>A Python Bot that responds to users on the website Reddit</i></p>
                  <br/>
                  <p><b>Motivation:</b></p>
                  <p>Inspired by similar projects, I decided to use my basic understanding of Python to make a bot that would entertain users on Reddit. </p>
                  <br/>
                  <p><b>Impact:</b></p>
                  <p>Accumulated a userbase of 100+ people during the bot's active run.</p>
                  </div>
                </div>
                <div class='right-section'>
                  <a href="images/reddit.png"><img src="images/reddit.png" alt='reddit' width='450'/></a>
                </div>
              </div>
              <div class="table-section-wrapper">
                <p><b>Technology Used:</b></p>
                <div class="table-section">
                  <div class="col">
                    <p>Python</p>
                    <p>Heroku Online Hosting</p>
                  </div>
                  <div class="col">
                    <p>Reddit API</p>
                    <p>PRAW Python Module</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of previous projects -->
            <!--
            <span id="NAME"></span>
            <div class='project-post'>
              <div class='top-section'>
                <div class=left-section>
                  <div>
                  <h2>TITLE</h2>
                  <small>DATE</small></br>
                  <small><a href="LINK">SITE</a></small>
                  <p><i>One line description</i></p>
                  <br/>
                  <p><b>Motivation:</b></p>
                  <br/>
                  <p><b>Impact:</b></p>
                  <br/>
                  <p><b>In development:</b></p>
                  </div>
                </div>
                <div class='right-section'>
                  <a href="IMAGE"><img src="IMAGE" alt='NAME' width='450'/></a>
                </div>
              </div>
              <div class="table-section-wrapper">
                <p><b>Technology Used</b></p>
                <div class="table-section">
                  <ul>
                    <li>One</li>
                    <li>Two</li>
                  </ul>
                  <ul>
                    <li>Three</li>
                    <li>Four</li>
                  </ul>
                </div>
              </div>
            </div>
          -->
        </main>
    </div>
  </body>
</html>
