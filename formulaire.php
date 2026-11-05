<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajouter un produit</title>
</head>
<body>

    <div class="formulaire">
        <h2>Ajouter un produit</h2>
        <p class="description">Remplissez les informations du produit.</p>
        <form action="traitement.php" method="POST">

            <label for="nom">Nom du produit</label>
            <input type="text" name="nom" id="nom"
                   placeholder="Veuillez entre le nom du produit" required>

            <label for="prix">Prix du produit (FCFA)</label>
            <input type="number" name="prix" id="prix"
                   placeholder="Veuillez entre la prix" required>

            <button type="submit" name="ajouter">Ajouter le produit</button>

        </form>
    </div>

</body>
</html>