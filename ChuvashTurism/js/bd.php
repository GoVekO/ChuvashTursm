<?php
    //Подключение к бд users / join to BD users
    $db_host = "localhost"; 
    $db_user = "root"; // Логин БД
    $db_password = "root"; // Пароль БД 
    $db_base = 'turist'; // Имя БД
    $db_table = "users"; // Имя Таблицы БД

    $db_users = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]); 
?>