<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Cliente</title>
</head>
<body>
    <h2>Insertar Cliente</h2>
    <form action="/clientes/ins" method="POST">
        @csrf
        <label for="cedula">Cédula:</label><br>
        <input type="text" id="cedula" name="cedula" required><br><br>
        
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <button type="submit">Insertar Cliente</button>
    </form>
</body>
</html>
