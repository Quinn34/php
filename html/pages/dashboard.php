<?php
    session_start();
    include 'conn.php';
    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
        exit(); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css" >

</head>
<body>
        <div class="full-login">
            <form class='register_form' action='user_delete_logic.php' name='user_delete_logic'method="POST">
            <div class="back-sh">
                <a href="/index.php" class="backi"><-- Back</a>
            </div>
            <label>gebruiker verwijderen</label>
                <div class="row55">
                    <label>Id van user: </label> 
                    <input type="text" name="id_user"placeholder="   id of user" required>
                </div>
                <div class="row55">
                    <input type="submit" value='delete user' class="button-log"/>
                </div>
            </form>
        </div>
        <div class="full-login">
            <form class='product_form' action='food_logic.php' name='food_logic' method="post">
            <div class="row555">
                <label>Nieuw product (Eten)</label> 
                <input type="text" name="naam"placeholder="   Naam" required>
                <input type="text" name="beschrijving"placeholder="   beschrijving" >
                <input type="text" name="prijs"placeholder="   prijs" >
                <input type="text" name="aanbiedingen"placeholder="   aanbieding" >
            </div>
            <div class="row55">
                <input type="submit" value='Maak product' class="button-log"/>
            </div>
            </form>
        </div>

        <div class="full-login">
            <form class='deletef_form' action='food_delete.php' name='food_delete_logic'method="POST">
            <div class="back-sh">
                <a href="/index.php" class="backi"><-- Back</a>
            </div>
            <label>eten verwijderen</label>
                <div class="row55">
                    <label>Id van product: </label> 
                    <input type="text" name="id_producten"placeholder="   id van eten" required>
                </div>
                <div class="row55">
                    <input type="submit" value='delete' class="button-log"/>
                </div>
            </form>
        </div>

        <div class="full-login">
            <form class='food_update_form' action='food_update.php' name='food_update' method="post">
            <div class="back-sh">
                <a href="/index.php" class="backi"><-- Back</a>
            </div>
                    <label>Naar eten update pagina:</label> 
                <div class="row55">
                    <input type="submit" value='Update' class="button-log"/>
                </div>
            </form>
        </div>

        <div class="full-login">
        <form class='drinks_form' action='drinks_logic.php' name='drinks_logic' method="post">
        <div class="back-sh">
                <a href="/index.php" class="backi"><-- Back</a>
            </div>
        <div class="row555">
            <label>Nieuw product (drinken) </label> 
            <input type="text" name="naam"placeholder="   Naam" >
            <input type="text" name="beschrijving"placeholder="   beschrijving" >
            <input type="text" name="prijs"placeholder="   prijs" >
            <input type="text" name="aanbiedingen"placeholder="   aanbieding" >
        </div>
        <div class="row55">
            <input type="submit" value='Maak product' class="button-log"/>
        </div>
        </form>
        </div>

        <div class="full-login">
            <form class='deleted_form' action='drinks_delete.php' name='drink_delete_logic'method="POST">
            <div class="back-sh">
                <a href="/index.php" class="backi"><-- Back</a>
            </div>
            <label>Drinken verwijderen</label>
                <div class="row55">
                    <label>Id van product: </label> 
                    <input type="text" name="id_drinks"placeholder="   id van drinken" required>
                </div>
                <div class="row55">
                    <input type="submit" value='delete' class="button-log"/>
                </div>
            </form>
        </div>
        <div class="full-login">
            <form class='drinks_update_form' action='drinks_update.php' name='drinks_update' method="post">
            <div class="back-sh">
                <a href="/index.php" class="backi"><-- Back</a>
            </div>
                    <label>Naar drinken update pagina:</label> 
                <div class="row55">
                    <input type="submit" value='Update' class="button-log"/>
                </div>
            </form>
        </div>
        <?php
            $stmt = $connection->prepare("SELECT * FROM producten");
            $stmt->execute();
            $data = $stmt->fetchAll();

            foreach ($data as $row) {
                echo $row['naam'];
                echo "<a href='food_update.php?id=".$row ['id']."'>update</a>";
                // echo "<a href='pages/food_update.php?id=".$row ['id']."'>update</a>";
            }
            ?>
</body>
</html>
</form>