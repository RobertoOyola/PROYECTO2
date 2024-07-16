<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Promocion</title>
</head>
<body>
    <h2>Actualizar Promocion</h2>
    <form action="/promociones/upd" method="POST">
        @csrf
        <label for="id_promocion">ID Promocion:</label><br>
        <input type="text" id="id_promocion" name="id_promocion" required><br><br>
        
        <label for="descripcion">Descripcion:</label><br>
        <input type="text" id="descripcion" name="descripcion" required><br><br>
        
        <label for="fecha_inicio">Fecha Inicio:</label><br>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>
        
        <label for="fecha_fin">Fecha Finalizacion:</label><br>
        <input type="date" id="fecha_fin" name="fecha_fin" required><br><br>

        <button type="submit">Actualizar Promocion</button>
    </form>
</body>
</html>
