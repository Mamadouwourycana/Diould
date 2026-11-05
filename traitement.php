<?php
session_start();

if (isset($_POST["ajouter"])) {

    $nom = $_POST["nom"];
    $prix = $_POST["prix"];

    $_SESSION['produits'][] = [
        "nom" => $nom,
        "prix" => $prix
    ];

    header("Location:camara.php");
    exit;
}
?>