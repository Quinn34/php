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
        <form class='product_form' action='drinks_update_logic.php' name='drinks_update_logic' method="post">
        <div class="row555">
            <label>Id van product</label> 
            <input type="text" naam="id_drinks" value= "<?php echo $drinks['id']; ?>" >
            <label>Naam van product</label>
            <input type="text" naam="naam" value= "<?php echo $drinks['naam']; ?>" >
            <label>beschrijving</label>
            <input type="text" naam="beschrijving" value= "<?php echo $drinks['beschrijving']; ?>" >
            <label>Prijs van product</label>
            <input type="text" naam="product" value= "<?php echo $drinks['prijs']; ?>" >
        </div>
        <div class="row55">
            <input type="submit" value='update' class="button-log"/>
        </div>
    </div>
</header>
</html>