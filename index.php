<?php
$directory = './img'; //folder na zdjęcia
$fileList = scandir($directory); //znajdz wszystko w folderze
$fileList = array_diff($fileList, Array('.','..'));// usuń . i .. (ten katalog i katalog wyżej)

//sprawdzamy co dostaliśmy - do usunięcia
echo '<pre>';
print_r($fileList);

?>