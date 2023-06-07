<?php 
$page_title = 'Dessous de verre';
ob_start();
include 'view/SVnoir.view.php';
$logo = 'SVnoirDetour.png';
$css = 'SVnoir.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>