<?php include('../includes/db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez notre lot de croissant. Qualité, moelleux et gouteux à prix abordable.">
    <meta name="keywords" content="Croissant, Boulangerie, boutique en ligne, e-commerce">
    <meta name="author" content="LykeiosProg">
    <meta name="robots" content="index, follow">
    <title>Accueil - Ventes de  Croissant</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include('../partials/header.php');?>
    <divontainer>
        <h1>Bienvenue sur notre site de ventes de Croissant !</h1>
        <div class="row">
            <?php $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<img src="../images/'.$row["image"].'" class="card-img-top" alt="'.$row["name"].'">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'.$row["name"].'</h5>';
                    echo '<p class="card-text">'.substr($row["description"], 0, 100).'...</p>';
                    echo '<p class="card-text">'.$row["price"].' €</p>';
                    echo '<a href="product.php?id='.$row["id"].'" class="btn btn-primary">Voir le produit</a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "0 résultats";
            }
            $conn->close();
            ?>
        </div>
    </div>
        </div>
    </div>
    <?php include('../partials/footer.php')?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>