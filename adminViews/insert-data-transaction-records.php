<?php
include "includes/connection.php";
$trans_nosend = $_POST['trans_nosend'];
$trans_date = $_POST['trans_date'];
$t_fname = $_POST['t_fname'];
$t_lname = $_POST['t_lname'];
$t_email = $_POST['t_email'];
$admin_confirmed = $_POST['admin_confirmed'];
$AuthorizeType = $_POST['AuthorizeType'];

$fromdate = $_POST['from_reservation_date'];
$todate = $_POST['to_reservation_date'];

$checkbox_hall = $_POST['checkbox_hall'];
$checkbox_court = $_POST['checkbox_court'];
$checkbox_miming = $_POST['checkbox_miming'];

$hall_time_start = $_POST['hall_time_start'];
$hall_time_end = $_POST['hall_time_end'];
$price_hall = $_POST['price_hall'];

$court_time_start = $_POST['court_time_start'];
$court_time_end = $_POST['court_time_end'];
$price_court = $_POST['price_court'];

$miming_time_start = $_POST['miming_time_start'];
$miming_time_end = $_POST['miming_time_end'];
$price_miming = $_POST['price_miming'];

$totalprice_send = $_POST['totalprice_send'];
$reserv_discountsend = $_POST['reserv_discountsend'];
$remarks_send = $_POST['remarks_send'];
$reserv_paymentsend = $_POST['reserv_paymentsend'];
$reserv_changesend = $_POST['reserv_changesend'];
$reserv_remaining_balancesend = $_POST['reserv_remaining_balancesend'];



