<?php

require_once "config.php";
require_once "app/model/databaseConnection.php";
require_once "app/model/formulaire.model.php";

$_SESSION ['success'] = true;

$databaseConnection = getDatabaseConnection();
try {
    $commande = [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'mail' => $_POST['mail'],
        'adresse' => $_POST['adresse'],
        'ville' => $_POST['ville'],
        'produit' => $_POST['produit'],
        'quantite' => $_POST['quantite']
    ];

    insertNewCommande($commande, $databaseConnection);
} catch (PDOException $e) {
    $msg ="Il y a eu une erreur lors du renseignement des informations";
    $e ->getMessage();
}

header("newCommande.php");
exit();
?>