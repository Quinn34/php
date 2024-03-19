<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit(); 
    }
    echo"Welcome to the dashboard";     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="/assets/gg (1).jpeg" class="image">
</body>
</html>