<?php $PAGE_TITLE = 'Les votes';
ob_start();
include 'view/votes.view.php';
$page_content = ob_get_clean();

/*include 'view/common/layout.php';
?>*/