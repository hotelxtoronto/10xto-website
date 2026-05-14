<?php
header('Content-Type: text/plain');
if (file_exists(__DIR__ . '/deployed_commit.txt')) {
    echo trim(file_get_contents(__DIR__ . '/deployed_commit.txt'));
} else {
    echo "unknown";
}
?>
