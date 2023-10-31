<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Película</title>
</head>
<body>
  <form action="/dashboard/pelicula/update/<?= $pelicula['id']?>" method="post">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" placeholder="titulo" id="titulo"  value="<?= $pelicula['titulo']?>">
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" placeholder="descripcion" id="descripcion" cols="30" rows="10" >
      <?= $pelicula['descripcion']?>
    </textarea>
    <button type="submit">Guardar</button>
  </form>
</body>
</html>