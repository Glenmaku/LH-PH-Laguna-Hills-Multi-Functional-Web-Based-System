<?php
// require("connection.php");
 
// $name = $_POST['name'];
// $sql = "SELECT assigned_lot.lot_id FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username=owner_accounts.owner_username WHERE concat(owner_fname,' ',owner_lname)='$name'";
// $result = $con->query($sql);

// $lots = array();
// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     $lots[] = $row;
//   }
// } else {
//   $sql = "SELECT lot_id FROM get_lot_ids";
//   $result = mysqli_query($con, $sql);
//   if ($result->num_rows > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
//       $lots[] = $row;
//     }
//   } else {
//     $lots = array("error" => "No match found");
//   }
// }
// echo json_encode($lots);

// $con->close();
?>
<?php
  // require("connection.php");

  // if(isset($_POST['first_name']) && isset($_POST['last_name'])) {
  //   $firstName = $_POST['first_name'];
  //   $lastName = $_POST['last_name'];

  //   $sql = "SELECT assigned_lot.lot_id FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username=owner_accounts.owner_username WHERE owner_fname='$firstName' AND owner_lname='$lastName'";
  //   $result = $con->query($sql);

  //   $lotIds = array();
  //   if ($result->num_rows > 0) {
  //     while($row = $result->fetch_assoc()) {
  //       array_push($lotIds, $row['lot_id']);
  //     }
  //   }

  //   echo json_encode($lotIds);

  //   $con->close();
  // }
?>
<?php
  require("connection.php");

  if(isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $sql = "SELECT assigned_lot.lot_id FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username=owner_accounts.owner_username WHERE owner_fname='$firstName' AND owner_lname='$lastName'";
    $result = $con->query($sql);

    $lotIds = array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($lotIds, $row['lot_id']);
      }
    } else {
      $sql = "SELECT lot_id FROM get_lot_ids";
      $result = $con->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          array_push($lotIds, $row['lot_id']);
        }
      }
    }

    echo json_encode($lotIds);

    $con->close();
  }
?>


