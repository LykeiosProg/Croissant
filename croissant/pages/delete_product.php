<!-- delete_product.php -->
<?php
include('../includes/db.php');

// Vérifier si l'ID du produit est spécifié dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Supprimer le produit de la base de données
    $sql = "DELETE FROM products WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Rediriger vers la page d'administration des produits avec un message de succès
        header("Location: admin_products.php?success=1");
        exit();
    } else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Erreur lors de la suppression du produit : " . $conn->error;
    }
} else {
    // L'ID du produit n'est pas spécifié dans l'URL, rediriger vers la page d'administration des produits
    header("Location: admin_products.php");
    exit();
}
?>