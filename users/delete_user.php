<?php

require_once '../db/conection.php';

$connection = connection();
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=:id";

$stmt = $connection->prepare($sql);
$stmt->execute([
    ':id' => $id
]);

if ($stmt) {
    header("location: ../index.php");
}
