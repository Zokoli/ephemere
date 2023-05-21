<?php $PAGE_TITLE = 'Nous';
ob_start();
include 'view/nous.view.php';
$page_content = ob_get_clean();

/*include 'view/common/layout.php';
?>*/