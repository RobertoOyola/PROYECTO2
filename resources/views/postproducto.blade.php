<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
</head>
<body>
    <h2>Insertar Producto</h2>
    <form action="/productos/ins" method="POST">
        @csrf
        <label for="codigo">Codigo:</label><br>
        <input type="text" id="codigo" name="codigo" required><br><br>
        
        <label for="descripcion">Descripcion:</label><br>
        <input type="text" id="descripcion" name="descripcion" required><br><br>

        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio" required><br><br>
        
        <button type="submit">Insertar Producto</button>
    </form>
</body>
</html>
