<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar categoria: <?= $categoria['titulo']?></title>
</head>
<body>
    <form action="/categoria/update/<?= $categoria['id']?>" method="post">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" placeholder="titulo" id="titulo" value="<?= $categoria['titulo']?>">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>