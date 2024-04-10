<?php
session_start();
include 'conn.php';


    
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST['Email'];
    
    $stmt = $connection->prepare("INSERT INTO users (username, password, email) VALUES(:user, :pass, :mail)");
    $stmt->bindParam(":user", $username);
    $stmt->bindParam(":pass", $password);
    $stmt->bindParam(":mail", $email);
    $stmt->execute();

    header('Location: login.php');
 
?>