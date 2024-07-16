<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Promocion</title>
</head>
<body>
    <h2>Insertar Promocion</h2>
    <form action="/promociones/ins" method="POST">
        @csrf
        <label for="descripcion">Descripcion:</label><br>
        <input type="text" id="descripcion" name="descripcion" required><br><br>
        
        <label for="fecha_inicio">Fecha de Inicio:</label><br>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>

        <label for="fecha_fin">Fecha de Finalizacion:</label><br>
        <input type="date" id="fecha_fin" name="fecha_fin" required><br><br>
        
        <button type="submit">Insertar Promocion</button>
    </form>
</body>
</html>
