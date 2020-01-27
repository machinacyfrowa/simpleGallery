<?php
$directory = './img'; //folder na zdjęcia
$fileList = scandir($directory); //znajdz wszystko w folderze
$fileList = array_diff($fileList, Array('.','..'));// usuń . i .. (ten katalog i katalog wyżej)

//sprawdzamy co dostaliśmy - do usunięcia
echo '<pre>';
print_r($fileList);

foreach ($fileList as $key => $value) {
    $image = '<img style="width: 25%; float:left" src="img/';
    $image .= $value;
    $image .= '">';

    echo $image;
}


?>

