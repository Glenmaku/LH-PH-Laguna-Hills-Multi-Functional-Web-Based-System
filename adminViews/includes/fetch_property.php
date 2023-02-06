<?php
// require("connection.php");
  //  $query = "SELECT Lot_ID FROM association_dues";
  //  $result = mysqli_query($con, $query);
  //  $lot_ids = array();
  //  while($row = mysqli_fetch_assoc($result)) {
  //     $lot_ids[] = $row;
  //  }
  //  echo json_encode($lot_ids);
  //  mysqli_close($con);

// $name = $_POST['name'];
// $sql = "SELECT assigned_lot.lot_id FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username=owner_accounts.owner_username WHERE concat(owner_fname,' ',owner_lname)='$name'";
// $result = $con->query($sql);

// $lots = array();
// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     $lots[] = $row;
//   }
// }
// echo json_encode($lots);

// $con->close();
?>
<?php
require("connection.php");
 
$name = $_POST['name'];
$sql = "SELECT assigned_lot.lot_id FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username=owner_accounts.owner_username WHERE concat(owner_fname,' ',owner_lname)='$name'";
$result = $con->query($sql);

$lots = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $lots[] = $row;
  }
} else {
  $sql = "SELECT lot_id FROM get_lot_ids";
  $result = mysqli_query($con, $sql);
  if ($result->num_rows > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $lots[] = $row;
    }
  } else {
    $lots = array("error" => "No match found");
  }
}
echo json_encode($lots);

$con->close();
?>



