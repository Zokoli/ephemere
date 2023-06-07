<?php

require_once "config.php";
require_once "model/databaseConnection.php";

$page_title ='Commandes passées';

$css = "commandes.css";

ob_start();
include 'view/commandes_passees.view.php';
$page_content = ob_get_clean();
include 'view/common/layout.php';

try{
       $bdd = getDatabaseConnection();
}catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$commande = $bdd->query('SELECT * FROM commande WHERE mail=$_POST[mail_client]');
while ($donnees = $commande->fetch())
{?>
<p>Commandes passées par l'utilisateur <?= $donnees["nom"]?> <?= $donnees["prenom"]?>, utilisant l'adresse mail : <?= $donnees['mail_client']; ?><br />

    A acheté le produit <?php echo $donnees['produit']; ?>, en <?= $donnees['quantite']; ?> exemplaires à l'adresse suivante : <?= $donnees['adresse']; ?>, <?= $donnees['ville']; ?></p>

<?php
}
$commande->closeCursor(); 
?>