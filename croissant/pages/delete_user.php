<!-- delete_user.php -->
<?php
include('../includes/db.php');

// Vérifier si l'ID de l'utilisateur est spécifié dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Supprimer l'utilisateur de la base de données
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        // Rediriger vers la page d'administration des utilisateurs avec un message de succès
        header("Location: admin_users.php?success=1");
        exit();
    } else {
        // En cas d'erreur, afficher un message d'erreur
        echo "Erreur lors de la suppression de l'utilisateur : " . $conn->error;
    }
} else {
    // L'ID de l'utilisateur n'est pas spécifié dans l'URL, rediriger vers la page d'administration des utilisateurs
    header("Location: admin_users.php");
    exit();
}
?>