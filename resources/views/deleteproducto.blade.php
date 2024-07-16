<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
</head>
<body>
    <h2>Eliminar Producto</h2>
    <form action="/productos/del" method="POST">
        @csrf
        @method('DELETE')
        <label for="id_producto">ID de Producto:</label><br>
        <input type="text" id="id_producto" name="id_producto" required><br><br>
        
        <button type="submit">Eliminar Producto</button>
    </form>
</body>
</html>
