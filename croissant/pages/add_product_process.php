<!-- add_product_process.php -->
<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $price = $_POST['price'];

    // Ajouter le produit à la base de données
    $sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";

    if ($conn->query($sql) === TRUE) {
        // Rediriger vers la page d'administration des produits avec un message de succès
        header("Location: admin_products.php?success=1");
        exit();
    } else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Erreur lors de l'ajout du produit : " . $conn->error;
    }
}
?>