<?php
 include 'conn.php';

$data = [
    'naam' => $_POST['naam'],
    'beschrijving' => $_POST['beschrijving'],
    'prijs' => $_POST['prijs'],
    'id' => $_POST['id']

];
$sql = "UPDATE drinks SET naam=:naam, beschrijving=:beschrijving, prijs=:prijs, WHERE id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);

header('Location:../index.php');
?>