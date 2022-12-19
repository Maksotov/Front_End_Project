<!DOCTYPE html>
<head>
    <title>dostyq.online</title>
    <meta charset="UTF-8">
    <meta name = "viewport" content="width = device - width , initial-scale=1.0">
    <link rel="stylesheet" href="Main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="Main(Media).css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="https://dostyq.online/_nuxt/b24017d0fc470abbf8fe439ea6ba05a7.svg">
</head>
<body>
    <div class="header">
        <div class="logo_button_online">
        <button class="ush_tochka" onclick="myFunction()">
            <img src = "https://dostyq.online/_nuxt/dce8120e860949ae90f5d4398743e394.svg">
        </button>
        <div class="dostyq_logo">
            <a href = "Main.php">
                <img src="https://dostyq.online/_nuxt/b24017d0fc470abbf8fe439ea6ba05a7.svg">
                <div class="dostyq_online">
                <b>dostyq.online</b>
                </div>
            </a>
        </div>
        </div>
    </div>
    <div class="temp">
      <div class="pages">
        <img src="./ImagesZhan/loreg.png" alt="logo1" id="logreg1">
        <a href="LogReg.php" id="y6">Войти</a>
        <p id="ggg"></p>
        <?php
                $isVowel = 'undefined';
                $myname = 'undefined';
                $myemail = 'undefined';

                $connection = new mysqli("localhost", "root", "", "logreg");
                  if($connection->connect_error) {
                      die("Connection failed: " . $connection->connect_error);
                  }
          
                  $sql = "SELECT * FROM `vo`;";             
                  $result = $connection->query($sql);     
                  if ($result->num_rows > 0) 
                  {
                      while($row = $result->fetch_assoc())
                      {
                          $isVowel = $row["ItIs"];
                      }
                  } 
                  else {
                      echo "0 results";
                  }

                  $conn = new mysqli("localhost", "root", "", "logreg");
                  if($conn->connect_error) {
                      die("Connection failed: " . $con->connect_error);
                  }
          
                  $sql2 = "SELECT * FROM `logreg`;";   
                  $result = $conn->query($sql2);     
                  if ($result->num_rows > 0) 
                  {
                      while($row = $result->fetch_assoc())
                      {
                          $myname = $row["Namego"];
                      }
                  } 
                  else {
                      echo "0 results";
                  }
                  $conn->close();

                  if($isVowel == 1) {
                    echo "<script>document.getElementById('y6').textContent  = '$myname';</script>";
                  }else {
                    echo "<script>document.getElementById('y6').textContent  = 'Войти';</script>";
                  }

              $connection->close();
              ?>
      </div> 
      <div class="pages">
        <img src="./ImagesZhan/video.png" alt="logo2" id="video1">
        <a href="videocourses.php">Видеокурсы</a> 
      </div>
      <div class="pages">
        <img src="./ImagesZhan/Марафоны.png" alt="logo3" id="marafon">
      <a href="marathon.php">Марафоны</a>
      </div> 
      <div class="pages">
        <img src="./ImagesZhan/prof.png" alt="logo4" id="prof">
      <a href="Prof_Page.php">Профориентация</a> 
      </div>
      <div class="pages">
        <img src="./ImagesZhan/kontact.png" alt="logo4" id="kontact">
      <a href="contacts.php">Контакты</a> 
      </div>
    </div>
    <div class="body">
    <div class="main">
        <h1>ҰБТ-ға онлайн<br>дайындық</h1>
        <h4>ҰБТ-ны стресссіз тапсырып, қалаған университетке түсуге<br>көмектесеміз</h4>
        <button class="tegin">Тегін бастаңыз</button>
        <button id="iii" class="kiru" onclick="window.location.href='Request.php'">Тіркелу үшін</button>
        <h4>Тіркелгеннен кейін сіз барлық пәндер бойынша тегін<br>сынақ сабақтарына қол жеткізе аласыз</h4>
        <?php
              if($isVowel == 1) {
                echo "<script>document.getElementById('iii').style.display = 'inline';</script>";
              }else {
                echo "<script>document.getElementById('iii').style.display = 'none';</script>";
              }
        ?>
    </div>
    <div class="photo">
        <img src="https://dostyq.online/_nuxt/img/laptop-guy.86bc940.png">
    </div>
    </div>

  <div class="logo_photos">
        <img class="UTO" , src="https://dostyq.online/_nuxt/e2502090395d7afe8abdfcb01c713ea0.svg">
        <img class="CTO" , src="https://dostyq.online/_nuxt/941bcd305675a24d0808f22efbc91e9a.svg">
        <img class="EDU" , src="https://dostyq.online/_nuxt/81d6c6288accfda8214e4d06cdfb2f8c.svg">
        <img class="BIL" , src="https://dostyq.online/_nuxt/157583fe453e52b4d55f673fd59a803e.svg">
        <img class="SDU" , src="https://dostyq.online/_nuxt/5249f9c4d7e1b90c8044d114b748b830.svg">
        <img class="IQANAT" , src="https://dostyq.online/_nuxt/dabfe5acb2e2df9320f434389052c5ef.svg">
  </div>

    <div class="Paket">Дұрыс курс пакетін таңдаңыз</div>

    <div class="all_pages">
        <div class="page1">
        <div class="bet1_text">
            <h3>Негізгі пәндер</h3>
            <br>
        <img src="./ImagesZhan/1xbet.jpg">
            <br>
            <h5>жылдық жазылым</h5>
        </div>
        <h5>3 негізгі пән  бойынша бейне<br>курстарға дыл сайынғы<br>қолжетімділік</h5>
        <h6> &#10003; 24/7 қолжетімділік</h6>
        <h6> &#10003; 300-ден астам бейнесабақтар</h6>
        <h6> &#10003; 400+ тест тапсырмалары</h6>
        <h6> &#10003; Бейне сынақ шешімдері</h6>
        <h6> &#10003; Ай сайынғы сынақ сынақтары</h6>
        <h6> &#10003; Кері байланыс</h6>
        <h6> &#10003; Қолданбаға кіру</h6>
        <h6> &#10003; Оқу материалдары</h6>
        <div class="button_kobirek">
        <a href="https://educon.online/" target="_blank"><button style="cursor: pointer;">Көбірек</button></a>
        </div>
        </div>
        <div class="page2">
            <div class="bet2_text">
                <h3>Негізгі пәндер</h3>
                <br>
            <img src="./ImagesZhan/2xbet.jpg">
                <br>
                <h5>жылдық жазылым</h5>
            </div>
            <h5>кез келген 2 таңдаулы пән<br>бойынша бейне курстарға жыл<br>сайынғы қолжетімділік</h5>
            <h6> &#10003; 24/7 қолжетімділік</h6>
            <h6> &#10003; 300-ден астам бейнесабақтар</h6>
            <h6> &#10003; 400+ тест тапсырмалары</h6>
            <h6> &#10003; Бейне сынақ шешімдері</h6>
            <h6> &#10003; Ай сайынғы сынақ сынақтары</h6>
            <h6> &#10003; Кері байланыс</h6>
            <h6> &#10003; Қолданбаға кіру</h6>
            <h6> &#10003; Оқу материалдары</h6>
            <div class="button2_kobirek">
            <a href="https://educon.online/" target="_blank"><button style="cursor: pointer;">Көбірек</button></a>
                      </div>
            </div>

            <div class="page3">
                <div class="bet3_text">
                    <button>Ең танымал</button>
                    <br>
                <img src="./ImagesZhan/3xbet.jpg">
                    <br>
                    <h5>жылдық жазылым</h5>
                </div>
                <h5>барлық 5 пән бойынша бейне<br>курстарға жыл сайынғы<br>қолжетімділік</h5>
                <h6> &#10003; 24/7 қолжетімділік</h6>
                <h6> &#10003; 300-ден астам бейнесабақтар</h6>
                <h6> &#10003; 400+ тест тапсырмалары</h6>
                <h6> &#10003; Бейне сынақ шешімдері</h6>
                <h6> &#10003; Ай сайынғы сынақ сынақтары</h6>
                <h6> &#10003; Кері байланыс</h6>
                <h6> &#10003; Қолданбаға кіру</h6>
                <h6> &#10003; кәсіптік бағдар беру тесті</h6>
                <h6> &#10003; Кураторлық</h6>
                <h6> &#10003; Оқу материалдары</h6>
                <div class="button3_kobirek">
                <a href="https://educon.online/" target="_blank"><button style="cursor: pointer;">Көбірек</button></a>
                </div>
                </div>
    
    </div>

    <div class="Flex_ushin">
    <div class="Kurator-Kurator2">
    <div class="Kurator">
        <button>Кураторлық</button>
        <h3>Біз қолдаймыз және оқуыңызды<br>тастамауға көмектесеміз</h3>
    </div>
    <div class="Kurator2">
        <h5>Кураторлар сізді жолының басынан аяғына дейін алып жүреді.</h5>
        <h6>&#10003; Сабаққа қатысуын бақылау, тест тапсыру</h6>
        <h6>&#10003; Курс барысындағы үлгерімді, проблемаларды талдау</h6>
        <h6>&#10003; Оқыту жоспарын құруға көмектесу</h6>
        <h6>&#10003; Қолдау, студенттерді ынталандыру</h6>
    </div>
    </div>
    <div class="Comment">
        <img src="./ImagesZhan/Снимок экрана (3).png">
    </div>
    </div>

    <div class="Kitaptar">
        <img src="https://dostyq.online/_nuxt/img/books.68ad870.png" id="img1">
        <div class="Kitap-text">
            <div class="Kitap">
                <button>Оқу материалдары</button>
                <h3>Бейнесабақтар ҰБТ-ны сәтті тапсыру<br>үшін барлық қажетті тақырыптар<br>қамтылған авторлық оқулықтар<br>бойынша түсірілді.</h3>
            </div>
            <h5>Өтілген материалды барынша меңгеруге оқулықтар<br>көмектеседі.</h5>
            <h6>&#10003; Теория, кестелер</h6>
            <h6>&#10003; Практикалық тапсырмалар</h6>
            <h6>&#10003; Тақырыптық, сынақ сынақтары</h6>
        </div>
        <img src="https://dostyq.online/_nuxt/img/books.68ad870.png" id="img2">
    </div>
    <div class="Okulyk">
        <button><a href="https://api.whatsapp.com/send/?phone=%2B77074221919&text&type=phone_number&app_absent=0" style="text-decoration: none; color:white" >Оқулықтарды сатып алыңыз</a></button>
    </div>

    <div class="Nelikten">
        <h3>Неліктен Dostyq Online таңдау керек?</h3>
        <h5>Достық – 20 жылдық тәжірибесі бар білім саласының көшбасшысы</h5>
    </div>
    <div class="Nelikten2">
    <div class="Nelikten-images1">
        <div class="div1">
            <img src="./ImagesZhan/Adam.png">
            <h3>Көп жылдық тәжірибе</h3>
            <h5>Достық – 20 жылдық тәжірибесі<br>бар білім саласының көшбасшысы</h5>
        </div>
        <div class="div2">
            <img src="./ImagesZhan/Снимок экрана (11).png">
            <h3>Мамандармен оқыту</h3>
            <h5>10 жылдан астам тәжірибесі бар<br>білікті ұстаздар</h5>
        </div>
        <div class="div3">
            <img src="./ImagesZhan/Снимок экрана (12).png">
            <h3>Тексерілген материал</h3>
            <h5>Барлық мазмұн Қазақстан<br>Республикасының білім беру<br>бағдарламасына сәйкес келеді/h5>
        </div>
    </div>
    <div class="Nelikten-images2">
        <div class="div4">
            <img src="./ImagesZhan/Снимок экрана (13).png">
            <h3>Бейне шешімдері бар<br>сынақтар</h3>
            <h5>Тақырыптық тесттер арқылы<br>тақырыптың қаншалықты<br>меңгерілгенін байқауға болады.</h5>
        </div>
        <div class="div5">
            <img src="./ImagesZhan/Снимок экрана (14).png">
            <h3>Жеке бөлме</h3>
            <h5>Прогрессіңізді бақылау, ай сайынғы<br>сынақ сынақтарынан өту мүмкіндігі</h5>
        </div>
        <div class="div6">
            <img src="./ImagesZhan/Снимок экрана (5).png">
            <h3>Сынақ сынақтары</h3>
            <h5>Ай сайынғы сынақ сынақтары<br>сіздің үлгеріміңізді бағалауға және<br>сізді нақты сынаққа психологиялық<br>тұрғыдан дайындауға көмектеседі.</h5>
        </div>
    </div>
    </div>

    <div class="Beyne">Бейне сабақтарының үзінділері</div>

    <div class="Beyne_sabaktar">
    <div class="slideshow-container">
        <div class="mySlides fade">
          <video src="Video_dostyq.MOV" poster="./ImagesZhan/Video_image.png" controls></video>
        </div>
        <div class="mySlides fade">
            <video src="Video_dostyq.MOV" poster="./ImagesZhan/Video_image2.png" controls></video>
        </div>
        <div class="mySlides fade">
            <video src="Video_dostyq.MOV" poster="./ImagesZhan/Video_image3.png" controls></video>
        </div>
        <div class="mySlides fade">
            <video src="Video_dostyq.MOV" poster="./ImagesZhan/Video_image4.png" controls></video>
        </div>
        <div class="mySlides fade">
            <video src="Video_dostyq.MOV" poster="./ImagesZhan/Video_image5.png" controls></video>
        </div>
      </div>
      <br>
      <div class = "last_div">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
    </div>

    <div class="div_Onai">
        <h3>Оңай курсқа тіркелу процесі</h3>
        <h5>Бірнеше рет басу және сіз мақсатыңызға жолды бастайсыз</h5>
    </div>

    <div class="Image_01_02_03">
        <div class="image_01">
        <img src="https://dostyq.online/_nuxt/0433125edb9224026aaa75a1e48a3d34.svg">
        <h5>сайтында тіркелу</h5>
        </div>
        <div class="Strelka1">
            <img src="https://dostyq.online/_nuxt/09a6db5c4360e138fd8e1239a76cfd4e.svg">
        </div>
        <div class="image_02">
            <img src="https://dostyq.online/_nuxt/e1ef38ce9a13933831b550cee34263dc.svg">
            <h5>Курсты таңдау және төлеу</h5>
        </div>
        <div class="Strelka2">
            <img src="https://dostyq.online/_nuxt/09a6db5c4360e138fd8e1239a76cfd4e.svg">
        </div>
        <div class="image_03">
            <img src="https://dostyq.online/_nuxt/41512a8b9efceddcd0f689fbf47d52c6.svg">
            <h5>Емтиханда жетістікке жету жолын<br>бастау</h5>
        </div>
    </div>

    <div class="Zhetistik">
        <h3>Сізді жетістікке жетелейтін адамдар</h3>
        <h5>Біздің мұғалімдер</h5>
    </div>

    <div class="slideshow1">
        <div class="JavaScript2_1">
        <div class="mySlides1">
          <img src="./ImagesZhan/Azamat.png">
          <h5>Азамат Шумбалов</h5>
          <h5 style="color: black; font-weight:bold">Ағылшын тілі</h5>
        </div>
      
        <div class="mySlides1">
          <img src="./ImagesZhan/Ermek.png">
          <h5>Ермек Жатасов</h5>
          <h5 style="color: black; font-weight:bold">География</h5>
        </div>
      
        <div class="mySlides1">
          <img src="./ImagesZhan/Khurshed.png">
          <h5>Нұржан Тунгушбаев</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides1">
          <img src="./ImagesZhan/Nurzhan.png">
          <h5>Сұңғат Аманбаев</h5>
          <h5 style="color: black; font-weight:bold">Қазақ тілі</h5>
        </div>
      
        <div class="mySlides1">
          <img src="./ImagesZhan/Sungat.png">
          <h5>Хуршид Исей<h5>
          <h5 style="color: black; font-weight:bold">Биология</h5>
        </div>
      
        <div class="mySlides1">
          <img src="./ImagesZhan/Bekzat.png">
          <h5>Бекзат Конусов</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides2">
          <img src="./ImagesZhan/Ermek.png">
          <h5>Ермек Жатасов</h5>
          <h5 style="color: black; font-weight:bold">География</h5>
        </div>
      
        <div class="mySlides2">
          <img src="./ImagesZhan/Khurshed.png">
          <h5>Нұржан Тунгушбаев</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides2">
          <img src="./ImagesZhan/Nurzhan.png">
          <h5>Сұңғат Аманбаев</h5>
          <h5 style="color: black; font-weight:bold">Қазақ тілі</h5>
        </div>
      
        <div class="mySlides2">
          <img src="./ImagesZhan/Sungat.png">
          <h5>Хуршид Исей<h5>
          <h5 style="color: black; font-weight:bold">Биология</h5>
        </div>
      
        <div class="mySlides2">
          <img src="./ImagesZhan/Bekzat.png">
          <h5>Бекзат Конусов</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides2">
          <img src="./ImagesZhan/Azamat.png">
          <h5>Азамат Шумбалов</h5>
          <h5 style="color: black; font-weight:bold">Ағылшын тілі</h5>
        </div>

        <div class="mySlides3">
          <img src="./ImagesZhan/Khurshed.png">
          <h5>Нұржан Тунгушбаев</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides3">
          <img src="./ImagesZhan/Nurzhan.png">
          <h5>Сұңғат Аманбаев</h5>
          <h5 style="color: black; font-weight:bold">Қазақ тілі</h5>
        </div>
      
        <div class="mySlides3">
          <img src="./ImagesZhan/Sungat.png">
          <h5>Хуршид Исей<h5>
          <h5 style="color: black; font-weight:bold">Биология</h5>
        </div>
      
        <div class="mySlides3">
          <img src="./ImagesZhan/Bekzat.png">
          <h5>Бекзат Конусов</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides3">
          <img src="./ImagesZhan/Azamat.png">
          <h5>Азамат Шумбалов</h5>
          <h5 style="color: black; font-weight:bold">Ағылшын тілі</h5>
        </div>
        
        <div class="mySlides3">
            <img src="./ImagesZhan/Ermek.png">
            <h5>Ермек Жатасов</h5>
            <h5 style="color: black; font-weight:bold">География</h5>
          </div>

        <div class="mySlides4">
          <img src="./ImagesZhan/Nurzhan.png">
          <h5>Сұңғат Аманбаев</h5>
          <h5 style="color: black; font-weight:bold">Қазақ тілі</h5>
        </div>
      
        <div class="mySlides4">
          <img src="./ImagesZhan/Sungat.png">
          <h5>Хуршид Исей<h5>
          <h5 style="color: black; font-weight:bold">Биология</h5>
        </div>
      
        <div class="mySlides4">
          <img src="./ImagesZhan/Bekzat.png">
          <h5>Бекзат Конусов</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides4">
          <img src="./ImagesZhan/Azamat.png">
          <h5>Азамат Шумбалов</h5>
          <h5 style="color: black; font-weight:bold">Ағылшын тілі</h5>
        </div>
        
        <div class="mySlides4">
            <img src="./ImagesZhan/Ermek.png">
            <h5>Ермек Жатасов</h5>
            <h5 style="color: black; font-weight:bold">География</h5>
          </div>

          <div class="mySlides4">
            <img src="./ImagesZhan/Khurshed.png">
            <h5>Нұржан Тунгушбаев</h5>
            <h5 style="color: black; font-weight:bold">Физика</h5>
          </div>

        <div class="mySlides5">
          <img src="./ImagesZhan/Sungat.png">
          <h5>Хуршид Исей<h5>
          <h5 style="color: black; font-weight:bold">Биология</h5>
        </div>
      
        <div class="mySlides5">
          <img src="./ImagesZhan/Bekzat.png">
          <h5>Бекзат Конусов</h5>
          <h5 style="color: black; font-weight:bold">Физика</h5>
        </div>
      
        <div class="mySlides5">
          <img src="./ImagesZhan/Azamat.png">
          <h5>Азамат Шумбалов</h5>
          <h5 style="color: black; font-weight:bold">Ағылшын тілі</h5>
        </div>
        
        <div class="mySlides5">
            <img src="./ImagesZhan/Ermek.png">
            <h5>Ермек Жатасов</h5>
            <h5 style="color: black; font-weight:bold">География</h5>
          </div>

          <div class="mySlides5">
            <img src="./ImagesZhan/Khurshed.png">
            <h5>Нұржан Тунгушбаев</h5>
            <h5 style="color: black; font-weight:bold">Физика</h5>
          </div>

          <div class="mySlides5">
            <img src="./ImagesZhan/Nurzhan.png">
            <h5>Сұңғат Аманбаев</h5>
            <h5 style="color: black; font-weight:bold">Қазақ тілі</h5>
          </div>
        
          <div class="mySlides6">
            <img src="./ImagesZhan/Bekzat.png">
            <h5>Бекзат Конусов</h5>
            <h5 style="color: black; font-weight:bold">Физика</h5>
          </div>
        
          <div class="mySlides6">
            <img src="./ImagesZhan/Azamat.png">
            <h5>Азамат Шумбалов</h5>
            <h5 style="color: black; font-weight:bold">Ағылшын тілі</h5>
          </div>
          
          <div class="mySlides6">
              <img src="./ImagesZhan/Ermek.png">
              <h5>Ермек Жатасов</h5>
              <h5 style="color: black; font-weight:bold">География</h5>
            </div>
  
            <div class="mySlides6">
              <img src="./ImagesZhan/Khurshed.png">
              <h5>Нұржан Тунгушбаев</h5>
              <h5 style="color: black; font-weight:bold">Физика</h5>
            </div>
  
            <div class="mySlides6">
              <img src="./ImagesZhan/Nurzhan.png">
              <h5>Сұңғат Аманбаев</h5>
              <h5 style="color: black; font-weight:bold">Қазақ тілі</h5>
            </div>

            <div class="mySlides6">
                <img src="./ImagesZhan/Sungat.png">
                <h5>Хуршид Исей<h5>
                <h5 style="color: black; font-weight:bold">Биология</h5>
              </div>
        </div>
      </div>

      <div class="Contacts">
        <div class="text_contacts">
          <h3>Сұрақтарыңыз бар ма немесе неден бастау керектігін білмейсіз бе &quest;</h3>
          <h5>Өтінім қалдырыңыз, біздің менеджерлер сізбен байланысады.</h5>
        </div>
        <img src="https://dostyq.online/_nuxt/img/hoodie-girl.f547c21.png">
      </div>

        <div class="stroka1">
        <div class="str1">
          <img src="./ImagesZhan/Logo_Dostyq.png">
          <h5>Бізбен байланысыңыз</h5>
          <h5>+7 707 422 19 19</h5>
        </div>
        <div class="str2">
          <h5>біз әлеуметтік желілердеміз<img src="https://dostyq.online/_nuxt/3b14889642828170e4c2d5ed4c46054f.svg"> <img src="https://dostyq.online/_nuxt/e6dbe3812e3c422a9e3779d20d87e0d4.svg"> <img src="https://dostyq.online/_nuxt/61d7c7fca1769621de95c32b53e3efea.svg"></h5>
        </div>
        </div>
        <div class="stroka2">
          <div class="str3">
           <h5>© 2022 Dostyq Bilim. Барлық құқықтар сақталған.</h5>
          </div>
          <div class="str4">
          <h5>Құпиялылық саясаты. </h5>
          <h5>Келісімшарт бойынша ұсыныс.</h5>
          </div>
        </div>

      <script src="Main.js"></script>
</body>
</html>