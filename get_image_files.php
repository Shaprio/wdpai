<?php
$imageDirectory = '../uploads/';
$files = array_diff(scandir($imageDirectory), array('..', '.'));

$imageFiles = [];

foreach ($files as $file) {
    $imageFiles[] = $imageDirectory . $file;
}

echo json_encode($imageFiles);
?>