<?php
require_once("connection.php");
$sql = "SELECT COUNT(*) as num FROM association_dues WHERE Dues_Status='updated'";
$result = $con->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $count = $row['num'];
    echo $count;
} else {
    echo "0";
}

$con->close();
?>