<?php 
$page_title = 'Alès';
ob_start();
include 'view/Ales.view.php';
$logo = 'droitAles.png';
$css = 'Ales.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>