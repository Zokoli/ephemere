<?php 

$page_title ='Éphemere';

ob_start();
include 'view/refuse.view.php';
$content = ob_get_clean();

echo $content;