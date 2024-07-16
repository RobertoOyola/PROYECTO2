<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producto</title>
</head>
<body>
    <h2>Actualizar Producto</h2>
    <form action="/productos/upd" method="POST">
        @csrf
        <label for="id_producto">ID Producto:</label><br>
        <input type="text" id="id_producto" name="id_producto" required><br><br>
        
        <label for="descripcion">Descripcion:</label><br>
        <input type="text" id="descripcion" name="descripcion" required><br><br>
        
        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio" required><br><br>
        
        <button type="submit">Actualizar Producto</button>
    </form>
</body>
</html>
