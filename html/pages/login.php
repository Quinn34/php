
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
            <a href="#" class="Items">Login</a>   
            </div>   
        </div>
    </div>
</header>
<body>
<div class="full-login">
    <form class='register_form' name="register" method="POST" action="/pages/register.php">
        <div class="mid">
            <h3>Log In</h3>
        </div>
        <div class="row55">
            <p>Naam user</p>
            <input type="text" name="naam" placeholder="Vul Naam in"/>
        </div>
        <div class="row55">
            <p>Email user</p>
            <input type="Email" name="Email" placeholder="Vul Email in"/>
        </div>
    <div class="row55">
        <p>Wachtwoord</p>
        <input type="password" name="password" placeholder="Vul Wachtwoord in"/>
    </div>
    <div class="row55">
        <p>Leeftijd (18)</p>
        <input type="text" name="leeftijd" placeholder="Vul leeftijd in"/>
    </div>
    <div class="row55">
        <p>Agreed Terms of Service</p>
        <input type="checkbox" name="av"/>
    </div>
    <div class="row55">
        <input type="submit" name="submit" value='Login' class="button-log"/>
    </div>
</form>
</div>
</body>
</html>

</html>