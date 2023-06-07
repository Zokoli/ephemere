<?php
require_once 'model/databaseConnection.php';
$bdd=getDatabaseConnection();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $produit = $_POST['produit'];
    $quantite = $_POST['quantite'];
    $bdd->exec("INSERT INTO commande(nom, prenom, mail, adresse, ville, produit, quantite) VALUES ('$nom','$prenom','$mail', '$adresse', '$ville', '$produit', '$quantite')") ;
    echo "<p class ='remarque' >Votre commande a bien été validée. Pour visualiser toutes vos commandes passées, rendez vous sur la page d'utilisateur et renseignez votre mail.</p>"; 

?>