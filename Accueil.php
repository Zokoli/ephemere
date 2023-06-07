<?php 
$page_title ='Éphemere';
$css = 'silider.css';
ob_start();
include 'view/Accueil.view.php';
$content = ob_get_clean();

include 'view/common/layout.php';
