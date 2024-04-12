<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM drinks WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$drinks = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css" >
</head>
<header>
    <div class="full-login">
        <form class='product_form' action='drinks_update_logic.php' name='drinks_update_logic' method="POST">
        <div class="row555">
            <label>Id van product</label> 
            <input type="text" name="id_drinks" value= "<?php echo $drinks['id']; ?>">
            <label>Naam van product</label> 
            <input type="text" name="naam" value= "<?php echo $drinks['naam']; ?>" >
            <label>beschrijving</label>
            <input type="text" name="beschrijving" value= "<?php echo $drinks['beschrijving']; ?>" >
            <label>Prijs van product</label>
            <input type="text" name="prijs" value= "<?php echo $drinks['prijs']; ?>" >
        </div>
        <div class="row55">
            <input type="submit" value='update' class="button-log"/>
        </div>
    </div>
</header>
</html>