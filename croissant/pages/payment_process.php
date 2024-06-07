<!-- payment_process.php -->
<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire de paiement
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Traitement du paiement (simulé dans notre cas)
    // À compléter

    // Enregistrement de la commande dans la base de données
    // À compléter

    echo "Paiement effectué avec succès. Merci pour votre commande !";
}
?>