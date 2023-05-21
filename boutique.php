<?php $PAGE_TITLE = 'Boutique';
ob_start();
include 'view/boutique.view.php';
$page_content = ob_get_clean();

/*include 'view/common/layout.php';
?>*/