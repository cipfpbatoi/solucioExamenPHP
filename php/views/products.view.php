<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="examen.css?v=<?php echo time(); ?>">
    <title>Gestió de Productes</title>
</head>
<body>
<?php include_once ($_SERVER['DOCUMENT_ROOT'].'/../views/partials/menu.php') ?>
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
    <!-- TODO:  PHP per llistar els productes -->
    </tbody>
</table>

<!-- Enllaç per a crear un nou producte -->
<a href="create_product.php">Afegir un nou producte</a>
</div>
</body>
</html>
