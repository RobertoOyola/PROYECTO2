<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Promocion</title>
</head>
<body>
    <h2>Eliminar Promocion</h2>
    <form action="/promociones/del" method="POST">
        @csrf
        @method('DELETE')
        <label for="id_promo">ID de la Promocion:</label><br>
        <input type="text" id="id_promo" name="id_promo" required><br><br>
        
        <button type="submit">Eliminar Promocion</button>
    </form>
</body>
</html>
