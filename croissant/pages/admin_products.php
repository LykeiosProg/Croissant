<!-- admin_products.php -->
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
    <title>Administration des Produits - Ventes de Croissant</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('../partials/header.php'); ?>
    <div class="container">
        <h2>Administration des Produits</h2>
        <a href="add_product.php" class="btn btn-primary mb-3">Ajouter un Produit</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Récupérer les produits depuis la base de données
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["price"] . " €</td>";
                        echo "<td><a href='edit_product.php?id=" . $row["id"] . "' class='btn btn-sm btn-primary'>Modifier</a> <a href='delete_product.php?id=" . $row["id"] . "' class='btn btn-sm btn-danger'>Supprimer</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Aucun produit trouvé.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <!-- À compléter -->
    </div>
    <?php include('../partials/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>