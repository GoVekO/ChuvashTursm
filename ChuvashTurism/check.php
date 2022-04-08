<?php
    require "./js/bd.php";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $db_users->query("SELECT email FROM users WHERE email = '$email'"); 
    $stmt->execute();
    $exists = $stmt->fetchColumn();
    if ($exists){
        echo "email занят!";
        return;
        echo "<script>document.location.replace('../');</script>";
    }
        
    try {
        // Собираем данные для запроса
        $data = array( 'name' => $name, 'password' => $password, 'email' => $email);
        // Подготавливаем SQL-запрос
        $query =$db_users->prepare("INSERT INTO $db_table (name, password, email) values (:name, :password, :email)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
        session_start();
        $_SESSION['name'] = $name;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
?>
