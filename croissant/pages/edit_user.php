<!-- edit_user.php -->
<?php
include('../includes/db.php');

// Vérifier si l'ID de l'utilisateur est spécifié dans l'URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les détails de l'utilisateur depuis la base de données
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // L'utilisateur existe, afficher le formulaire de modification
        $row = $result->fetch_assoc();
    } else {
        // L'utilisateur n'existe pas, rediriger vers la page d'administration des utilisateurs avec un message d'erreur
        header("Location: admin_users.php?error=1");
        exit();
    }
} else {
    // L'ID de l'utilisateur n'est pas spécifié dans l'URL, rediriger vers la page d'administration des utilisateurs
    header("Location: admin_users.php");
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
    <title>Modification d'Utilisateur - Ventes de Croissant</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('../partials/header.php'); ?>
    <div class="container">
        <h2>Modification d'Utilisateur</h2>
        <form action="edit_user_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="role">Rôle :</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="admin" <?php if($row['role'] == 'admin') echo 'selected'; ?>>Administrateur</option>
                    <option value="user" <?php if($row['role'] == 'user') echo 'selected'; ?>>Utilisateur</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <?php include('../partials/footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>