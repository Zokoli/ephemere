<?php 

$page_title ='Éphemere';

ob_start();
include 'view/index.view.php';
$content = ob_get_clean();

echo $content;