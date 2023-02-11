<?php
include "includes/connection.php";

$trans_nosend = $_POST['trans_nosend'];
$namesend = $_POST['namesend'];
$totalprice_send = $_POST['totalprice_send'];
$reserv_discountsend = $_POST['reserv_discountsend'];
$remarks_send = $_POST['remarks_send'];
$reserv_paymentsend = $_POST['reserv_paymentsend'];
$reserv_changesend = $_POST['reserv_changesend'];
$reserv_remaining_balancesend = $_POST['reserv_remaining_balancesend'];
$t_email =$_POST['t_email'];
$admin_confirmed = $_POST['admin_confirmed'];

if(isset($_POST['trans_nosend']) && isset($_POST['namesend']) && isset($_POST['totalprice_send']) && isset($_POST['reserv_discountsend']) && isset($_POST['reserv_paymentsend'])){
    
    if (!$reserv_paymentsend || $reserv_paymentsend == 0) {
     //   echo "Please input a valid payment amount.";
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
    } else if ($totalprice_send > $reserv_paymentsend) {
        echo "Please input a valid payment amount.";
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
    } else if (!$namesend) {
        echo "Name field cannot be empty. Please input a name.";
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
    } else {
        // insert into transac_reserv_records table
        $sql1 = "INSERT into transac_reserv_records (records_transaction_no,t_name, total, discount, remarks, reserv_payment, reserv_change, remaining_balance) values ('$trans_nosend','$namesend','$totalprice_send', '$reserv_discountsend','$remarks_send', '$reserv_paymentsend', '$reserv_changesend', '$reserv_remaining_balancesend')";
        $result1 = mysqli_query($con,$sql1);

        // insert into all_transaction table
        $sql2 = "INSERT into all_transaction (transaction_num, transaction_name, Category,transaction_email,confirmed_by) values ('$trans_nosend', '$namesend', 'Reservation','$t_email','$admin_confirmed')";
        $result2 = mysqli_query($con,$sql2);

        if($result1 && $result2){
            echo "Successfully recorded transaction";
        } 
        else {
            echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
            Error: Transaction unsuccessful. Please try again.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>';
                           exit();
        }
    }
}
