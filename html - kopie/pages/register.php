<?php

 if($_POST['leeftijd'] < 18 ){
 header("Location:/pages/error.php"); 
 }
 else{
  header("location:/pages/register.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>register</title>
        <link rel="stylesheet" href="/css/main.css" >
    </head>
    <body>
        <div class="aangemeld">
        <h1>Je bent Succesvol aangemeld</h1>
    </div>
    <div class="terug">
        <h1>Terug naar Huizens Bakkerij</h1>
    </div>
    <div class="terug-button">
        <a href="/index.php" class="Items">Terug</a>     
    </div>
</body>
</html>
