<?php 
$page_title = 'Boutique';
ob_start();
include 'view/boutique.view.php';
$css = 'boutique.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>