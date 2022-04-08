<?php 
    require "./js/bd.php";
    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $db_users->query("SELECT email, password, name FROM users WHERE email = '$email' AND password = '$password'");
    $stmt->execute();
    $res = $stmt->fetchAll();
    $info= $stmt->errorInfo();
    print_r($res);
?>