<?php 
        session_start();

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт по развитию туризма в Чувашии</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style3.css">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <script src="./js/main.js"></script>
    <link rel="preload" href="/local/templates/main/assets/css/fonts.css?15882481425209" >
    <link rel="stylesheet" href="/local/templates/main/assets/css/fonts.css?15882481425209">
    <link rel="stylesheet" href="./css/menu.css">
  
</head>
<body>

<input type="checkbox" id="nav-toggle" hidden>
<nav class="nav">
<label for="nav-toggle" class="nav-toggle" onclick></label>
<h2 class="logo"> <a href="./index.php">Чувашия</a> </h2>
<ul>
    <li><a href="./index2.php">Музеи</a>
    <li><a href="#2">Экскурсии</a>
    <li><a href="#2">Туры</a>
    <li><a href="./contacts.html" class="contacts">Контакты</a>
</ul>
</nav>

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
    

     <!-- <div class="container1">
        <div class="blocker">
            <button class="block" onclick="location.href='index2.html';">
                <h1 class="text1">Музеи</h1>
                <img src="/img/3text.svg" alt="3text" class="text3w">
            </button>
            <button class="block">
                <h1 class="text2">Контакты</h1>
            </button>
            <button class="block">
                <h1 class="text3">Экскурсии</h1>
            </button>
        </div>
    </div>
     -->
     
     <div class="Home">
         <h1 class="homefont">Туристический</h1>
         <h1 class="homefont">портал Чувашии</h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1><h1>           </h1><h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
         <h1>           </h1>
     </div>
     
</main>
    <section>
      <div style="margin-top: -10px;  margin-left: 50px;">
       <h1 align="center" style="color: black; font-size: 49px;">Новости</h1>
       <div style="border: 1.5px solid gray; border-radius: 15px; padding: 5px;">
       <h1 style="position: absolute; padding-left: 130px; font-size: 28px;">Сурский и Казанские рубежи</h1>
       <p align="center" style=" font-family: Comic Sans MS,Comic Sans,sans-serif;width: 600px; float: left;align-items: center; padding-top: 70px; padding-left: 70px;">Указом Главы Чувашии Олега Николаева, 2021 год в Чувашии объявлен Годом трудовой доблести строителей Сурского и Казанского оборонительных рубежей.<br> Так республика отметит юбилейную дату — 80-летие с начала строительства всечувашского объекта обороны. </p>
       <img src="./img/Сурские рубежи.jpg" alt="rubeji" style="width: 400px; margin-left: 150px;">
       <button onclick="document.location='./niys/Surski_i_Kazanski_Rubezi.html'" class="podrobnee" style="width: 200px; position:absolute;margin-left: -1130px; margin-top: 220px; border-radius: 10px; ">Читать подробнее</button>
      </div>
</section>
     <h1></h1>
<!--  -->
    
<!--  -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <div class="modal-content">
    <div class="container">
    <h1>Авторизация</h1>
    <form action="./vhod.php">
    <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Email" type="email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Password" name="psw" required>
      <div class="clearfix">
          <div class="buttonser">
        <div class="bye">
        <input type="submit" class="rag" value="Войти" style="border: none; font-size: 15px; padding:10px; cursor: pointer; color: white; margin-top: 100px;">

        </div>
    </form>
        <div class="bye">
            <button class="rag" onclick="document.getElementById('registration').style.display='block'; document.getElementById('id01').style.display='none'">Зарегистрироваться</button>
        </div>
          </div>
      </div>
    </div>
</div>
</div>

<div id="registration" class="modal">
    <span onclick="document.getElementById('registration').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content" action="check.php" method="post">
      <div class="container">
        <h1>Регистрация</h1>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Email" name="email" required>
        
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        
        <div class="clearfix">
          <div class="bye">
          <input type="submit" class="rag" value="Зарегистрироваться" style="border: none; font-size: 15px; padding:10px; cursor: pointer; color: white;">
          </div>
        </div>
      </div>
    </form>
  </div>

</body>
</html>