<?php

require_once '../db/conection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
}

$connection = connection();
$sql = "UPDATE users SET name=:name, lastname=:lastname, phone=:phone, email=:email where id=:id";
$stmt = $connection->prepare($sql);
$stmt->execute([
    ':id' => $id,
    ':name' => $name,
    ':lastname' => $lastname,
    ':phone' => $phone,
    ':email' => $email,
]);

if ($stmt) {
    Header("location: ../index.php");
}
