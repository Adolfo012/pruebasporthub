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
        <input type="text" name="apodo" value="{{ old('apodo') ?? $usuario->apodo }}"><br><br>
        <!-- Nombre -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" value="{{ old('nombre') ?? $usuario->nombre }}"><br><br>
        <!-- Apellidos -->
        <label for="apellidos">Apellidos:</label><br>
        <input type="text" name="apellidos" value="{{ old('apellidos') ?? $usuario->apellidos }}"><br><br>
        <!-- Edad -->
        <label for="edad">Edad:</label><br>
        <input type="text" name="edad" value="{{ old('edad') ?? $usuario->edad }}"><br><br>
        <!-- Genero (SELECT) -->
        <label for="genero">Genero:</label><br>
        <input type="text" name="genero" value="{{ old('genero') ?? $usuario->genero }}"><br><br>
        <!-- Correo -->
        <label for="email">Correo:</label><br>
        <input type="text" name="email" value="{{ old('email') ?? $usuario->email }}"><br><br>
        <!-- Cargar -->
        <input type="submit" value="EDITAR">

    </form>



</body>
</html>