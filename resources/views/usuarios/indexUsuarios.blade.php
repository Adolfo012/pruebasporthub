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
            </li>
        @endforeach 
    </ul

</body>
</html>

