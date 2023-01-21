<?php

if (isset($_GET['image'])) {
    $image = $_GET['image'];
    $path = 'adminViews/includes/uploads/' . $image;
    if (file_exists($path) && is_readable($path)) {
        $info = getimagesize($path);
        if ($info) {
            header("Content-type: {$info['mime']}");
            readfile($path);
            exit;
        } else {
            echo 'Invalid image file';
            exit;
        }
    } else {
        echo 'File not found';
        exit;
    }
}

?>
