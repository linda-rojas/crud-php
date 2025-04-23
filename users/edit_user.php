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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded shadow-md">
        <form action="./update_user.php" method="POST" class="space-y-4">
            <h1 class="text-2xl font-bold text-center mb-6 text-gray-800">Editar Usuario</h1>

            <input type="hidden" name="id" value="<?= $row['id'] ?>" required>

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" value="<?= $row['name'] ?>" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="lastname" class="block text-sm font-medium text-gray-700">Apellidos</label>
                <input type="text" name="lastname" value="<?= $row['lastname'] ?>" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Celular</label>
                <input type="number" name="phone" value="<?= $row['phone'] ?>" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo</label>
                <input type="email" name="email" value="<?= $row['email'] ?>" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition duration-200">Actualizar Usuario</button>
        </form>
    </div>

</body>

</html>