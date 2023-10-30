<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
  <h1>Listado de categorías</h1>
  <div>
     <a href="/pelicula"><-- Ir a peliculas</a>
  </div>
  <a href="/categoria/new">Crear</a>
  <table>
    <tr>
      <th>Id</th>
      <th>Titulo</th>
      <th>Opciones</th>
    </tr>
    <?php foreach ($categorias as $key => $categoria): ?>
      <tr>
        <td>
          <?= $categoria['id'] ?>
        </td>
        <td>
          <?= $categoria['titulo'] ?>
        </td>
        <td>
          <a href="/categoria/show/<?= $categoria['id'] ?>">Mostrar</a>
          <a href="/categoria/edit/<?= $categoria['id'] ?>">Editar</a>
          <form action="/categoria/delete/<?= $categoria['id'] ?>" method="post" style="display: inline-block">
            <button type="submit" style="border: none; background: none; cursor: pointer;">Eliminar</button>
          </form>
        </td>
      </tr>
      <?php endforeach ?> 
  </table>
</body>
</html>