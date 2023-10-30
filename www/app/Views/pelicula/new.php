<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Película</title>
</head>
<body>
  <form action="/pelicula/create" method="post">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" placeholder="titulo" id="titulo">
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" placeholder="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    <button type="submit">Guardar</button>
  </form>
</body>
</html>