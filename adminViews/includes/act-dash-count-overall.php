<?php
require("connection.php");

$other_total_sum = 0;
$sql = "SELECT SUM(other_total) AS sum FROM transac_other_total";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $other_total_sum = $row['sum'];
}

$total_sum = 0;
$sql = "SELECT SUM(total) AS sum FROM transac_reserv_records";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_sum = $row['sum'];
}

$balance_val_sum = 0;
$sql = "SELECT SUM(balance_val) AS sum FROM transaction_assoc";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $balance_val_sum = $row['sum'];
}

$count = $other_total_sum + $total_sum + $balance_val_sum;
echo '&#8369;' . $count;

$con->close();
?>