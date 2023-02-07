<!DOCTYPE html>
<html lang="en">
<head>
  <!-- -----------meta--------- -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="5">

  <!-- ---------links-------- -->
  <!-- -------- CSS ---------- -->
  <link rel="stylesheet" href="comments.css" \>
  <link rel="stylesheet" href="index.css" \>
  
  <script src="https://kit.fontawesome.com/d12174c34c.js" crossorigin="anonymous"></script>
  <title>Comments</title>
</head>
<body>
<div class="header">
    <h1 class="container">
      <nav>
        <a href="index.php">
          <img src="images/icon.png" class="logo">
        </a>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>  
</div>

<div id="comment">
    <div class="container">
      <div class="row">
        <div class="comment-left">
          <hi class="sub-title">Comments</hi>
          <br><br>
          <?php include 'getComments.php'; ?>
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






  
</body>
</html>
