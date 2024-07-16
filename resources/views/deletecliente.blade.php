<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cliente</title>
</head>
<body>
    <h2>Eliminar Cliente</h2>
    <form action="/clientes/del" method="POST">
        @csrf
        @method('DELETE')
        <label for="cedula">Cédula:</label><br>
        <input type="text" id="cedula" name="cedula" required><br><br>
        
        <button type="submit">Eliminar Cliente</button>
    </form>
</body>
</html>
