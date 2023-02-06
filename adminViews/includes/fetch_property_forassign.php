<?php
require("connection.php");

$query = "SELECT lot_id FROM get_lot_ids";
$result = mysqli_query($con, $query);

$lots = array();
while ($row = mysqli_fetch_assoc($result)) {
  $lots[] = $row;
}

echo json_encode($lots);


?>