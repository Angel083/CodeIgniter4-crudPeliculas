<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peliculas</title>
</head>
<body>
  <h1>Listado de películas</h1>
  <a href="/dashboard/categoria"><-- Ir a categorías</a>
  <a href="/dashboard/pelicula/new">Crear</a>
  <table>
    <tr>
      <th>Titlo</th>
      <th>Descripción</th>
      <th>Opciones</th>
    </tr>
    <?php foreach ($peliculas as $key => $pelicula): ?>
      <tr>
        <td>
          <?= $pelicula['titulo'] ?>
        </td>
        <td> <?= $pelicula['descripcion'] ?> </td>
        <td>
          <a href="/dashboard/pelicula/show/<?= $pelicula['id'] ?>">Mostrar</a>
          <a href="/dashboard/pelicula/edit/<?= $pelicula['id'] ?>">Editar</a>
          <form action="/dashboard/pelicula/delete/<?= $pelicula['id'] ?>" method="post" style="display: inline-block">
            <button type="submit" style="border: none; background: none; cursor: pointer;">Eliminar</button>
          </form>
        </td>
      </tr>
      <?php endforeach ?> 
  </table>
</body>
</html>