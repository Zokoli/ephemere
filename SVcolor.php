<?php 
$page_title = 'Dessous de verre';
ob_start();
include 'view/SVcolor.view.php';
$logo = 'SVcolorDetour.png';
$css = 'SVcolor.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>