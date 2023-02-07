<!DOCTYPE html>
<html lang="en">
<head>
  <!-- -----------meta--------- -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ---------links-------- -->
  <link rel="stylesheet" href="index.css" \>
  <script src="https://kit.fontawesome.com/d12174c34c.js" crossorigin="anonymous"></script>
  <title>My Portfolio</title>
</head>
<body>
  <div id="header">
    <div class="container">
      <nav>
        <img src="images/icon.png" class="logo">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
      <div class="header-text">
        <p>APC Student</p>
        <h1>Hi, my name is <br> <span>Mc Joseph Agbanlog</span><br>From <span>BSIT MI211</span></h1>
      </div>
    </div>
  </div>
  <!-- about -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="about-col-1">
          <img src="images/about-me.jpg" id="profilePicture" alt="Profile picture">
        </div>
        <div class="about-col-2">
          <h2 class="sub-title">About Me</h2><br>
          <p>
            Hello! My name is <span>Mc Joseph</span> and I am currently a 2nd year student at Asia Pacific College, pursuing a Bachelor of Science in Information Technology with a major in Mobile and Internet Technology. I am a driven and dedicated individual who is passionate about technology and its power to change the world.
            <br><br>
            I am a 20-year-old student who is eager to learn and grow in this field. Although I had a difficult time with coding at first, Web Programming has made it more interesting for me. I am excited to continue my studies and develop my skills in the field of technology.
            <br><br>
            In my free time, I enjoy playing online games and catching up on some much-needed rest. I believe that a healthy balance between work and play is essential for personal growth and success.
            <br><br>
            I am thrilled to have the opportunity to share my journey and experiences with you through my personal website. Thank you for visiting and I hope you enjoy exploring it!
          </p>

          <div class="tab-titles">
            <p class="tab-links active-link" onclick="opentab('hobbies')">Hobbies</p>
            <p class="tab-links" onclick="opentab('interests')">Interests</p>
            <p class="tab-links" onclick="opentab('education')">Education</p>
          </div>
          <div class="tab-contents active-tab" id="hobbies">
            <ul>
              <li><span>Playing Online Games</span><br>Wildrift and Call of Duty:Mobile</li>
              <li><span>Sleeping</span><br>I love to rest</li>
              <li><span>Playing instruments</span><br>Octavina or Guitar</li>
            </ul>
          </div>
          <div class="tab-contents" id="interests">
            <ul>
              <li><span>Data Analysis</span><br>Excel and Power BI</li>
              <li><span>Online Selling</span><br>Tiktok Shop</li>
              <li><span>Freelancing</span><br>Upwork or OnlineJobsPh</li>
            </ul>
          </div>
          <div class="tab-contents" id="education">
            <ul>
              <li><span>Highshool</span><br>Quirino Highschool and Holy Spirit National Highschool</li>
              <li><span>Senior Highschool</span><br>South East Asia Insitute of Trade and Technology</li>
              <li><span>College (Current)</span><br>Asia Pacific College</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- portfolio -->
  <section id="portfolio">
    <div class="container">
      <h1 class="sub-title">My Portfolio</h1>
      <div class="portfolio-center container" data-aos="fade-up" data-aos-duration="1500">
        <div class="portfolio-box">
          <div class="image-container">
            <a><img/></a>
          </div>
          <div class="content">
            <h4>Sample Project</h4>
            <p>
              As of now, I am not working on a project yet.
            </p>
            <a href="Read More"></a>
          </div>
        </div>
    </div>
  </section>
  <!-- contact -->
  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="contact-left">
          <hi class="sub-title">Contact Me</hi>
            <p><i class="fa-sharp fa-solid fa-paper-plane"></i> mcagbanlog@student.apc.edu.ph</p>
            <p><i class="fa-solid fa-phone"></i> 09762623231</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/emsijusep"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://twitter.com/emsheesh"><i class="fa-brands fa-twitter-square"></i></a>
              <a href="https://www.instagram.com/emshiiisunn/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/mc-joseph-agbanlog-6a8387218/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="contact-right">
          <!-- --------Form------------ -->
        
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="website" name="website" placeholder="Your Website">
            <textarea name="comment" rows="6" placeholder="Your Message"></textarea>
            <button type="submit" class="btn btn2">Submit</button>
            </form>

            <?php include 'form.php'; ?>
          
            
        </div>
      </div>
      <div style="text-align: center">
            <a href="displayRec.php">
              <button class="btn btn2">See my guests</button>
            </a>
        </div>
    </div>
    <div id="copyright">
      <p>Copyright © Emsi. A sample website for WEBPROG</p>
    </div>
  </div>
  























<!-- Tabs -->
 <script>   
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname){
      for(tablink of tablinks){
        tablink.classList.remove("active-link");
      }
      for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
      }
      // this is an event
      event.currentTarget.classList.add("active-link");
      document.getElementById(tabname).classList.add("active-tab");
} </script>
              

</body>
</html>
