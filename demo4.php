<!-- Registration -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="adaptiveDemo4.css">
    <link rel="icon" type="image/x-icon" href="https://dostyq.online/_nuxt/b24017d0fc470abbf8fe439ea6ba05a7.svg">
    <title>Регистрация</title>
</head>
<body>
    <div class="popup">
        <div class="popup-content">
                <img src="./images/icons8-macos-close-32.png" alt="Close" class="close">
            <div class="out_user">
                <div id="login1">
                    <p id="p1">Ре</p>
                    <p>гистрация</p>
                </div>
            <img src="./images/user.png" alt="User" class="user">
            </div>
            <h2 style="color: #4a154b;">Добро пожаловать</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="aliali">
                <input type="text" placeholder="Enter your name" name="namego" id="bot-img3">
                <p id="nameushin"></p>
                </div>
                <div class="aliali">
                <input type="text" placeholder="Enter your email" name="email" id="bot-img1">
                <p id="emailushin"></p>
                </div>
                <input type="password"  placeholder="Create a password" name="passwordCr" id="bot-img2">
                <div class="aliali">
                <input type="password"  placeholder="Confirm a password" name="passwordCo" id="bot-img2">
                <p id="passushin"></p>
                </div>
                <p id="netu">Уже есть аккаунт?  <a href="LogReg.php">   Войти</a></p>
                <button type="submit" class="button" name="login">Зарегистрироваться сейчас</button>
            </form>
        </div>
    </div> 
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tekseris = true;
            $namegooo = $_POST['namego'];
            if(strlen($namegooo)  > 12) {
                echo "<script>document.getElementById('nameushin').innerHTML = '*';</script>";
                $tekseris = false;
            }else {
                for($i = 1; $i < strlen($namegooo); $i++) {
                    $san = $namegooo[$i];
                    for($j = 48; $j <= 57; $j++) {
                        if($san == chr($j)) {
                            echo "<script>document.getElementById('nameushin').innerHTML = '*';</script>";
                            $tekseris = false;
                            break;
                        }
                    }
                }
            }
            $passCreat = $_POST['passwordCr'];
                $passConfirm = $_POST['passwordCo'];
                if($passCreat != $passConfirm) {
                    echo "<script>document.getElementById('passushin').innerHTML = '*';</script>";
                    $tekseris = false;
                }

                $email2 = $_POST['email'];
                if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
                    echo "<script>document.getElementById('emailushin').innerHTML = '*';</script>";
                    $tekseris = false;
                }

                if($tekseris == true) {
                    $connection = new mysqli("localhost", "root", "", "logreg");
                    if($connection->connect_error) {
                        die("Connection failed: " . $connection->connect_error);
                    }
            
                    $sql = "INSERT INTO logreg(Namego, Email, Passwordko) VALUES('$namegooo', '$email2', '$passConfirm')";
            
                    if ($connection->query($sql) === TRUE) {
                      header("Location: Main.php");
                      exit();
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                    
                $connection->close();
                }
        }
    ?>
    <script src="script2.js"></script>
    </body>
</html>