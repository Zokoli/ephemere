<?php
DEFINE('URL', 'http://ephemere.mmibut1.org/');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'cdce5547_ephemere');
DEFINE('DB_USER', 'cdce5547_sae');
DEFINE('DB_PASSWORD', 'MMI4ever@senart');
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>