<?php
require_once('connection.php');

// Get the ID from the query string
$id = $_GET["id"];

// Retrieve the data from the database
$sql = "select Monthly_Dues, Yearly_Dues, Dues_Status, DueRemarks, date_assigned from association_dues where Lot_ID = '$id'";
$result = $con->query($sql);
$row = $result->fetch_assoc();

// Return the data as a JSON object
echo json_encode($row);

$con->close();
?>
