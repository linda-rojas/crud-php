<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <div>
        <h1>Crear Usuario</h1>
        <form action="" method="POST">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname">
            </div>
            <div>
                <label for="phone">Celular</label>
                <input type="text" name="phone">
            </div>
            <div>
                <label for="email">Correo</label>
                <input type="text" name="email">
            </div>
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
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th><a href="">Editar</a></th>
                    <th><a href="">Eliminar</a></th>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>