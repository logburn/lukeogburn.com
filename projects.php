<!--
  Yes, I code everything myself.
  I know HTML, CSS, PHP, and javascript
  I avoid js wherever I can, usually substituting with CSS, but I can work with it.
-->

<!doctype html>
<html lang=en>
<?php include "head.php"; ?>
<body>

<?php include "top.php"; ?>

<h2 id=name>PROJECTS</h2>
<div class=content>
These are my past projects. Some of them were designed to teach me back-end, and some were designed to teach me front-end. These were all learning experiences for me, so while nothing is designed to actually be used in mass (ei, the user interface may be poor), I learned a lot and designed each project to give me practice in a certain topic. Much of what I learned is missing from my earlier sites, since I learned as I created.

<h2>Web Riddles:</h2>
This web riddle series was a lot of fun for me to create. Once I got the design down, I was able to focus on the backend code, which was converted from an insecure piece of javascript to a much more secure PHP script (which also allowed me to keep everything on a single page).
    <br>Technologies used: HTML, CSS, PHP, PDO, SQL<br>
    You can find it <a href=https://lukeogburn.com/rwv target=_blank>here</a> if you want to check it out.

<h2>500 Words:</h2>
This site was based off of this site. I basically wanted to only write 500 words because 750 is just outrageous. It used to store information in an unencrypted text file, but I have updated it to be both encrypted and stored in a database instead. The encryption uses the user's password as a key, but since the password is hashed in the database there is no way for me, the owner, to unlock the information. This was something of an exploration into cryptography.
    <br>Technologies used: HTML, CSS, JS, PHP, PDO, SQL<br>
    This project is currently broken due to server migration issues. But trust me, it's awesome.
    <!--You can find it <a href=https://500.lukeogburn.com/ target=_blank>here</a> if you want to check it out.-->

<h2>Blog:</h2>
This blog never really amounted to much as I never really maintained it. It was mostly thrown together because I wanted to practice my PHP, so even though the blog itself is basically a failure I still gained a lot from it in terms of experience. I plan to bring it back one day, but I currently have no real reason to do so.
    <br>Technologies used: HTML, CSS, PHP, PDO, SQL<br>
I have since switched to using <a href=https://ghost.org/>Ghost</a> to self-host my blog.
    <br>Technologies used: Docker, server management<br>
    You can find it <a href=https://blog.lukeogburn.com/>here</a>, though I don't post much (at all...).

<h2>Rubik's Cube:</h2>
This was actually the first page I made. It teaches methods on solving various Rubik's Cubes and mostly taught me CSS techniques. The original design was done with Wix before I knew anything about web development. It got me going in this whole business.<br>
    Technologies used: HTML, CSS<br>
    You can find it <a href=https://lukeogburn.com/cube target=_blank>here</a> if you want to check it out.

<h2>IB Site:</h2>
This is basically a social media site. I designed it to be used for school-based things such as uploading notes or asking questions. It can, theoretically, be used for anything, but it is really designed for uploading notes that have been saved as an image file or as a document file. This site taught me a ton about the technologies I used and the interactions between them. Note that you currently need a school-assigned HCPS email account to access the website (this will be changing at some point, but has not yet). Unfortunately, this site is now broken due to my school changing the email addresses for students. It requires an email to login, so while students can log in, there are a few things that don't work (like tagging users). It isn't worth the effort to maintain, so I'm not going to edit it until I spontaneously get the energy.
    <br>Technologies used: HTML, CSS, JS, PHP, PDO, SQL, Google OAuth API, Regex<br>
    You can find it <a href=https://ib.lukeogburn.com/>here</a>, but functionality may be limited and you will be on a "guest" account.

<h2>URL Shortener:</h2>
This site was fun to make and I do use it myself. All it does is take a URL and make it into another url. For example, lukeogburn.com is shortened to lukeo.link/TvVif. If a URL is submitted again, it will use the same short URL as before. I did buy a separate domain for this site, so I won't be keeping up with it once I decide that it's not worth the price. No idea when that'll be, so for now it's only use is as a temporary URL shortener for simple convenience.
    <br>Technologies used: HTML, CSS, PHP, PDO, SQL<br>
    You can find it <a href=https://lukeo.link target=_blank>here</a> if you want to check it out.
</div>
</body>
</html>
