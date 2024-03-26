<?php
session_start();
include 'conn.php';

    $stmt = $pdo-> prepare("SELECT * FROM users WHERE username=:user AND password=:pass");
    $stmt->execute(['user' => $_POST['username'],'pass' => $_POST['password']]);
    $user = $stmt ->fetch();

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if (!$username == "admin" && $password == "admin") {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    } else {
        header("Location: login.php");
    }
 
?>