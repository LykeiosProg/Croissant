<!-- cart.php -->
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
    <title>Panier - Ventes de Croissant</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('../partials/header.php'); ?>
    <div class="container">
        <h2>Panier</h2>
        <?php
        // Récupérer les produits du panier à partir de la base de données
        $sql = "SELECT * FROM cart";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Afficher les détails du produit
                echo "<div>";
                echo "<h4>" . $row["name"] . "</h4>";
                echo "<p>Prix : " . $row["price"] . " €</p>";
                // Ajouter d'autres détails du produit si nécessaire
                echo "</div>";
            }
        } else {
            echo "Le panier est vide.";
        }
        ?>
        <a href="./checkout.php" class="btn btn-primary">Passer la commande</a>
    </div>
    <?php include('../partials/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>