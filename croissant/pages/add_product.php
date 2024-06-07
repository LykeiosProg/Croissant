<!-- add_product.php -->
<?php include('../includes/db.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez notre lot de croissant. Qualité, moelleux et gouteux à prix abordable.">
    <meta name="keywords" content="Croissant, Boulangerie, boutique en ligne, e-commerce">
    <meta name="author" content="LykeiosProg">
    <meta name="robots" content="index, follow">
    <title>Ajouter un Produit - Ventes de Croissant</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('../partials/header.php'); ?>
    <div class="container">
        <h2>Ajouter un Produit</h2>
        <form action="./add_product_process.php" method="post">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Prix :</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <!-- Ajouter d'autres champs pour les détails du produit si nécessaire -->
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    <?php include('../partials/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>