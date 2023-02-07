<?php
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $commentErr = "";
$name = $email = $website = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
            }
            }
              
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }
                
              if (empty($_POST["website"])) {
                $website = "";
              } else {
                $website = test_input($_POST["website"]);
                // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                  $websiteErr = "Invalid URL";
                }
              }

              if (empty($_POST["comment"])) {
                $comment = "";
              } else {
                $comment = test_input($_POST["comment"]);
              }

              $servername = "localhost";
              $username = "webprogmi211";
              $password = "webprogmi211";
              $dbname = "webprogmi211";
            
              // Create connection
              $conn = mysqli_connect($servername, $username, $password, $dbname);
              
              // Check connection
              if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
              }

              //sql queries
                         
              //insert data
              $sql = "INSERT INTO mcagbanlog_myguests (name, email, website, comment)
              VALUES ('$name', '$email', '$website', '$comment')";

            if (mysqli_query($conn, $sql)) {
                echo "Message sent successfully, thank you so much!";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
              
              mysqli_close($conn);
            }

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }


            ?>