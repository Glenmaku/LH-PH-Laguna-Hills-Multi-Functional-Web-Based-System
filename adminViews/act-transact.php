<?php
require_once('includes/connection.php');

$query = "SELECT * FROM all_transaction ORDER BY transaction_num DESC LIMIT 1";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $lastrow = $row['transaction_num'];
    $newrow = sprintf("%05s", ($lastrow + 1));
    $TransactionNo = $newrow;
} else {
    $TransactionNo = "00001";
}
echo $TransactionNo;
?>