<?php
// require_once('connection.php');

// // Get the ID from the query string
// $id = $_GET["id"];

// // Retrieve data for lot_information table
// $sql = "SELECT Lot_ID, Block, Lot, Street, Status, Area, Price, Remarks from lot_information where Lot_ID = '$id'";


// $result = $con->query($sql);
// $lot_info = $result->fetch_assoc();

// // Retrieve data for association_dues table
// $sql1 = "SELECT Lot_ID, Monthly_Dues, Yearly_Dues, Dues_Status, DueRemarks, date_assigned from association_dues where Lot_ID = '$id'";
// $sresult = $con->query($sql1);
// $dues_info = $sresult->fetch_assoc();

// // Retrieve data for association_dues table
// $sql2 = "SELECT assigned_lot.lot_id, assigned_lot.owner_username, assigned_lot.ownership, owner_accounts.owner_fname, owner_accounts.owner_lname FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username where assigned_lot.lot_id = '$id'";
// $ssresult = $con->query($sql2);
// $ownership_info = $ssresult->fetch_assoc();


// //check if the dues_info array has values
// if((!empty($dues_info))||(!empty($ownership_info))){
//     $data = array_merge($lot_info, $dues_info, $ownership_info);
//     echo json_encode($data);
// }
// // else if(!empty($ownership_info)){
// //     $data = array_merge($lot_info, $dues_info);
// //     echo json_encode($data);
// // }
// // else if(!empty($lot_info)){
// //     $data = array_merge($lot_info, $dues_info,);
// //     echo json_encode($data);
// // }
// else {
//     echo json_encode($lot_info);
// }

// $con->close();
?>

<?php
require_once('connection.php');

// Get the ID from the query string
$id = $_GET["id"];

// Retrieve data for lot_information table
$sql = "SELECT Lot_ID, Block, Lot, Street, Status, Area, Price, Remarks from lot_information where Lot_ID = '$id'";
$result = $con->query($sql);
$lot_info = $result->fetch_assoc();

// Retrieve data for association_dues table
$sql1 = "SELECT Lot_ID, Monthly_Dues, Yearly_Dues, Dues_Status, DueRemarks, date_assigned from association_dues where Lot_ID = '$id'";
$sresult = $con->query($sql1);
$dues_info = $sresult->fetch_assoc();

// Retrieve data for assigned_lot table
$sql2 = "SELECT assigned_lot.lot_id, assigned_lot.owner_username, assigned_lot.ownership, owner_accounts.owner_fname, owner_accounts.owner_lname FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username where assigned_lot.lot_id = '$id'";
$ssresult = $con->query($sql2);
$ownership_info = $ssresult->fetch_assoc();

$data = array();

if(!empty($lot_info)){
    $data = array_merge($data, $lot_info);
}

if(!empty($dues_info)){
    $data = array_merge($data, $dues_info);
}

if(!empty($ownership_info)){
    $data = array_merge($data, $ownership_info);
}

echo json_encode($data);

$con->close();
?>
<?php
// require_once('connection.php');

// // Get the ID from the query string
// $id = $_GET["id"];

// // Retrieve data for lot_information table
// $sql = "SELECT Lot_ID, Block, Lot, Street, Status, Area, Price, Remarks from lot_information where Lot_ID = '$id'";
// $result = $con->query($sql);
// $lot_info = $result->fetch_assoc();

// // Retrieve data for association_dues table
// $sql1 = "SELECT Lot_ID, Monthly_Dues, Yearly_Dues, Dues_Status, DueRemarks, date_assigned from association_dues where Lot_ID = '$id'";
// $sresult = $con->query($sql1);
// $dues_info = $sresult->fetch_assoc();

// // Retrieve data for assigned_lot table
// $sql2 = "SELECT assigned_lot.lot_id, assigned_lot.owner_username, assigned_lot.ownership, owner_accounts.owner_fname, owner_accounts.owner_lname FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username where assigned_lot.lot_id = '$id'";
// $ssresult = $con->query($sql2);
// $ownership_info = array();
// while ($row = $ssresult->fetch_assoc()) {
//     $ownership_info[] = $row;
// }

// $data = array();

// if(!empty($lot_info)){
//     $data = array_merge($data, $lot_info);
// }

// if(!empty($dues_info)){
//     $data = array_merge($data, $dues_info);
// }

// if(!empty($ownership_info)){
//     $data["ownership_info"] = $ownership_info;
// }

// echo json_encode($data);

// $con->close();
?>