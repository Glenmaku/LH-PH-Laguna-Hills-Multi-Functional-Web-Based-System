<?php
require_once("connection.php");
$sql = "SELECT SUM(balance_val) as sum FROM `transaction_assoc`";
$result = $con->query($sql);

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $count = $row['sum'];
    echo '&#8369;' . $count;
} else {
    echo '&#8369;0.00' ;
}

$con->close();
?>