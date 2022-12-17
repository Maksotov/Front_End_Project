<?php
    $connection = new mysqli("localhost", "root", "password", "test");
        if($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $age = $_POST['age'];
        $subject = $_POST['subject'];
        $preparation = $_POST['preparation'];

        $sql = "INSERT INTO table_frontend2(Age, Subjects, Preparation) VALUES('$age', '$subject', '$preparation')";

        if ($connection->query($sql) === TRUE) {
          header("Location: Main.php");
          exit();
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        
    $connection->close();
?>