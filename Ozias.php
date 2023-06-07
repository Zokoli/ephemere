<?php 
$page_title ='Ozias';
ob_start();
include 'view/Ozias.view.php';
$logo = 'droitOzias.png';
$css = 'Ozias.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>