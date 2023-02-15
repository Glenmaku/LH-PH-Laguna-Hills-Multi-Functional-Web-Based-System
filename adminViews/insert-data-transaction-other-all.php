<?php
include "includes/connection.php";
if(isset($_POST['trans_no_all_send'])){
$trans_no_all_send = $_POST['trans_no_all_send'];
$t_fname = $_POST['t_fname'];
$t_lname = $_POST['t_lname'];
$t_email = $_POST['t_email'];
$admin_confirmed = $_POST['admin_confirmed'];
$trans_date = $_POST['trans_date'];

$o_category = $_POST['o_category'];
$o_category1 = $_POST['o_category1'];
$o_category2 = $_POST['o_category2'];
$o_category3 = $_POST['o_category3'];
$o_category4 = $_POST['o_category4'];

$o_quantity = $_POST['o_quantity'];
$o_quantity1 = $_POST['o_quantity1'];
$o_quantity2 = $_POST['o_quantity2'];
$o_quantity3 = $_POST['o_quantity3'];
$o_quantity4 = $_POST['o_quantity4'];

$o_price = $_POST['o_price'];
$o_price1 = $_POST['o_price1'];
$o_price2 = $_POST['o_price2'];
$o_price3 = $_POST['o_price3'];
$o_price4 = $_POST['o_price4'];

$o_subtotal = $_POST['o_subtotal'];
$o_subtotal1 = $_POST['o_subtotal1'];
$o_subtotal2 = $_POST['o_subtotal2'];
$o_subtotal3 = $_POST['o_subtotal3'];
$o_subtotal4 = $_POST['o_subtotal4'];

$total_all_send  = $_POST['total_all_send'];
$other_payment_all_send = $_POST['other_payment_all_send'];
$other_change_all_send = $_POST['other_change_all_send'];
$other_remaining_balance_all_send = $_POST['other_remaining_balance_all_send'];
$other_remarks_all_send = $_POST['other_remarks_all_send'];

    // if(isset($_POST['trans_no_all_send']) && isset($_POST['name_all_send']) && isset($_POST['total_all_send']) && isset($_POST['other_payment_all_send'])){
if (empty($t_fname) || empty($t_lname)||empty($t_email)) {
//echo "Error: Transaction name is required.";
    echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: Please enter the first name, last name, and email of recipient.
        <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        exit();
} 
else if(empty($o_category)&& empty($o_category1)&& empty($o_category2)&& empty($o_category3)&& empty($o_category4)&& empty($o_quantity)&& empty($o_quantity1)&& empty($o_quantity2)&& empty($o_quantity3)&& empty($o_quantity4)&& empty($o_quantity4) && empty($o_price) && empty($o_price1) && empty($o_price2) && empty($o_price3) && empty($o_price4) && empty($o_subtotal) && empty($o_subtotal1) && empty($o_subtotal2) && empty($o_subtotal3) && empty($o_subtotal4)){
    echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
    Error: Please enter atleast one transaction.
    <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    exit(); 
}
else if (!$other_payment_all_send || $other_payment_all_send == 0) {
       // echo "Please input a valid payment amount.";
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: Please input a valid payment amount.
        <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        exit();
} else if ($total_all_send > $other_payment_all_send) {
       // echo "Please input a valid payment amount.";
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: Payment cannot be lower than the total.
        <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        exit();
} else{
    $name_all_send = $t_fname." ".$t_lname;
    echo '<div class="modal fade" id="others-submit-confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction Confirmation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close_others_confirmed"></button>
        </div>
        <div class="modal-body ms-5 me-5">
        <h6 class="text-center"><i>Other Transactions</i></h6><br>
  
          <div class="d-flex flex-row align-items-center row align-items-start border-bottom border-top">
          <div class="col-8">
            <h6 class="d-flex mb-0">Transaction No:</h6>
            <i class="d-flex" >'.$trans_no_all_send.'</i>
          </div>
          <div class="col-4">
            <h6 class="d-flex mb-0 justify-content-end">Date:</h6>
            <i class="d-flex justify-content-end" >'.$trans_date.'</i>
          </div>
        </div><br>
       
        
            <div class="row align-items-start align-items-center border-top">
            <h6 class="col-5 mb-0">Recipient&apos;s Name:</h6>
            <i class=" col d-flex justify-content-end"><b>'.$name_all_send.'</b></i>  </div>
            <div class="row align-items-start align-items-center border-bottom">
            <h6 class="col-4 mb-0">Recipient&apos;s Email:</h6>
            <i class=" col d-flex justify-content-end">'.$t_email.'</i>
          </div><br>
           <div class="row align-items-start align-items-center border-top border-bottom">
        <i class=" col-3 d-flex justify-content-end"><b>Category</b></i>
        <i class=" col d-flex justify-content-end"><b>Quantity</b></i>
        <i class=" col d-flex justify-content-end"><b>Price</b></i>
        <i class=" col d-flex justify-content-end"><b>Subtotal</b></i>
        </div>';
        if (!empty($o_category)&&!empty($o_subtotal)) {
            // echo "Function Hall - $hall_time_start - $hall_time_end - $price_hall <br>";
             echo "<div class='row align-items-start align-items-center '>
             <h6 class='col-3 mb-0 ms-2'>$o_category</h6>
             <i class=' col d-flex justify-content-end'>$o_quantity</i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_price</b></i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_subtotal</b></i>
             </div>";
           }
           if (!empty($o_category1)&&!empty($o_subtotal1)) {
            // echo "Function Hall - $hall_time_start - $hall_time_end - $price_hall <br>";
             echo "<div class='row align-items-start align-items-center '>
             <h6 class='col-3 mb-0 ms-2'>$o_category1</h6>
             <i class=' col d-flex justify-content-end'>$o_quantity1</i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_price1</b></i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_subtotal1</b></i>
             </div>";
           }
           if (!empty($o_category2)&&!empty($o_subtotal2)) {
            // echo "Function Hall - $hall_time_start - $hall_time_end - $price_hall <br>";
             echo "<div class='row align-items-start align-items-center '>
             <h6 class='col-3 mb-0 ms-2'>$o_category2</h6>
             <i class=' col d-flex justify-content-end'>$o_quantity2</i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_price2</b></i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_subtotal2</b></i>
             </div>";
           }
           if (!empty($o_category3)&&!empty($o_subtotal3)) {
            // echo "Function Hall - $hall_time_start - $hall_time_end - $price_hall <br>";
             echo "<div class='row align-items-start align-items-center '>
             <h6 class='col-3 mb-0 ms-2'>$o_category3</h6>
             <i class=' col d-flex justify-content-end'>$o_quantity3</i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_price3</b></i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_subtotal3</b></i>
             </div>";
           }
           if (!empty($o_category4)&&!empty($o_subtotal4)) {
            // echo "Function Hall - $hall_time_start - $hall_time_end - $price_hall <br>";
             echo "<div class='row align-items-start align-items-center '>
             <h6 class='col-3 mb-0 ms-2'>$o_category4</h6>
             <i class=' col d-flex justify-content-end'>$o_quantity4</i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_price4</b></i>
             <i class=' col d-flex justify-content-end'><b>&#8369; $o_subtotal4</b></i>
             </div>";
           }
  
          echo '<div class="row align-items-start align-items-center border-bottom border-top">
          <h6 class="col-5 mb-0">Total Amount:</h6>
          <i class=" col d-flex justify-content-end"><b>&#8369; '.$total_all_send.'</b></i>
        </div>

        <div class="row align-items-start align-items-center border-bottom">
        <h6 class="col-5 mb-0">Payment:</h6>
        <i class=" col d-flex justify-content-end"><b>&#8369; '.$other_payment_all_send.'</b></i>
        </div>
  
        <div class="d-flex flex-row align-items-center border-bottom">
        <h6 class="col-5 mb-0">Change:</h6>
        <i class=" col d-flex justify-content-end">&#8369; '.$other_change_all_send.'</i>
        </div><br>
  
        <div class=" align-items-center ">
        <h6 class="d-flex mb-0 text-center">Remarks:</h6>
        <i class="d-flex text-center col-12">'.$other_remarks_all_send.'</i></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
          <button type="button" class="btn btn-primary" id="others-submit-confirmed">Confirm</button>
        </div>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    $("#others-submit-confirmation").modal("show");});
  </script>';
  exit();
  }
 } else{
   // echo "Transaction unsuccessful. Please try again.";
    echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
   Error: Transaction unsuccessful. Please try again.
               <button type="button" class="btn-close  close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
                  exit();
  }
  mysqli_close($con);
  ?>
