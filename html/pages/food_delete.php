<?php
session_start();
include 'conn.php';


$productenid = $_POST["id_producten"];


$stmt = $connection->prepare("DELETE FROM producten WHERE id=:productenid");
$stmt->bindParam(":productenid", $productenid);
$stmt->execute();


header('Location: dashboard.php')
?>