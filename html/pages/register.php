<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/main.css" >
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

<div class="full-login">
    <form class='register_form' action='register_logic.php' name='login_logic'method="POST">
        <div class="back-sh">
            <a href="/pages/login.php" class="backi"><-- Back</a>
        </div>
        <div class="mid">
            <h3>Register</h3>
        </div> 
        <div class="row55">
            <p>Naam user</p>
            <input type="text" name="username"placeholder="   username" required>
        </div>
        <div class="row55">
            <p>Email user</p>
            <input type="Email" name="Email" placeholder="   Vul Email in" required/>
        </div>
    <div class="row55">
        <p>Wachtwoord</p>
        <input type="password" name="password"placeholder="   Password" required>
    </div>
    <div class="row55">
        <input type="submit"  value='register' class="button-log"/>
    </div>
</form>
</div>
</body>
</html>