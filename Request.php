<!-- \localhost\aliprograms\Request.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adaptiveRequest.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <title>Тіркелу!</title>
</head>
<body>
    <form action="demo.php" method="post" id="myForm">
    <div class="general_container">
        <div class="container">
            <div class="languages">
                <img src="./images/free-icon-internet-149229.png" alt="logo_internet" id="internet_logo">
                <select name="language" id="language">
                    <option value="KZ">KZ</option>
                    <option value="RU" >RU</option>
                    <option value="EN">EN</option>
                </select>
            </div>
           
            <div class="enter_game">
                <h1 id="kahoot">Өтініш жіберу</h1>
                <div class="back_color">
                    <input type="text" id="pin_code" placeholder="Телефон номеріңіз" onkeydown="isCorrect(event, this)">
                    <div id="enter" onclick="enter(document.getElementById('pin_code'))">
                        <a>Енгізу</a>
                    </div>
                </div>
                <h5></h5>
            </div>
            <footer id="footer_enter">Өтініш міндетті түрде, қосымша сұрақтар: <code>@alimingoi</code></footer>
            <p id="warning"></p>
        </div>
        </div>
    </form>
    <script src="script.js"></script>
</body>
</html>