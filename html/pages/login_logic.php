<?php
session_start();

 if($_POST['leeftijd'] < 18 ){
 header("Location: error.php"); 
 }
 else{
    if(empty($_POST["username"]) || empty($_POST["password"])){
        header("Location: login.php");
        exit();
    }
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username == "admin" && $password == "admin"){
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    } else {
        header("Location: login.php");
    }
 }
?>