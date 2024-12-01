<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>

<div class="zero">
    <center>
    <?php
       // Collect form data from POST request
       $student = $_POST["student"];
       $course = $_POST["course"];
       $phone = $_POST["phone"];
       $email = $_POST["email"];
      
       // Establish a connection to the MySQL database
       $conn = mysqli_connect("localhost", "root", "", "visit");

       // Check if the connection was successful
       if ($conn->connect_error) {
           die('Connection failed: ' . $conn->connect_error);
       } else {
           // Prepare the SQL statement with placeholders
           $stmt = $conn->prepare("INSERT INTO sit (student, phone, email, course) VALUES (?, ?, ?, ?)");

           // Bind the parameters to the prepared statement
           $stmt->bind_param("ssss", $student, $phone, $email, $course);

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
    </div>
    </center>
</body>
</html>