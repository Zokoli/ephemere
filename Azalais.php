<?php 
$page_title = 'Azalaïs';
ob_start();
include 'view/Azalais.view.php';
$logo = 'droitAzalais.png';
$css = 'Azalais.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>