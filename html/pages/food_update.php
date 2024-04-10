<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM producten WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$producten = $stmt->fetch();
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
        <form class='product_form' action='food_update_logic.php' name='food_update_logic' method="POST">
        <div class="row555">
            <label>Id van product</label> 
            <input type="text" name="id" value= "<?php echo $producten['id']; ?>" >
            <label>Naam van product</label>
            <input type="text" name="naam" value= "<?php echo $producten['naam']; ?>" >
            <label>beschrijving</label>
            <input type="text" name="beschrijving" value= "<?php echo $producten['beschrijving']; ?>" >
            <label>Prijs van product</label>
            <input type="text" name="prijs" value= "<?php echo $producten['prijs']; ?>" >
            <label>De aanbiedingen</label>
            <input type="text" name="aanbiedingen" value= "<?php echo $producten['aanbiedingen']; ?>" >

        </div>
        <div class="row55">
            <input type="submit" value='update' class="button-log"/>
        </div>
        </form>
    </div>
</header>
</html>