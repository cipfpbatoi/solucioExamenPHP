<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="examen.css?v=<?php echo time(); ?>">
    <title>Gestió de Productes</title>
</head>
<body>
<div class="container">
<h1>Gestió de Productes</h1>

<!-- Taula de productes -->
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Preu</th>
        <th>Accions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr><td><?=$product->id?></td><td><?=$product->nom?></td><td><?=$product->preu?></td><td><a href="delete_product.php?id=<?=$product->id?>">Esborrar</a><a href="update_product.php?id=<?=$product->id?>">Modificar</a></td></tr>
    <?php endforeach; ?>    
    </tbody>
</table>

<!-- Enllaç per a crear un nou producte -->
<a href="create_product.php">Afegir un nou producte</a>
</div>
</body>
</html>
