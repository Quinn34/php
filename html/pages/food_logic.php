<?php
session_start();
include 'conn.php';


    
    $naam = $_POST["naam"];
    $beschrijving = $_POST["beschrijving"];
    $prijs = $_POST['prijs'];
    $aanbieding = $_POST['aanbiedingen'];

    $stmt = $connection->prepare("INSERT INTO producten (naam, beschrijving, prijs, aanbiedingen) VALUES(:naam, :beschrijving, :prijs, :aanbiedingen)");
    $stmt->bindParam(":naam", $naam);
    $stmt->bindParam(":beschrijving", $beschrijving);
    $stmt->bindParam(":prijs", $prijs);
    $stmt->bindParam(":aanbiedingen", $aanbieding);
    $stmt->execute();

    header('Location: food.php');
?>