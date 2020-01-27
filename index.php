<?php
$directory = './img';
$fileList = scandir($directory);
$fileList = array_diff($fileList, Array('.','..'));

echo '<pre>';
print_r($fileList);
?>