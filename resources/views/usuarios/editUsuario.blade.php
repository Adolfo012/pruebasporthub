<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Investigar línea -->
    <title>Registro</title>

</head>

<body>
    <h1>Registro</h1>
    <form action="{{ route('usuarios.update', $usuario) }}" method="post">
        @csrf
        @method('PATCH')

        <!-- Apodo -->
        <label for="apodo">Apodo:</label><br>
        <input type="text" name="apodo"><br><br>
        <!-- Nombre -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre"><br><br>
        <!-- Apellidos -->
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos"><br><br>
        <!-- Edad -->
        <label for="edad">Edad:</label><br>
        <input type="text" name="edad"><br><br>
        <!-- Genero (SELECT) -->
        <label for="genero">Genero:</label><br>
        <input type="text" name="genero"><br><br>
        <!-- Correo -->
        <label for="email">Correo:</label><br>
        <input type="text" name="email"><br><br>
        <!-- Cargar -->
        <input type="submit" value="Registrar">

    </form>



</body>
</html>