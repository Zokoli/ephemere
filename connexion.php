<?php $PAGE_TITLE = 'Se connecter';
ob_start();
include 'view/connexion.view.php';
$page_content = ob_get_clean();

/*include 'view/common/layout.php';
?>*/