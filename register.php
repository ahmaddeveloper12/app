<html>
<head>
    <title>How to Write a Program</title>
</head>
<body>
           <h1 class="three">welcome to our cheesy family</h1>
           <link rel="stylesheet" href="./tank.css">

    <center>
    <?php
      
       $user = $_POST["user"];
       $phone = $_POST["phone"];
       $city = $_POST["city"];
       $email= $_POST["email"];
      
       // Establish a connection to the MySQL database
       $conn = mysqli_connect("localhost", "root", "", "burger");

       // Check if the connection was successful
       if ($conn->connect_error) {
           die('Connection failed: ' . $conn->connect_error);
   } 
    else {
     
           $stmt = $conn->prepare("INSERT INTO ger ( user, phone, city ,email) VALUES (?, ?, ?, ?)");

          
           $stmt->bind_param("ssss", $user, $phone, $city, $email);

           // Execute the statement
           if ($stmt->execute()) {
               echo "Registration successful!";
           } else {
               echo "Error: " . $stmt->error;
           }

           // Close the statement and connection
           $stmt->close();
           $conn->close();
      }
    ?>
    </center>
</body>
</html>
