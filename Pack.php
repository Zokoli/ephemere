<?php 
$page_title ='Pack de bière';
ob_start();
include 'view/Pack.view.php';
$css = 'Pack.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>