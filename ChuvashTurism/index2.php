<?php 
        session_start();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музеи</title>
    <link rel="stylesheet" href="css\style2.css">
    <link rel="stylesheet" href="css\style.css">
    <link rel="shortcut icon" href="img\favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap&cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/menu3.css">
</head>
<body style="background-image: url(./img/Chuvash_NAZION_MUZ.jpg);
             background-repeat: no-repeat;
             background-position-x: 40px;
             background-size:100%;
">
  <style>
    body { overflow-y: hidden; }
  </style>
  <main>
  
  <div class="container">
        <header class="header">
            <div class="Logo"><a href="index.html"><img src="./img/logotip.jpg" alt="Logo" width="128" height="72" style="margin-left: 50px; border-radius: 20px; margin-top: -10px;"/> </a></div>
            <input type="text" placeholder="Введите район по которому хотите узнать информацию" class="search" style="background-color: #B3F4D9">
            <div class="buttons">
            <?php
                  if($_SESSION['name']==''){
                ?>
              <button class="button button-primary" onclick="document.getElementById('id01').style.display='block'">
                <img src="img/user.svg" alt="user" class="button-icon">
                <span class="button-text" id="cart-button">Войти</span>
              </button>
              <?php
                  } else {
              ?>
                <a style="text-decoration: none; cursor: pointer"><span style="color: white; box-shadow: 0px 0px 4px 0px black; background-color: #25c9d5; padding: 15px; border-radius: 10px;"><?=$_SESSION['name']?></span></a>
              <?php
                  }
              ?>
            </div>
          </header>
    </div>
        <input type="checkbox" id="nav-toggle" hidden>
            <nav class="nav">
            <label for="nav-toggle" class="nav-toggle" onclick></label>
            <h2 class="logo"> <a href="./index.php">Чувашия</a> </h2>
            
            <ul>
                <li><a href="./index.php">Главная</a>
                <li><a href="./index2.php">Музеи</a>
                <li><a href="#">Экскурсии</a>
                <li><a href="#">Туры</a>
                <li><a href="./contacts.html" class="contacts">Контакты</a>
            </ul>
          
          
            </nav>
          
          

    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
      <div class="modal-content">
        <div class="container">
        <h1>Авторизация</h1>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Email" type="email" name="email" required>
        
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Password" name="psw" required>
          <div class="clearfix">
            <div class="bye">
            
            <button type="submit" class="signupbtn">Войти</button>
            </div>
          
            <div class="bye">
              <button class="rag" onclick="document.getElementById('registration').style.display='block'; document.getElementById('id01').style.display='none'">Зарегистрироваться</button>
            </div>
          </div>
        </div>
    </div>
    </div>

    <div id="registration" class="modal">
        <span onclick="document.getElementById('registration').style.display='none'" class="close" title="Close Modal">×</span>
        <form class="modal-content">
          <div class="container">
            <h1>Регистрация</h1>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Email" name="email" required>
          
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Password" name="psw" required>
          
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <div class="clearfix">
              <div class="bye">
              <button  type="submit" class="rag">Зарегистрироваться</button>
              </div>
            </div>
          </div>
        </form>
      </div>




    <h1 class="homefonter">Чувашские Музеи</h1>
    <h3 class="homemusfonts">Уникальные экспонаты и скромная</h3>
    <h3 class="homemusfonts">стоимость входного билета: 17 музеев</h3>
    <h3 class="homemusfonts">Чебоксар ждут жителей и гостей города. Некоторые из них можно посетить</h3>
    <h3 class="homemusfonts" style="margin-bottom: 300px;">бесплатно, в других плата за вход — всего от 50 руб.</h3>
    
    <!-- <div class="rek">
      <h1>Рекомендуем посмотреть</h1>
    </div>
    <div class="line"><h1></h1></div> -->




    
    <h1 align="center">Рекомендуем посмотреть</h1>
    <div class="container2">
        <div class="blocker">
          
          <button class="block sal-animate" data-sal="slide-up" onclick="document.location='./museam/Cuvash_NAZION_MUZ.html'">
            <img src="./img/Chuvash_NAZION_MUZ.jpg" alt="io" class="imuger" style="margin-top: -20px;">  
              <h1 class="text2">Чувашский национальный музей</h1>
              <p class="pidpis">Познакомьтесь с самобытной культурой республики: традициями, ремеслами, уникальными вышивками, обрядовыми праздниками и крестьянским бытом древних чувашей.</p>
              <p class="addres">г. Чебоксары, Красная площадь, 5/2</p>
              <p class="raspisanie">
                <br>
                вт-ср 10.00 – 18.00
                <br>
                чт 12.00 – 20.00
                <br>
                пт-вс 10.00 – 18.00
              </p>
            </button>
         
          
            <button class="block" onclick="document.location='./museam/Chuvash_traktor.html'">
              <img src="./img/Chuvash_TRAKTOR.jpg" alt="io" class="imuger" style="margin-top: -25px;">  
                <h1 class="text2" style="margin-bottom: 5px;">Музей истории трактора</h1>
                <p class="pidpis">Познакомьтесь с эволюцией мирового тракторостроения, начинавшего свой путь от примитивных орудий труда и живой тяговой силы до машины будущего - высокоэнергетического механизма с искусственным интеллектом.</p>
                <p class="addres">г. Чебоксары, пр. Мира, 1, корп. 2</p>
                <p class="raspisanie">
                  <br>
                  пн-пт 8.00-18.00
                  <br>
                  сб-вс 10.00-17.00
                </p>
              </button>
            
              <button class="block" onclick="document.location='./museam/Chuvash_CHAPAEV.html'">
                <img src="./img/Chuvash_CHAPAEV.jpg" alt="io" class="imuger" style="margin-top: -74px;">  
                  <h1 class="text2" style="margin-bottom: 5px;">Музей В.И. Чапаева</h1>
                  <p class="pidpis">Познакомьтесь с событиями периода гражданской войны на примере жизни и деятельности В. И. Чапаева, его боевых соратников и политических противников. </p>
                  <p class="addres">г. Чебоксары, просп. Ленина, 46А</p>
                  <p class="raspisanie">
                    <br>
                    вт-вс 10:00–18:00
                  </p>
                  <img src="./img/!.png" alt="!" class="voskl" >
                  <div class="voskl-text">Увы, это место временно закрыто.</div>
                </button>
                <button class="block" onclick="document.location='./museam/Chuvash_hud.html'">
                  <img src="./img/Chuvash_Hud.jpg" alt="io" class="imuger" style="margin-top: -30px;">  
                    <h1 class="text2"  style="margin-bottom: 50px;">Чувашский государственный художественный музей</h1>
                    <p class="pidpis">Познакомьтесь с экспозициями отражающими историю и развитие чувашского и изобразительного искусства.</p>
                    <p class="addres">Чебоксары, ул. Калинина, 60</p>
                    <p class="raspisanie">
                      <br>
                      пн-ср 10.00 – 18.00
                      <br>
                      чт 12.00 – 20.00
                      <br>
                      пт-сб 10.00 – 18.00
                    </p>
                  </button>
        </div>
  </div>
    
                      <!-- РАЙОНЫ -->


      <!-- <div class="rek">
      <h1>Районы</h1>
    </div>
    <div class="line"><h1></h1></div> -->

    <h1> </h1>
  <div class="container2">
    <div class="blocker">
      <button class="block1" onclick="document.location='./Regions_Museam/ibresi.html'">
        <img src="./img/Raions/Ibresi.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
          <h1 class="text2">Ибреси</h1>
        </button>
        <button class="block1" onclick="document.location='./Regions_Museam/alatir_block.html'">
          <img src="./img/Raions/Aalatar.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
            <h1 class="text2">Алатырь</h1>
          </button>
          </button>
          <button class="block1">
            <img src="./img/Raions/vurnari.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
              <h1 class="text2">Вурнары</h1>
            </button>
            <button class="block1">
              <img src="./img/Raions/kanash.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
                <h1 class="text2">Канаш</h1>
              </button>
    </div>
