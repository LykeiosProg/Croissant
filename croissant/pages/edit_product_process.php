<!-- edit_product_process.php -->
<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Mettre à jour les détails du produit dans la base de données
    $sql = "UPDATE products SET name='$name', price='$price' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Rediriger vers la page d'administration des produits avec un message de succès
        header("Location: admin_products.php?success=1");
        exit();
    } else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Erreur lors de la modification du produit : " . $conn->error;
    }
}
?>