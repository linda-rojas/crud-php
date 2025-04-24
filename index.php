<?php
require_once './db/conection.php';
$conection = connection();

// query() Ejecuta una consulta SQL directamente.
$stmt = $conection->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex justify-center mt-[40px] items-center bg-gray-100">
        <form class="flex flex-col gap-4 justify-center p-4 rounded bg-blue-100 shadow-md w-full max-w-sm" action="./users/create_user.php" method="POST">
            <h1 class="text-center font-bold text-[20px] text-blue-800">Crear Usuario</h1>

            <div class="flex flex-col gap-1">
                <label for="name" class="text-sm text-gray-700">Nombre</label>
                <input type="text" name="name" required class="p-2 rounded border border-gray-300 text-sm">
            </div>

            <div class="flex flex-col gap-1">
                <label for="lastname" class="text-sm text-gray-700">Apellidos</label>
                <input type="text" name="lastname" required class="p-2 rounded border border-gray-300 text-sm">
            </div>

            <div class="flex flex-col gap-1">
                <label for="phone" class="text-sm text-gray-700">Celular</label>
                <input type="text" name="phone" oninput="this.value = this.value.replace(/\D/g, '')" maxlength="10" required class="p-2 rounded border border-gray-300 text-sm">
            </div>

            <div class="flex flex-col gap-1">
                <label for="email" class="text-sm text-gray-700">Correo</label>
                <input type="email" name="email" required class="p-2 rounded border border-gray-300 text-sm">
            </div>

            <button type="submit" class="p-2 rounded bg-green-500 text-white hover:bg-green-600 text-sm">Crear Usuario</button>
        </form>
    </div>

    <div class="max-w-6xl mx-auto mt-10 p-4">
        <h2 class="text-2xl font-bold text-center mb-4 text-gray-700">Usuarios Registrados</h2>
        <div class="overflow-x-auto bg-white rounded shadow-md">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Apellidos</th>
                        <th class="px-4 py-2">Celular</th>
                        <th class="px-4 py-2">Correo</th>
                        <th class="px-4 py-2 text-center"></th>
                        <th class="px-4 py-2 text-center"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr class="border-t">
                            <td class="px-4 py-2"><?= $row['id'] ?></td>
                            <td class="px-4 py-2"><?= $row['name'] ?></td>
                            <td class="px-4 py-2"><?= $row['lastname'] ?></td>
                            <td class="px-4 py-2"><?= $row['phone'] ?></td>
                            <td class="px-4 py-2"><?= $row['email'] ?></td>
                            <td class="px-4 py-2 text-blue-600 hover:bg-blue-500 hover:text-white cursor-pointer font-semibold text-center">
                                <a href="./users/edit_user.php?id=<?= $row['id'] ?>">Editar</a>
                            </td>
                            <td class="px-4 py-2 text-red-600 hover:bg-red-500 cursor-pointer hover:text-white font-semibold text-center">
                                <a href="./users/delete_user.php?id=<?= $row['id'] ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>