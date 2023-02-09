<?php
// require_once('connection.php');
// $query = "SELECT * FROM all_transaction ORDER BY transaction_num DESC LIMIT 1";
// $result = mysqli_query($con, $query);
// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_array($result);
//     $lastrow = $row['transaction_num'];
//     $newrow = sprintf("%04s", ($lastrow + 1));
//   //  $TransactionNo = $newrow;
// } else {
//     $newrow = sprintf("%04s",(1));
//   //  $TransactionNo = "00001";
// }
// $TransactionYear = date("Y");
// $TransactionNo = $TransactionYear."-".$newrow;
// echo $TransactionNo;
?>
<?php
require_once('connection.php');
$query = "SELECT * FROM all_transaction ORDER BY transaction_num DESC LIMIT 1";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $lastrow = $row['transaction_num'];
    $last4digits = substr($lastrow, -4);
    $newrow = sprintf("%04s", ($last4digits + 1));
  //  $TransactionNo = $newrow;
} else {
    $newrow = sprintf("%04s",(1));
  //  $TransactionNo = "00001";
}
$TransactionYear = date("Y");
$TransactionNo = $TransactionYear."-".$newrow;
echo $TransactionNo;
?>