<?php

require_once './db/conection.php';

$conection = connection();
$stmt = $conection->query("SELECT * FROM users");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>CRUD</title>
</head>

<body>
    <div class="flex justify-center items-center h-auto bg-gray-100">
        <form class="flex flex-col gap-4 h-80 justify-center" action="./users/create_user.php" method="POST">

            <h1 class="text-center font-medium t-[50px]">Crear Usuario</h1>

            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" required>
            </div>
            <div>
                <label for="phone">Celular</label>
                <input type="number" name="phone" required>
            </div>
            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" required>
            </div>
            <button type="submit" class="flex justify-center text-center p-1 rounded bg-green-400">Crear Usuario</button>
        </form>
    </div>

    <div>
        <table>
            <h2>USUARIOS REGISTRADOS</h2>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Celular</th>
                    <th>Correo</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['phone'] ?></th>
                        <th><?= $row['email'] ?></th>

                        <th><a href="./users/edit_user.php?id=<?= $row['id'] ?>">Editar</a></th>
                        <th><a href="./users/delete_user.php?id=<?= $row['id'] ?>">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>