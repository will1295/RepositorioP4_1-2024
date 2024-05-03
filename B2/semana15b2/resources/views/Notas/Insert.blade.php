<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="Materia" id="Materia" required>
        <input type="number" name="Nota" id="Nota" required step="0.01" min="0">
        <textarea name="Comentario" id="Comentario" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar nota">
    </form>
</body>
</html>