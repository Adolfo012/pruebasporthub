<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalle de Usuario</h1>

    <h2>Apodo de usuario: {{ $usuario->apodo }} </h2>
    <h2>Nombre(s) de usuario: {{ $usuario->nombre }} </h2>
    <h2>Apellidos de usuario: {{ $usuario->apellidos }} </h2>
    <h2>Genero de usuario: {{ $usuario->genero }} </h2>
    <h2>edad de usuario: {{ $usuario->edad }} </h2>
    <h2>email de usuario: {{ $usuario->email }} </h2>

</body>
</html>