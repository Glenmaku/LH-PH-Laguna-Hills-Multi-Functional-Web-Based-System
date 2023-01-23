<?php
require_once('connection.php');

// Get the ID from the query string
$id = $_GET["id"];

// Retrieve the data from the database
$sql = "SELECT Block, Lot, Street, Status, Area, Price, Remarks from lot_information where Lot_ID = '$id'";
$result = $con->query($sql);
$row = $result->fetch_assoc();

// Return the data as a JSON object
echo json_encode($row);

$con->close();
?>





