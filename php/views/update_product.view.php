<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="examen.css?v=<?php echo time(); ?>">
    <title>Editar Producte</title>
</head>
<body>
<div class="container">
<h1>Editar Producte</h1>

<form action="index.php" method="post">
    <input type="hidden" name="id" value="">
    <label for="nom">Nom del producte:</label>
    <input type="text" id="nom" name="nom" value="" required>
    <label for="preu">Preu:</label>
    <input type="number" id="preu" name="preu" value="" step="0.01" required>
    <button type="submit">Actualitzar Producte</button>
</form>

<a href="index.php">Tornar a la llista de productes</a>
</div>
</body>
</html>

