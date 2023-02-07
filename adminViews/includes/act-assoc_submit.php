<?php
require_once("connection.php");
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$trans_num = $_POST['transaction_num'];
$transaction_name = $_POST['transaction_name'];
$property = $_POST['property'];
$total_balance = $_POST['total_balance'];
$selected_balance = $_POST['selected_balance'];
$discount = $_POST['discount'];
$interest = $_POST['interest'];
$balance_total = $_POST['balance_total'];
$payment = $_POST['payment'];
$change = $_POST['change'];
$ifadvanced = $_POST['ifadvanced'];
$remaining_balance = $_POST['remaining_balance'];
$remarks = $_POST['remarks'];


$conv_discount = (($discount/100)* $selected_balance);
$conv_balance_val = $payment - $change;

//insert data into database
$sql = "INSERT INTO transaction_assoc (transaction_num,Lot_ID,assoc_selectedBal,assoc_payment,assoc_change,assoc_penalty,assoc_discount,assoc_remarks, balance_val) 
        VALUES ('$trans_num','$property','$selected_balance', '$payment','$change','$interest','$conv_discount', '$remarks','$conv_balance_val');
        INSERT INTO all_transaction (transaction_num,transaction_name,Category) 
        VALUES ('$trans_num','$transaction_name','Association Dues')";

if(mysqli_multi_query($con, $sql)){
    echo "Successfully recorded transaction ".$trans_num;
} else {
 //   echo "Error: " .$sql. "<br>" . mysqli_error($con);
 echo "Transaction unsuccessful. Please try again.";
}
mysqli_close($con);
?>

<?php
// require_once("connection.php");
// if(mysqli_connect_errno()){
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
// $trans_num = $_POST['transaction_num'];
// $transaction_name = $_POST['transaction_name'];
// $property = $_POST['property'];
// $total_balance = $_POST['total_balance'];
// $selected_balance = $_POST['selected_balance'];
// $discount = $_POST['discount'];
// $interest = $_POST['interest'];
// $balance_total = $_POST['balance_total'];
// $payment = $_POST['payment'];
// $change = $_POST['change'];
// $ifadvanced = $_POST['ifadvanced'];
// $remaining_balance = $_POST['remaining_balance'];
// $remarks = $_POST['remarks'];


// $conv_discount = (($discount/100)* $selected_balance);
// $conv_balance_val = $payment - $change;

// //insert data into database
// $sql = "INSERT INTO  transaction_assoc (transaction_num,Lot_ID,assoc_selectedBal,assoc_payment,assoc_change,assoc_penalty,assoc_discount,assoc_remarks, balance_val) VALUES ('$trans_num','$property','$selected_balance', '$payment','$change','$interest','$conv_discount', '$remarks','$conv_balance_val')";

// if(mysqli_query($con, $sql)){
//     echo "Data inserted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($con);
// }

// $sql2 = "INSERT INTO all_transaction (transaction_num,transaction_name,Category) VALUES ('$trans_num','$transaction_name','Association Dues')";

// if(mysqli_query($con, $sql2)){
//     echo "Data inserted successfully to all_transaction";
// } else {
//     echo "Error: " . $sql2 . "<br>" . mysqli_error($con);
// }
// mysqli_close($con);
?>