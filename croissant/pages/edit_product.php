<!-- edit_product.php -->
<?php
include('../includes/db.php');

// Vérifier si l'ID du produit est spécifié dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les détails du produit depuis la base de données
    $sql = "SELECT * FROM products WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Le produit existe, afficher le formulaire de modification
        $row = $result->fetch_assoc();
    } else {
        // Le produit n'existe pas, rediriger vers la page d'administration des produits avec un message d'erreur
        header("Location: admin_products.php?error=1");
        exit();
    }
} else {
    // L'ID du produit n'est pas spécifié dans l'URL, rediriger vers la page d'administration des produits
    header("Location: admin_products.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez notre lot de croissant. Qualité, moelleux et gouteux à prix abordable.">
    <meta name="keywords" content="Croissant, Boulangerie, boutique en ligne, e-commerce">
    <meta name="author" content="LykeiosProg">
    <meta name="robots" content="index, follow">
    <title>Modification de Produit - Ventes de Croissant</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('../partials/header.php'); ?>
    <div class="container">
        <h2>Modification de Produit</h2>
        <form action="./edit_product_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="price">Prix :</label>
                <input type="text" class="form-control" id="price" name="price" value="<?php echo $row['price']; ?>" required>
            </div>
            <!-- Ajouter d'autres champs pour les détails du produit si nécessaire -->
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <?php include('../partials/footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>