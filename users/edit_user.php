<?php

require_once '../db/conection.php';
$conection = connection();

$id = $_GET['id'];
$stmt = $conection->query("SELECT * FROM users WHERE id=$id");

$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Formulario</title>
</head>

<body>
    <div>
        <form action="./update_user.php" method="POST">

            <h1>Editar Usuario</h1>

            <div>
                <label for="id">id</label>
                <input type="hidden" name="id" value="<?= $row['id'] ?>" required>
            </div>
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" value="<?= $row['name'] ?>" required>
            </div>
            <div>
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" value="<?= $row['lastname'] ?>" required>
            </div>
            <div>
                <label for="phone">Celular</label>
                <input type="number" name="phone" value="<?= $row['phone'] ?>" required>
            </div>
            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" value="<?= $row['email'] ?>" required>
            </div>
            <button type="submit">Actualizar Usuario</button>
        </form>
    </div>
</body>

</html>