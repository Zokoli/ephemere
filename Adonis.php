<?php 
$page_title = 'Adonis';
ob_start();
include 'view/Adonis.view.php';
$logo = 'droitAdonis.png';
$css = 'Adonis.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>