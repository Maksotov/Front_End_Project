<!-- http://localhost/aliprograms/LogReg.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <link rel="stylesheet" href="adaptiveLogReg.css">
    <link rel="icon" type="image/x-icon" href="https://dostyq.online/_nuxt/b24017d0fc470abbf8fe439ea6ba05a7.svg">
    <title>Логин</title>
</head>
<body>
    <div class="popup">
        <div class="popup-content">
                <img src="./images/icons8-macos-close-32.png" alt="Close" class="close">
            <div class="out_user">
                <div id="login1" >
                    <p id="p1">Ло</p>
                    <p>гин</p>
            </div>
            <img src="./images/user.png" alt="User" class="user">
            </div>
            <h2>Добро пожаловать</h2>
            <form action="demo2.php" method="post">
                <input type="text" placeholder="Enter your email" name="email" id="bot-img1">
                <input type="password"  placeholder="Confirm a password" name="password" id="bot-img2">
                <div id="idremember">
                    <input type="checkbox" name="remember"> 
                    <p id="premember">Запомнить меня</p>
                </div>
                <p id="netu">Нету аккаунта? <a href="demo4.php">Регистрация</a></p>
                <button type="submit" class="button" name="login">Войти</button>
                <p id="aaa"></p>
            </form>
        </div>
    </div>
    
    <?php    
        if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
            $email = $_COOKIE['email'];
            $pass = $_COOKIE['pass'];
            echo "<script>
                document.getElementById('bot-img1').value = '$email';
                document.getElementById('bot-img2').value = '$pass';
            </script>";
        }
    ?>
    <script src="script2.js"></script>
</body>
</html>

