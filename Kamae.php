<?php 
$page_title = 'Kamae';
ob_start();
include 'view/Kamae.view.php';
$logo = 'droitKamae.png';
$css = 'Kamae.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>