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
      <div class="header-text">
        <p>APC Student</p>
        <h1>Hi, my name is <br> <span>Mc Joseph Agbanlog</span><br>From <span>BSIT MI211</span></h1>
      </div>




<!-- PHP for displaying records in a table -->

<?php
$servername = "localhost";
$username = "webprogmi211";
$password = "webprogmi211";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, comment FROM myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>";
  echo "<th style='text-align:left; padding: 0 10px'>Name</th>";
  echo "<th style='text-align:left; padding: 0 10px'>Email</th>";
  echo "<th style='text-align:left; padding: 0 10px'>Comment</th>";
  echo "</tr>";
  while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td style='text-align:left; padding: 0 10px'>" . $row["name"] . "</td>";
      echo "<td style='text-align:left; padding: 0 10px'>" . $row["email"] . "</td>";
      echo "<td style='text-align:left; padding: 0 10px'>" . $row["comment"] . "</td>";
      echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
  
</body>
</html>
