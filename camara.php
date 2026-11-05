<?php
session_start();

if (!isset($_SESSION['produits'])) {
    $_SESSION['produits'] = [
        ["nom" => "Clavier", "prix" => 5000],
        ["nom" => "Souris", "prix" => 3000],
        ["nom" => "Casque", "prix" => 8000],
    ];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gestion des produits</title>
</head>
<body>

<div class="parent">
    <h3 class="head">Gestion des produits d'une boutique</h3>
    <a href="ajouter.php" class="bnt">Ajoute</a>
</div>
<h1>zertgyhj</h1>
<table class="tableau">
    <tr>
        <th>NOM</th>
        <th>PRIX</th>
    </tr>

    <?php foreach ($_SESSION['produits'] as $produit) : ?>
        <tr>
            <td><?= htmlspecialchars($produit["nom"]) ?></td>
            <td><?= $produit["prix"] ?> FCFA</td>
        </tr>
    <?php endforeach; ?>

</table>
</body>
</html>