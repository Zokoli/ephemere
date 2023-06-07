<?php 
$page_title = 'Nous';
ob_start();
include 'view/Nous.view.php';
$css = 'Nous.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>