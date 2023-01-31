<?php

include ('connection.php');

// Get the ID from the query string
$id = $_GET["id"];

// Retrieve data for lot_information table
$sql = "SELECT Lot_ID, Block, Lot, Street, Status, Area from lot_information where Lot_ID = '$id'";
$result = $con->query($sql);
$lot_info = $result->fetch_assoc();

$data = array();

if(!empty($lot_info)){
    $data = array_merge($data, $lot_info);
}

echo json_encode($data);

$con->close();
?>
