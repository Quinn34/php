<?php
session_start();
include 'conn.php';

$stmt = $connection->prepare("SELECT * FROM drinks WHERE id=:id");
$stmt->execute(['id' => $_GET['id']]);
$producten = $stmt->fetch();

$data = [
    'naam' => $_POST['naam'],
    'beschrijving' => $_POST['beschrijvingen'],
    'prijs' => $_POST['prijs'],
];
$sql = "UPDATE drinks SET naam=:naam, beschrijving=:beschrijving, prijs=:prijs, WHERE id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);

header('Location:../index.php');
?>