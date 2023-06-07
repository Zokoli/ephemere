<?php 
$page_title ='Eyriès';
ob_start();
include 'view/Eyries.view.php';
$logo = 'droitEyries.png';
$css = 'Eyries.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>