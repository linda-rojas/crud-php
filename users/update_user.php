<?php

require_once '../db/conection.php';

// sanitizar datos de entrada del formulario
function sanitize($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = sanitize($_POST['id']);
    $name = sanitize($_POST['name']);
    $lastname = sanitize($_POST['lastname']);
    $phone = sanitize($_POST['phone']);
    $email = sanitize($_POST['email']);
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
