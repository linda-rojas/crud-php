<?php

require_once '../db/conection.php';

$connection = connection();
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=:id";

// consultas con parametos // Prepara la consulta para ser ejecutada luego con execute()
$stmt = $connection->prepare($sql);
$stmt->execute([
    ':id' => $id
]);

if ($stmt) {
    header("location: ../index.php");
}
