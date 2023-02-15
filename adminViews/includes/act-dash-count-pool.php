<?php
require_once("connection.php");
$sql = "SELECT SUM(price) as sum FROM `transac_reserv_miming`";
$result = $con->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $count = $row['sum'];
    echo '&#8369; ' . number_format($count, 2, '.', ',');
} else {
    echo '&#8369; 0.00' ;
}

$con->close();
?>