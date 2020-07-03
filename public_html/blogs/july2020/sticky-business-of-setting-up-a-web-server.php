<!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset="utf-8">
    <title>Sticky business of setting up a web server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../scripts/stylesheet.php"; ?>
  </head>
  <body>
    <div class='page'>
        <header class="site-header">
          <?php include "../../scripts/nav.php"; ?>
        </header>
        <main>
            <h1 class='main-title'>
                <big>Sticky business of setting up a web server</big> <br>
                <small>2020/07/03</small>
            </h1>
            <div class="post">
              <p>
                Earlier this week, I finally finished setting up my web server and decided to write this “documentation.” Looking back now, these steps may seem evident, but it was a nightmare when I started up due my complete lack of prior experience. I hope that this will be of use, whether it be to my future self setting up another server or to someone else starting from scratch.
              </p>
              <p>
                I used <a href="https://www.namecheap.com">NameCheap</a> for the domain name, <a href="https://www.vultr.com/?ref=8587753">Vultr</a> for a VPS, <a href="https://certbot.eff.org">CertBot</a> for SSL, <a href="https://www.cloudflare.com">CloudFlare</a> for the DNS servers, and the classic LAMP (Linux Apache MariaDB PHP) stack to host my web server.
              </p>
              <p>
                I only mention the major steps in chronological order to serve as a general overview of creating a web server from scratch.
              </p>
              <p>
                <b>1) Basic HTML and CSS</b>
              </p>
              <p>
                Before anything else, I first had to write the foundations of my website in HTML and CSS. I found the <a href="https://www.internetingishard.com/html-and-css/">Interneting is Hard</a> tutorial to be the most intuitive.
              </p>
              <p>
                <b>2) Purchasing a VPS and a domain</b>
              </p>
              <p>
                Purchasing a domain name and a VPS was easy enough. I decided to go with the popular choice of [first name][last name].com. After I obtained a VPS, I set the A NAME for my root domain boosungkim.com and the CNAME for my subdomain www.boosungkim.com. This way, people will be directed to my site regardless of their URL choice. At this point, I was using the default NameCheap DNS servers.
              </p>
              <p>
                <b>3) Setting a LAMP stack</b>
              </p>
              <p>
                I believe that this is probably the section that took the second longest time to figure out. After I set up Debian on the VPS and installed Apache2, I still had no idea how to configure the Apache settings. I ended up jumping back and forth among several documentations and guides, but I mostly used these two: <a href="https://www.linux.com/audience/devops/apache-ubuntu-linux-beginners/">Linux.com</a> and <a href="https://httpd.apache.org/docs/2.4/">Apache.org</a>. The guide only shows the basic configuration of publishing an HTTP website, so I had to make alterations later on.
              </p>
              <p>
                <b>4) File uploading with rsync and SSH</b>
              </p>
              <p>
                Up to this point, it seemed like everyone was using some sort of graphical interface to upload their files. Since I did not have access to any, I originally considered pushing and pulling via GitHub. Thankfully, I figured out a simpler solution: I used the Linux command <a href="https://linux.die.net/man/1/rsync">rsync</a> over SSH. It was direct and fast.
              </p>
              <p>
                <b>5) SSL (HTTPS)</b>
              </p>
              <p>
                Now this is the part I got stuck on for the longest period of time, which was quite surprising. The vast majority, if not all, of the tutorials state that CertBot is simple to use. It certainly is easy to download, but the configuration process was convoluted for me as a beginner.
              </p>
              <p>
                At first, I made the mistake of getting the default certbot, which is designed for websites with only one domain. In the earlier part of this documentation, I mentioned that I had a subdomain for www.boosungkim.com. The subdomain and the default certbot conflicted, and I ended up completely destroying my web server. I had to reset the VPS and start all over again.
              </p>
              <p>
                After the restart, I realized that I need to use the wilcard certbot to install HTTPS for all the subdomains as well as the main one. I then immediately faced the issue of DNS plugins—NameCheap does not support certbot, as they have their own SSL service (which is charged). A comment on a <a href="https://old.reddit.com/r/homelab/comments/84no8z/lets_encrypt_certbot_namecheap_and_tlssni_or_dns/dvqz8pz/">forum</a> inspired me to switch to the CloudFlare DNS servers and use their plugin to install HTTPS.
              </p>
              <p>
                After the successful installation, I had to reconfigure my VirtualHost file to change from the HTTP port (80) to the HTTPS port (443). I followed the following <a href="https://cwiki.apache.org/confluence/display/HTTPD/ExampleVhosts">guide</a>.
              </p>
              <p>
                While these may seem like straightforward issues with effortless solutions, I can promise you that when I had no idea what was going on, understanding the core complication was like finding a needle in a haystack, except that the needle thankfully left a trail of clues here and there.
              </p>
              <p>
                <b>6) RSS and the Email subscription system</b>
              </p>
              <p>
                Creating the RSS for my blog was quite a relief, as it was near trivial compared to the SSL mess right before this step. I used the documentations <a href="https://www.w3schools.com/xml/xml_rss.asp">w3schools</a> and <a href="https://validator.w3.org/feed/docs/rss2.html">FEED validator</a>, and you can view my XML file on my website as well.
              </p>
              <p>
                I decided to use PHPList for the email subscription system, because it uses PHP and mariaDB. I installed an SMTP client on my server, then the PHPList software. While the official <a href="https://www.phplist.org/manual/books/phplist-manual/page/installing-phplist-manually">PHPList documentation</a> includes a part of the installation process, it skims over the configuration of the database. I would recommend this resource here: <a href='https://www.rosehosting.com/blog/how-to-install-phplist-on-a-centos-7-vps/'>Rosehosting</a>.
              </p>
              <p>
                <b>7) Completion?</b>
              </p>
              <p>
                And that was the final major course of action I had to take. The current version of my website, “version 1” as I like to call it, was completed this Wednesday (2020/07/01).
              </p>
              <p>
                As mentioned, I did not include all the minor difficulties I had, such as granting different files various permissions, creating a contact form, and configuring the php file, but most of those were resolved by reading the documentation (often for hours).
              </p>
              <p>
                <b>Learning how to troubleshoot</b>
              </p>
              <p>
                Perhaps this is a stretch, but I believe that I learnt the basics of troubleshooting. To look up a problem, I had to narrow down what the scope of the issue. No search results came up when I simply said that my website sometimes showed up an error page. I had to specify the error messages and try to derive the main issue from them. Did I make a mistake in the Apache configuration file, or is port 443 closed? Perhaps it is the firewall? Oh no, I simply misdirected the website root folder.
              </p>
              <p>
                <b>The future</b>
              </p>
              <p>
                As mentioned, I consider the current website only Version 1.0. There are many more changes I would like to make over the next few months and even years. For one, I would like to automate the blog posting process. Right now, I have to code 5 times every time I post: the standalone blog file, the blog index page, the blog rolling page, the XML file, and the email. It would be far more convenient to have a single script that would code all that for me.
              </p>
              <p>
                But I leave my website where it is for now, as I would like to work on other projects before the summer ends.
              </p>
              <p>
                I hope this helps someone and thanks for reading!
              </p>
              <p><a href="https://github.com/boosungkim/personal-website">The front end code</a></p>

              <p><a href="/projects.php#personal-web-server-system">Project Description</a></p>

              <p>by <a href="../../index.php">Boo Sung Kim</a></p>
              <p>
                  <a href='/blogrolling.php#sticky-business-of-setting-up-a-web-server'>Rolling</a><br>
                  <a href="https://boosungkim.com/rss.xml">RSS</a><br>
                  <a href="https://boosungkim.com/lists/?p=subscribe&id=1">Subscribe!</a>
              </p>
            </div>
        </main>
    </div>
  </body>
</html>
