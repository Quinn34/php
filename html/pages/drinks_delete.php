<?php
session_start();
include 'conn.php';


$userid = $_POST["id_drinks"];


$stmt = $connection->prepare("DELETE FROM drinks WHERE id=:drinksid");
$stmt->bindParam(":drinksid", $drinksid);
$stmt->execute();


header('Location: dashboard.php')
?>