<?php 
$page_title = 'Maloya';
ob_start();
include 'view/Maloya.view.php';
$logo = 'droitMaloya.png';
$css = 'Maloya.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>