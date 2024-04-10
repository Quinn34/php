<?php
 include 'conn.php';

$data = [
    'naam' => $_POST['naam'],
    'beschrijving' => $_POST['beschrijving'],
    'prijs' => $_POST['prijs'],
    'aanbiedingen' => $_POST['aanbiedingen'],
    'id' => $_POST['id']
];
$sql = "UPDATE producten SET naam=:naam, beschrijving=:beschrijving, prijs=:prijs, aanbiedingen=:aanbiedingen  WHERE id=:id";
$stmt= $connection->prepare($sql);
$stmt->execute($data);

header('Location:../index.php');
?>