</div>
<div class="container2">
  <div class="blocker">
    <button class="block1">
      <img src="./img/Raions/alikovo.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
         <h1 class="text2">Аликово</h1>
      </button>
      <button class="block1">
        <img src="./img/Raions/krasnoarmeyskoe.gif" alt="io" class="imuger1" style="margin-top: -15px;">  
          <h1 class="text2">Красноармейское</h1>
        </button>
        <button class="block1">
          <img src="./img/Raions/mariinskposad2.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
            <h1 class="text2">Мариинский Посад</h1>
          </button>
          <button class="block1">
            <img src="./img/Raions/krasniechetai.gif" alt="io" class="imuger1" style="margin-top: -15px;">  
              <h1 class="text2">Красные Четаи</h1>
            </button>
  </div>
</div>
<div class="container2">
  <div class="blocker">
    <button class="block1">
      <img src="./img/Raions/Моргауши.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
        <h1 class="text2">Моргауши</h1>
      </button>
      <button class="block1">
        <img src="./img/Raions/Батырево.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
          <h1 class="text2">Батырево</h1>
        </button>
        </button>
        <button class="block1">
          <img src="./img/Raions/комсомольское.gif" alt="io" class="imuger1" style="margin-top: -15px;">  
            <h1 class="text2">Комсомольское</h1>
          </button>
          <button class="block1">
            <img src="./img/Raions/kozlovka1.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
              <h1 class="text2">Козловка</h1>
            </button>
  </div>
</div>
<div class="container2">
  <div class="blocker">
    <button class="block1">
      <img src="./img/Raions/poretskoe.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
        <h1 class="text2">Порецкое</h1>
      </button>
      <button class="block1">
        <img src="./img/Raions/urmary.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
          <h1 class="text2">Урмары</h1>
        </button>
        </button>
        <button class="block1">
          <img src="./img/Raions/цивильск.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
            <h1 class="text2">Цивильск</h1>
          </button>
          <button class="block1">
            <img src="./img/Raions/чебы.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
              <h1 class="text2">Чебоксары</h1>
            </button>
  </div>
</div>
<div class="container2">
  <div class="blocker">
    <button class="block1">
      <img src="./img/Raions/шемурша.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
        <h1 class="text2">Шемурша</h1>
      </button>
      <button class="block1">
        <img src="./img/Raions/Шумерля.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
          <h1 class="text2">Шумерля</h1>
        </button>
        </button>
        <button class="block1">
          <img src="./img/Raions/yadrin.gif" alt="io" class="imuger1" style="margin-top: -15px;">  
            <h1 class="text2">Ядрин</h1>
          </button>
          <button class="block1">
            <img src="./img/Raions/Яльчики.jpg" alt="io" class="imuger1" style="margin-top: -15px;">  
              <h1 class="text2">Яльчики</h1>
            </button>
  </div>
</div>
<div class="container2">
  <div class="blocker">
    <button class="block1">
      <img src="./img/Raions/янтики.gif" alt="io" class="imuger1" style="margin-top: -15px;">  
        <h1 class="text2">Янтиково</h1>
      </button>
  </div>
</div>


    </main>
</body>
</html>