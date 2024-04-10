<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css" >
    <script src="load.js"></script>
</head>
<header>
    <div class="nav">
        <div class="left-75">
            <div class="name">
            <p>Van Huizens Bakkerij</p>
            </div>
        </div>
        <div class="right-25">
        <div class="buttons">
            <a href="/index.php" class="Items">Home</a>     
            <a href="/pages/product.php" class= "Items">Producten</a>     
            <a href="/pages/contact.php" class="Items">Contact</a>     
            <a href="/pages/login.php" class="Items">Login</a>   
            </div>   
        </div>
    </div>
</header>
<body>
    <div class="con-100">
        <h1>Assortiment</h1>
        <h2>Drinken</h2>
    </div>
    <?php
     include 'conn.php';
     ?>
<div class="voedsel justify-center">
        <?php
          $stmt = $connection->query("SELECT * FROM drinks");
          while ($row = $stmt->fetch()) {
   
             echo '<div class= "foto">';
            //  echo '<img class= "fotos"  src="/assets/iceteaL.jpeg" alt="">';
                  echo '<div class="">';
                  echo '<h1>';
                  echo $row['naam'] ."<br />\n";
                  echo '</h1>';
                  echo '<h5>';
                   echo $row['beschrijving'] ."<br />\n";
                   echo '</h5>';
                   echo '<h4>';
                   echo $row['prijs'] ."<br />\n";
                   echo '</h4>';
                   echo '</div>';
                   echo '</div>';
                }
        ?>
</div>
<div class="terug-button">
    <a href="/pages/product.php" class="Items">Terug</a>     
</div>
</body>
</html>