
<?php 
session_start();
require_once "config.php";
empty($validation);
if (empty($_SESSION['success']) || !$_SESSION['success']) {
    $formulaire = "view/newCommande.view.php";
    unset($_SESSION['success']);
}else{

    $formulaire = "view/newCommande.view.php";
    $validation = 1;
    unset($_SESSION['success']);
}

$page_title ='Nouvelle commande';

$css = "formulaire.css";

ob_start();
include 'view/newCommande.view.php';
$page_content = ob_get_clean();
include 'view/common/layout.php';
?>