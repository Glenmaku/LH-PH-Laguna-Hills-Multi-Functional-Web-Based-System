<?php
require_once('connection.php');
if(isset($_POST["lot_id"])){
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
   $lot_id = $_POST["lot_id"];
   $query = "SELECT Balance FROM association_dues WHERE Lot_ID = '$lot_id'";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_assoc($result);
   echo $row['Balance'];
   mysqli_close($con);
}
?>