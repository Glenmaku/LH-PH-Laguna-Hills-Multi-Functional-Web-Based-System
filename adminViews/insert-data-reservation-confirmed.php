<?php
include "includes/connection.php";
$trans_nosend = $_POST['trans_nosend'];

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
    
    {
        // insert into transac_reserv_records table
        $namesend = $t_fname." ".$t_lname;
        
        $sql1 = "INSERT into transac_reserv_records (records_transaction_no,t_name, total, discount, remarks, reserv_payment, reserv_change, remaining_balance,authorization_type,reserv_date_start,reserv_date_end) values ('$trans_nosend','$namesend','$totalprice_send', '$reserv_discountsend','$remarks_send', '$reserv_paymentsend', '$reserv_changesend', '$reserv_remaining_balancesend','$AuthorizeType','$fromdate','$todate')";
            $result1 = mysqli_query($con,$sql1);

        // insert into all_transaction table
        $sql2 = "INSERT into all_transaction (transaction_num, transaction_name, Category,transaction_email,confirmed_by) values ('$trans_nosend', '$namesend', 'Reservation','$t_email','$admin_confirmed')";
            $result2 = mysqli_query($con,$sql2);

        if($result1 && $result2){
            echo'<div class="alert alert-success alert-dismissible fade show  w-100 text-center" role="alert">
            Successfully recorded transaction.
                         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
            // if(!empty($hall_time_start)||!empty($hall_time_end)){
                if (!empty($checkbox_hall)) {
                $new = $price_hall-($price_hall*($reserv_discountsend/100));
                $sql3="INSERT into transac_reserv_hall (transaction_no,t_name,reserv_date_start,reserv_date_end,time_start,time_end, price) values ('$trans_nosend','$namesend','$fromdate','$todate','$hall_time_start','$hall_time_end','$new')";

                $result3 = mysqli_query($con,$sql3);
            }else{}
            // if(!empty($court_time_start)||!empty($court_time_end)){
                if (!empty($checkbox_court)) {
                $new = $price_court-($price_court*($reserv_discountsend/100));
                $sql4="INSERT into transac_reserv_court (transaction_no,t_name,reserv_date_start,reserv_date_end,time_start,time_end, price) values ('$trans_nosend','$namesend','$fromdate','$todate','$court_time_start','$court_time_end','$new')";

                $result4 = mysqli_query($con,$sql4);
            }else{}
            // if(!empty($miming_time_start)||!empty($miming_time_end)){
                if (!empty($checkbox_miming)) {
                $new = $price_miming-($price_miming*($reserv_discountsend/100));
                $sql5="INSERT into transac_reserv_miming (transaction_no,t_name,reserv_date_start,reserv_date_end,time_start,time_end, price) values ('$trans_nosend','$namesend','$fromdate','$todate','$miming_time_start','$miming_time_end','$new')";

                $result5 = mysqli_query($con,$sql5);
            }else{}
        } 
        else {
            echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
            Error: Transaction unsuccessful. Please try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>';
                           exit();
        }
    }
?>