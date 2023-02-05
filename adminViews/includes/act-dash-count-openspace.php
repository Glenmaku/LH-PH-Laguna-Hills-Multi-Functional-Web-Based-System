<?php
require_once("connection.php");
$sql = "SELECT COUNT(*) as num FROM `lot_information` WHERE `Status`='Open Space'";
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