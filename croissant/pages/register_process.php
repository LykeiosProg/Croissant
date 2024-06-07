<!-- register_process.php -->
<?php
include('../includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si l'utilisateur existe déjà
    $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // L'utilisateur existe déjà
        echo "Un compte avec ce nom d'utilisateur ou cette adresse e-mail existe déjà. Veuillez choisir un autre nom d'utilisateur ou vous connecter.";
    } else {
        // Ajouter le nouvel utilisateur à la base de données
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Nouveau compte créé avec succès. Vous pouvez maintenant vous connecter.";
        } else {
            echo "Erreur lors de la création du compte : " . $conn->error;
        }
    }
}
?>