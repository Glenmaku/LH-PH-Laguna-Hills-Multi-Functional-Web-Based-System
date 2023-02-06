<?php
require_once("connection.php");
$sql = "SELECT SUM(total) as sum FROM `transac_reserv_records`";
$result = $con->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $count = $row['sum'];
    echo '&#8369;' . $count . '.00';
} else {
    echo '&#8369;0.00' ;
}

$con->close();
?>