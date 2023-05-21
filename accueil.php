<?php $PAGE_TITLE = 'Accueil';
ob_start();
include 'view/accueil.view.php';
$page_content = ob_get_clean();

/*include 'view/common/layout.php';
?>*/