// if(isset($_POST['trans_nosend'])&& isset($_POST['totalprice_send']) && isset($_POST['reserv_discountsend']) && isset($_POST['reserv_paymentsend'])){
    
    if (empty($t_fname) || empty($t_lname)||empty($t_email)) {
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: Please enter the first name, last name, and email of recipient.
                    <button type="button" class="btn-close close_alert_reserv" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>';
                       exit();
      }
    else if(empty($fromdate)||empty($todate)){
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: Please provide the date of reservation.
                    <button type="button" class="btn-close close_alert_reserv" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>';
                       exit();
    }
    else{
        $query = "SELECT * FROM transac_reserv_records WHERE reserv_date_start <= '$fromdate' AND reserv_date_end >= '$todate'";
         $result = mysqli_query($con, $query);
         if(mysqli_num_rows($result) > 0) {
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: A reservation already exists on this date.
                    <button type="button" class="btn-close  close_alert_reserv" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>';
                       exit();   
        }
        else if(empty($checkbox_court)&&empty($checkbox_hall)&&empty($checkbox_miming)){
            echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
            Error: Select amenities to reserve.
                        <button type="button" class="btn-close  close_alert_reserv" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        exit();
        }
      else {
        $transaction_name = $t_fname." ".$t_lname;
        $dis = $totalprice_send*($reserv_discountsend/100);
        echo '<div class="modal fade" id="reserv-submit-confirmation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Reservation Confirmation</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close_reserv_confirmed"></button>
            </div>
            <div class="modal-body ms-5 me-5">
            <h6 class="text-center"><i>Please verify the information below</i></h6><br>
      
              <div class="d-flex flex-row align-items-center row align-items-start border-bottom  border-top">
              <div class="col-8">
                <h6 class="d-flex mb-0">Transaction No:</h6>
                <i class="d-flex" >'.$trans_nosend.'</i>
              </div>
              <div class="col-4">
                <h6 class="d-flex mb-0 justify-content-end">Date:</h6>
                <i class="d-flex justify-content-end" >'.$trans_date.'</i>
              </div>
            </div><br>
            
            <div class="row align-items-start align-items-center  border-top">
                <h6 class="col-5 mb-0">Recipient&apos;s Name:</h6>
                <i class=" col d-flex justify-content-end"><b>'.$transaction_name.'</b></i>  </div>
                <div class="row align-items-start align-items-center">
                <h6 class="col-4 mb-0">Recipient&apos;s Email:</h6>
                <i class=" col d-flex justify-content-end">'.$t_email.'</i>
              </div>
            <div class="row align-items-start align-items-center border-bottom border-top">
                <h6 class="col-5 mb-0">Reservation Date</h6>
                <i class=" col d-flex justify-content-end"><b>'.$fromdate.' - '.$todate.'</b></i>
            </div>
            <div class="row align-items-start align-items-center ">
                <h6 class="text-center mb-0">Reservations </h6></div>';
                if (!empty($checkbox_hall)) {
                   // echo "Function Hall - $hall_time_start - $hall_time_end - $price_hall <br>";
                    echo "<div class='row align-items-start align-items-center '>
                    <h6 class='col-5 mb-0 ms-2'>Function Hall</h6>
                    <i class=' col d-flex justify-content-end'> $hall_time_start - $hall_time_end</i>
                    <i class=' col-3 d-flex justify-content-end'><b>&#8369; $price_hall</b></i>
                    </div>";
                  }
                  if (!empty($checkbox_court)) {
                    //echo "Court - $court_time_start - $court_time_end - $price_court <br>";
                    echo "<div class='row align-items-start align-items-center '>
                    <h6 class='col-5 mb-0 ms-2'>Covered Court</h6>
                    <i class=' col d-flex justify-content-end'> $court_time_start - $court_time_end</i>
                    <i class=' col-3 d-flex justify-content-end'><b>&#8369; $price_court</b></i>
                    </div>";
                  }
                  if (!empty($checkbox_miming)) {
                    //echo "Swimming Pool - $miming_time_start - $miming_time_end - $price_miming <br>";
                    echo "<div class='row align-items-start align-items-center border-bottom'>
                    <h6 class='col-5 mb-0 ms-2'>Swimming Pool</h6>
                    <i class=' col d-flex justify-content-end'> $miming_time_start - $miming_time_end</i>
                    <i class=' col-3 d-flex justify-content-end'><b>&#8369; $price_miming</b></i>
                    </div>";
                  }
                  echo '
            <div class="row align-items-start align-items-center border-bottom">
              <h6 class="col-5 mb-0">Total Amount:</h6>
              <i class=" col d-flex justify-content-end"><b>&#8369; '.$totalprice_send.'</b></i>
            </div>
            <div class="row align-items-start align-items-center">
              <h6 class="col-5 mb-0">Discount:</h6>
              <i class=" col d-flex justify-content-end">('.$reserv_discountsend.'%) &#8369; '.$dis.'</i>
            </div>
      
            <div class="row align-items-start align-items-center border-bottom">
            <h6 class="col-5 mb-0">Payment:</h6>
            <i class=" col d-flex justify-content-end"><b>&#8369; '.$reserv_paymentsend.'</b></i>
            </div>
      
            <div class="d-flex flex-row align-items-center border-bottom">
            <h6 class="col-5 mb-0">Change:</h6>
            <i class=" col d-flex justify-content-end">&#8369; '.$reserv_changesend.'</i>
            </div><br>
      
            <div class="d-flex flex-row align-items-center border-bottom">
            <h6 class="col-5 mb-0">Remaining Balance:</h6>
            <i class=" col d-flex justify-content-end"><b>&#8369; '.$reserv_remaining_balancesend.'</b></i>
            </div><br>
            <div class=" align-items-center ">
            <h6 class="d-flex mb-0 text-center">Remarks:</h6>
            <i class="d-flex text-center col-12">'.$remarks_send.'</i></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Edit</button>
              <button type="button" class="btn btn-primary" id="reserv-submit-confirmed">Confirm</button>
            </div>
          </div>
        </div>
      </div>
      <script>
      $(document).ready(function(){
        $("#reserv-submit-confirmation").modal("show");});
      </script>';
      exit();
      }
    }
    
?>