<?php

require_once '../db/conection.php';
$conection = connection();

// sanitizar datos de entrada del formulario
function sanitize($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

$id = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize($_POST["name"]);
    $lastname = sanitize($_POST["lastname"]);
    $phone = sanitize($_POST["phone"]);
    $email = sanitize($_POST["email"]);
}

$sql = "INSERT INTO users (id, name, lastname, phone, email) VALUES (:id, :name, :lastname, :phone, :email)";
$stmt = $conection->prepare($sql);

$stmt->execute([
    ':id' => $id,
    ':name' => $name,
    ':lastname' => $lastname,
    ':phone' => $phone,
    ':email' => $email,

]);

if ($stmt) {
    header("Location: ../index.php");
    exit;
}
