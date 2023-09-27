<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        @foreach ($users as $usuarios)
            <li>
                <a href="{{ route('usuarios.show', $usuarios) }}">
                    
                    {{ $usuarios->apodo }}

                </a>

                <a>--  {{ $usuarios->nombre }}  --</a>
                <a>  {{ $usuarios->apellidos }}  --</a>
                <a>  {{ $usuarios->genero }}  --</a>
                <a>  {{ $usuarios->edad }}  --</a>
                <a>  {{ $usuarios->email }}  --</a>
                <a href="{{ route('usuarios.edit', $usuarios) }}">  EDITAR </a>

                |
                <form action="{{ route('usuarios.destroy', $usuarios) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>

            </li>
        @endforeach 
    </ul>
    <a href="{{route('usuarios.create', $usuarios) }}">Agregar</a>

</body>
</html>

