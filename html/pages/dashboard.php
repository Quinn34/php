<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit(); 
    }

    if($_SESSION['rol'] < 2){
        // Voeg hier de code toe die moet worden uitgevoerd als de 'rol' van de sessie minder is dan 2
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="/css/main.css" >
</head>
<body>
    <div class="full-login">
        <form class='register_form' action='user_delete_logic.php' name='user_delete_logic'method="POST">
            <div class="row55">
                <label>Id van user: </label> 
                <input type="text" name="id_user"placeholder="   id of user" required>
            </div>
            <div class="row55">
                <input type="submit" value='delete user' class="button-log"/>
            </div>
        </div>
</body>
</html>
</form>