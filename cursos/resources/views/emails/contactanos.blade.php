<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Titulo del mensaje</h3>
    <p>Mensaje de prueba para el email de contacto</p>

    <p><b>Nombre:</b> {{ $contacto['nombre'] }}</p>
    <p><b>Email:</b> {{ $contacto['email'] }}</p>
    <p><b>Mensaje:</b> {{ $contacto['mensaje'] }}</p>
</body>
</html>