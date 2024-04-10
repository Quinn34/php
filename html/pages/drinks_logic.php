<?php
session_start();
include 'conn.php';

    $naam = $_POST["naam"];
    $beschrijving = $_POST["beschrijving"];
    $prijs = $_POST['prijs'];

    $stmt =$connection->prepare("INSERT INTO drinks (naam, beschrijving, prijs) VALUES(:naam, :beschrijving, :prijs)");
    $stmt->bindParam(":naam", $naam);
    $stmt->bindParam(":beschrijving", $beschrijving);
    $stmt->bindParam(":prijs", $prijs);
    $stmt->execute();

    header('Location: drinks.php');
?>