<?php
require("connection.php");

if(isset($_POST['transaction_num'])){

$trans_num = $_POST['transaction_num'];

$t_fname = $_POST['t_fname'];
$t_lname = $_POST['t_lname'];
$t_email = $_POST['t_email'];
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
$admin_confirmed = $_POST['admin_confirmed'];

$conv_discount = (($discount/100)* $selected_balance);
$conv_balance_val = $payment - $change;

$transaction_name = $t_fname." ".$t_lname;
//insert data into database
$sql = "INSERT INTO transaction_assoc (transaction_num,Lot_ID,assoc_totalbal,assoc_selectedBal,assoc_payment,assoc_change,assoc_remaining_bal,assoc_penalty,assoc_discount,assoc_remarks, balance_val) 
        VALUES ('$trans_num','$property','$total_balance','$selected_balance', '$payment','$change','$remaining_balance','$interest','$conv_discount', '$remarks','$conv_balance_val');
        INSERT INTO all_transaction (transaction_num,transaction_name,Category,transaction_email,confirmed_by) 
        VALUES ('$trans_num','$transaction_name','Association Dues','$t_email','$admin_confirmed')";

if(mysqli_multi_query($con, $sql)){
    echo'<div class="alert alert-success alert-dismissible fade show  w-100 text-center" role="alert">
Successfully recorded transaction.
             <button type="button" class="btn-close close_alert_assoc" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();  

} else {
 echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close close_alert_assoc" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
}
}