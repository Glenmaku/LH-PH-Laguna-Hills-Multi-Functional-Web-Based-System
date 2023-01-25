<?php
include('connection.php');

$Lot_ID = $_POST['Lot_ID'];
$date_assigned = $_POST['date_assigned'];

$sql = "UPDATE association_dues SET date_assigned = '$date_assigned' WHERE Lot_ID = '$Lot_ID'";

if (mysqli_query($con, $sql)) {
  echo 'success';
} else {
  echo 'Error: ' . $sql . '<br>' . mysqli_error($con);
}

mysqli_close($con);
?>
