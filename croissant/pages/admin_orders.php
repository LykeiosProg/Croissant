<!-- admin_orders.php -->
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
    <title>Administration des Commandes - Ventes de Croissant</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('../partials/header.php'); ?>
    <div class="container">
        <h2>Administration des Commandes</h2>
        <!-- Tableau des commandes -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID Commande</th>
                    <th>Client</th>
                    <th>Date de Commande</th>
                    <th>Total</th>
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Récupérer les commandes depuis la base de données
                $sql = "SELECT * FROM orders";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["customer_name"] . "</td>";
                        echo "<td>" . $row["order_date"] . "</td>";
                        echo "<td>" . $row["total"] . " €</td>";
                        echo "<td>" . $row["status"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Aucune commande trouvée.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include('../partials/footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>