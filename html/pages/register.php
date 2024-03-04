<?php

 if($_post ['leeftijd'] < 18 ){
 header("Location: ../index.php"); 
 }
 else{
  echo'legal';
 }
?>
<form class='register_form' name="register" method="POST" action="pages/register.php">
    <h3>Register Now!</h3>
    <div class="row">
        <p>Naam</p>
        <input type="text" name="naam"/>
    </div>
    <div class="row">
        <p>Leeftijd</p>
        <input type="text" name="leeftijd"/>
    </div>
    <div class="row">
        <p>Alegemene voorwaarden</p>
        <input type="checkbox" name="av"/>
    </div>
    <div class="row">
        <p>geslacht</p>
        <input type="text" name="geslacht"/>
    </div>
    <div class="row">
        <input type="submit" name="submit" value='send'/>
    </div>
</form>