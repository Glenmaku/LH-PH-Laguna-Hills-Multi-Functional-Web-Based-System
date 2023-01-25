<?php
include 'connection.php';

$query = "SELECT Status FROM lot_information WHERE Lot_ID = '$id'";
    $result = mysqli_query($con, $query);

foreach($svg_path_data as $path){
    echo '<path id="path_'.$path['id'].'" d="'.$path['d'].'" onclick="changeColor(path_'.$path['id'].')">';
}
?>