<!-- edit_user_process.php -->
<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Mettre à jour les détails de l'utilisateur dans la base de données
    $sql = "UPDATE users SET name='$name', email='$email', role='$role' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Rediriger vers la page d'administration des utilisateurs avec un message de succès
        header("Location: admin_users.php?success=1");
        exit();
    } else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Erreur lors de la modification de l'utilisateur : " . $conn->error;
    }
}
?>