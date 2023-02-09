<?php
require_once("connection.php");
if(mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST['transaction_num'])){

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


if (empty($transaction_name)) {
  //echo "Error: Transaction name is required.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100" role="alert">
  Error: Transaction name is required.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}
else if (empty($property)) {
 // echo "Error: the block and lot number is required.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100" role="alert">
  Error: the block and lot number is required.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
}
else if(empty($total_balance) || $total_balance == 0|| $total_balance == 0.00) {
 // echo "Error: This property does not have a balance";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100" role="alert">
  Error: This property does not have a balance
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}
else if(empty($selected_balance) || $selected_balance == 0) {
 // echo "Error: selected balance should have a value.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100" role="alert">
  Error: selected balance should have a value.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}else if (!$payment|| $payment == 0) {
 // echo "Please input a payment amount.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100" role="alert">
  Error: Please input a payment amount.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}
else{
$conv_discount = (($discount/100)* $selected_balance);
$conv_balance_val = $payment - $change;

//insert data into database
$sql = "INSERT INTO transaction_assoc (transaction_num,Lot_ID,assoc_selectedBal,assoc_payment,assoc_change,assoc_penalty,assoc_discount,assoc_remarks, balance_val) 
        VALUES ('$trans_num','$property','$selected_balance', '$payment','$change','$interest','$conv_discount', '$remarks','$conv_balance_val');
        INSERT INTO all_transaction (transaction_num,transaction_name,Category) 
        VALUES ('$trans_num','$transaction_name','Association Dues')";

if(mysqli_multi_query($con, $sql)){
    echo "Successfully recorded transaction";
                exit();

} else {
 //   echo "Error: " .$sql. "<br>" . mysqli_error($con);
 //echo "Transaction unsuccessful. Please try again.";
 echo'<div class="alert alert-danger alert-dismissible fade show  w-100" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
}
}
}else{
 // echo "Transaction unsuccessful. Please try again.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
}
mysqli_close($con);
?>
