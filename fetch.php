<!DOCTYPE html>
<html>
<head>
    <title>Data Fetching from Database</title>
    <link rel="stylesheet" href="./two.css">
</head>
<body>
    <center>
<?php

    $conn = mysqli_connect("localhost", "root", "", "burger");

   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connection successful<br>";

  
    $sql = "SELECT * FROM ger";
    $result = $conn->query($sql);

    
    if ($result) {
        $n = mysqli_num_rows($result);
        echo "Total records: " . $n . "<br>";

       
        if ($n > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>user</th>
                        <th>phone</th>
                        <th>city</th>
                        <th>email</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['user'] . "</td>
                        <td>" . $row['phone'] . "</td>
                        <td>" . $row['city'] . "</td>
                          <td>" . $row['email'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    mysqli_close($conn);
?>
    </center>
</body>
</html>
