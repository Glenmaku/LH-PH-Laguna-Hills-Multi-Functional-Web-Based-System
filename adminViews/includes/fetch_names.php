<?php
// require("connection.php");

//   $sql = "SELECT owner_fname, owner_lname FROM owner_accounts";
//   $result = $con->query($sql);

//   $names = array();
//   if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       array_push($names, $row);
//     }
//   }
//   echo json_encode($names);

//   $con->close();
?>
<?php
require("connection.php");

  $sql = "SELECT owner_fname FROM owner_accounts";
  $result = $con->query($sql);

  $names = array();
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($names, $row);
    }
  }
  echo json_encode($names);

  $con->close();
?>