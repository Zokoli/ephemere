<?php 
$page_title ='Les votes';
ob_start();
include 'view/votes.view.php';
$css = 'votes.css';
$content = ob_get_clean();

include 'view/common/layout.php';
?>