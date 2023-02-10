<?php
require_once("connection.php");
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
$admin_confirmed = $_POST['admin_confirmed'];
$trans_date = $_POST['trans_date'];

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
  echo '<div class="modal fade" id="assoc-submit-confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close_assoc_confirmed"></button>
      </div>
      <div class="modal-body">
      <h6>Please verify the information below</h6>
      <h6>Transaction No:</h6><span>'.$trans_num.'</span>
      <h6>Date:</h6><span>'.$trans_date.'</span><br>
      <h6>Name:</h6><span>'.$transaction_name.'</span>
      <h6>Block and lot:</h6><span>'.$property.'</span>
      <h6>Total Balance:</h6><span>'.$total_balance.'</span>
      <h6>Interest/Penalty:</h6><span>'.$interest.'</span>
      <h6>Discount:</h6><span>'.$discount.'."%".</span>
      <h6>Payment:</h6><span>'.$payment.'</span>
      <h6>Change:</h6><span>'.$change.'</span>
      <h6>Remaining Balance:</h6><span>'.$remaining_balance.'</span>
      <h6>Remarks:</h6><span>'.$remarks.'</span>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
        <button type="button" class="btn btn-primary" id="assoc-submit-confirmed">Confirm</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $("#assoc-submit-confirmation").modal("show");});
</script>';
exit();
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