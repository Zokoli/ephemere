<?php $PAGE_TITLE = 'Panier';
ob_start();
include 'view/panier.view.php';
$page_content = ob_get_clean();

/*include 'view/common/layout.php';
?>*/