<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <script src="script2.js"></script>
</head>
<body>
<?php
        $myemail= "undefined";
        $mypass = "undefined";
        $txt2 = "";
        $txt = "";
        $b = true;
        $all = true;
        
        $connection = new mysqli("localhost", "root", "password", "logreg");
        if($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT * FROM `logreg`;";   
        $result = $connection->query($sql);     
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())
            {
                $myemail = $row["Email"];
                $mypass = $row["Passwordko"];
            }
        } 
        else {
            echo "0 results";
        }
        $connection->close();

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
    if($email == $myemail and $pass == $mypass) {
            if(isset($_POST['remember'])) {
                setcookie('email', $email, time()+60*60*7);
                setcookie('pass', $pass, time()+60*60*7);
            }
            session_start();
            $all = false;
            echo "<p style='
            font-weight: bold;
            position: absolute;
            top: 45.9%;
            left: 30%;
            transform: translate(-50%,-50%);'>Вы успешно зашли:Чтобы выйти:</p>
                    <a style=' text-decoration: none;
    padding: 1%;
    color: #fff;
    font-weight: bold;
    font-size: larger;
    border-radius: 8px;
    text-align: center;
    background-color: rgb(49, 216, 27);
    width: 15%;
    height: 5%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    justify-content: center;
    text-align: center;
    cursor: pointer;' href='Main.php'>Выйти</a>";
    $connection = new mysqli("localhost", "root", "password", "logreg");
                    if($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }
            
                    $sql = "INSERT INTO vo(ItIs) VALUES(1)";
                    if ($connection->query($sql) === TRUE) {
                        } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                        }
    }else {
        if($all == true) {
        session_start();
        session_destroy();
        if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
            $email = $_COOKIE['email'];
            $pass = $_COOKIE['pass'];
            setcookie('email', $email, time()-1);
            setcookie('pass', $pass, time()-1);
        }
  
            if($email == $myemail) {
                $txt = "0";
            }
            else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $txt = "3";
            }else if($email == ""){
                $txt = "2";
            }else {
                $txt = "1";
            }
            $b = true;
            for($i = 1; $i < strlen($pass); $i++) {
                if($pass[$i] == $pass[$i - 1]) {
                    $b = true;
                }else {
                    $b = false;
                    break;
                }
            }
            if($pass == $mypass) {
                $txt2 = "0";
            } 
            else if($b == true) {
                $txt2 = "1";
            }else {
                $txt2 = "2";
            }
        }

        if($txt == "0") {
        }
        else if($txt == "1") {
            echo "<p style='font-weight: bold;
            position: absolute;
            top: 45.9%;
            left: 30%;
            transform: translate(-50%,-50%);'>This is not an email<br></p>";
        }else if($txt == "2") {
            echo "<p style='font-weight: bold;
            position: absolute;
            top: 45.9%;
            left: 30%;
            transform: translate(-50%,-50%);'>Email field is empty<br></p>";
        }else {
            echo "<p style='font-weight: bold;
            position: absolute;
            top: 45.9%;
            left: 30%;
            transform: translate(-50%,-50%);'>Email field is incorrect<br></p>";
        }

        if($txt2 == "0") {
        }else if($txt2 == "1") {
            echo "<p style='
            font-weight: bold;
            position: absolute;
            top: 49.9%;
            left: 30%;
            transform: translate(-50%,-50%);'>This type of password is not correct<br></p>";
        }else { 
            echo " <p style='
            font-weight: bold;
            position: absolute;
            top: 49.9%;
            left: 30%;
            transform: translate(-50%,-50%);'>Password is incorrect<br></p>";
        }

        echo "<a href='LogReg.php' style=' text-decoration: none;
        padding: 1%;
        color: #fff;
        font-weight: bold;
        font-size: larger;
        border-radius: 8px;
        text-align: center;
        background-color: rgb(49, 216, 27);
        width: 15%;
        height: 5%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        justify-content: center;
        text-align: center;
        cursor: pointer;'>Назад</a>";

        $connection = new mysqli("localhost", "root", "password", "logreg");
                    if($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }
            
                    $sql = "INSERT INTO vo(ItIs) VALUES(0)";
                    if ($connection->query($sql) === TRUE) {
                    } else {
                      echo "Error: " . $sql . "<br>" . $conn->error;
                    }
    }
}
?>
<script src="script2.js"></script>
</body>
</html>
