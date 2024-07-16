<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cliente</title>
</head>
<body>
    <h2>Actualizar Cliente</h2>
    <form action="/clientes/upd" method="POST">
        @csrf
        <label for="cedula">Cédula:</label><br>
        <input type="text" id="cedula" name="cedula" required><br><br>
        
        <label for="nombre">Nuevo Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <button type="submit">Actualizar Cliente</button>
    </form>
</body>
</html>
