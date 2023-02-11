<?php
require_once("connection.php");
if(isset($_POST['transaction_num'])){

$trans_num = $_POST['transaction_num'];
$t_fname = $_POST['t_fname'];
$t_lname = $_POST['t_lname'];
$t_email = $_POST['t_email'];
//$transaction_name = $_POST['transaction_name'];
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

// if (empty($transaction_name)) {
if (empty($t_fname) || empty($t_lname)||empty($t_email)) {
  //echo "Error: Transaction name is required.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
  Error: Please enter the first name, last name, and email of recipient.
              <button type="button" class="btn-close close_alert_info" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}
else if (empty($property)) {
 // echo "Error: the block and lot number is required.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
  Error: the block and lot number is required.
              <button type="button" class="btn-close  close_alert_assoc" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
}
else if(empty($total_balance) || $total_balance == 0|| $total_balance == 0.00) {
 // echo "Error: This property does not have a balance";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
  Error: This property does not have a balance.
              <button type="button" class="btn-close close_alert_assoc" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}
else if(empty($selected_balance) || $selected_balance == 0) {
 // echo "Error: selected balance should have a value.";
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
  Error: selected balance should have a value.
              <button type="button" class="btn-close close_alert_assoc" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}else if (!$payment|| $payment == 0||$balance_total>$payment) {
 // echo "Please input a payment amount.";
  echo'<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
  Error: Please enter a valid payment.
              <button type="button" class="btn-close close_alert_assocpanel" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>';
                 exit();
}
else{
  $transaction_name = $t_fname." ".$t_lname;
  $dis = $selected_balance*($discount/100);
  echo '<div class="modal fade" id="assoc-submit-confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close_assoc_confirmed"></button>
      </div>
      <div class="modal-body ms-5 me-5">
      <h6 class="text-center"><i>Please verify the information below</i></h6><br>

        <div class="d-flex flex-row align-items-center row align-items-start border-bottom">
        <div class="col-8">
          <h6 class="d-flex mb-0">Transaction No:</h6>
          <i class="d-flex" >'.$trans_num.'</i>
        </div>
        <div class="col-4">
          <h6 class="d-flex mb-0 justify-content-end">Date:</h6>
          <i class="d-flex justify-content-end" >'.$trans_date.'</i>
        </div>
      </div><br>
      
      <div class="row align-items-start align-items-center border-bottom">
          <h6 class="col-5 mb-0">Recipient&apos;s Name:</h6>
          <i class=" col d-flex justify-content-end">'.$transaction_name.'</i>  </div>
          <div class="row align-items-start align-items-center border-bottom">
          <h6 class="col-4 mb-0">Recipient&apos;s Email:</h6>
          <i class=" col d-flex justify-content-end">'.$t_email.'</i>
        </div>
        <div class="row align-items-start align-items-center border-bottom">
          <h6 class="col-5 mb-0">Block and lot:</h6>
          <i class=" col d-flex justify-content-end">'.$property.'</i>
        </div><br>


      <div class="row align-items-start align-items-center border-bottom">
        <h6 class="col-5 mb-0">Total Balance:</h6>
        <i class=" col d-flex justify-content-end">'.$total_balance.'</i>
      </div>
      <div class="row align-items-start align-items-center border-bottom">
        <h6 class="col-5 mb-0">Interest/Penalty:</h6>
        <i class=" col d-flex justify-content-end">'.$interest.'</i>
      </div><br>
      <div class="row align-items-start align-items-center border-bottom">
        <h6 class="col-5 mb-0">Discount:</h6>
        <i class=" col d-flex justify-content-end">('.$discount.'%) '.$dis.'</i>
      </div>

      <div class="row align-items-start align-items-center border-bottom">
      <h6 class="col-5 mb-0">Payment:</h6>
      <i class=" col d-flex justify-content-end">'.$payment.'</i>
      </div>

      <div class="d-flex flex-row align-items-center border-bottom">
      <h6 class="col-5 mb-0">Change:</h6>
      <i class=" col d-flex justify-content-end">'.$change.'</i>
      </div><br>

      <div class="d-flex flex-row align-items-center border-bottom">
      <h6 class="col-5 mb-0">Remaining Balance:</h6>
      <i class=" col d-flex justify-content-end"><b>'.$remaining_balance.'</b></i>
      </div><br>
      <div class=" align-items-center ">
      <h6 class="d-flex mb-0 text-center">Remarks:</h6>
      <i class="d-flex text-center col-12"><i>'.$remarks.'</i></i></div>
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
  echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
}
mysqli_close($con);
?>