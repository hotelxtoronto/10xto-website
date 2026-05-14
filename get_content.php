<?php
require_once('../../../wp-load.php');
$data = array(
    'privacy-policy' => get_page_by_path('privacy-policy')->post_content,
    'terms-conditions' => get_page_by_path('terms-conditions')->post_content,
    'accessibility' => get_page_by_path('accessibility')->post_content
);
echo json_encode($data);
?>