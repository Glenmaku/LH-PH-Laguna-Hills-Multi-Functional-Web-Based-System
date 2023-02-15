<?php
// require_once("connection.php");

// if(isset($_POST['Deletetrans'])){
// $Deletetrans=$_POST['Deletetrans'];
// $deletequery="";
// $resultdelete=mysqli_query($con,$deletequery);
// if
// }
?><?php
require_once("connection.php");

if(isset($_POST['Deletetrans'])){
    $Deletetrans=$_POST['Deletetrans'];
    $deletequery_all_trans="DELETE FROM all_transaction WHERE transaction_num = '$Deletetrans'";
    $deletequery_reserv_records="DELETE FROM transac_reserv_records WHERE records_transaction_no = '$Deletetrans'";

    // Check if $Deletetrans exists in each table before deleting
    $query_check_miming = "SELECT * FROM transac_reserv_miming WHERE transaction_no = '$Deletetrans'";
    $query_check_court = "SELECT * FROM transac_reserv_court WHERE transaction_no = '$Deletetrans'";
    $query_check_hall = "SELECT * FROM transac_reserv_hall WHERE transaction_no = '$Deletetrans'";
    $result_check_miming = mysqli_query($con, $query_check_miming);
    $result_check_court = mysqli_query($con, $query_check_court);
    $result_check_hall = mysqli_query($con, $query_check_hall);

    // Proceed to delete if $Deletetrans exists in the table
    if (mysqli_num_rows($result_check_miming) > 0) {
        $deletequery_reserv_miming="DELETE FROM transac_reserv_miming WHERE transaction_no = '$Deletetrans'";
        $resultdelete_reserv_miming=mysqli_query($con,$deletequery_reserv_miming);
    }
    if (mysqli_num_rows($result_check_court) > 0) {
        $deletequery_reserv_court="DELETE FROM transac_reserv_court WHERE transaction_no = '$Deletetrans'";
        $resultdelete_reserv_court=mysqli_query($con,$deletequery_reserv_court);
    }
    if (mysqli_num_rows($result_check_hall) > 0) {
        $deletequery_reserv_hall="DELETE FROM transac_reserv_hall WHERE transaction_no = '$Deletetrans'";
        $resultdelete_reserv_hall=mysqli_query($con,$deletequery_reserv_hall);
    }

    $resultdelete_all_trans=mysqli_query($con,$deletequery_all_trans);
    $resultdelete_reserv_records=mysqli_query($con,$deletequery_reserv_records);

    if($resultdelete_all_trans && $resultdelete_reserv_records){
        echo'<div class="alert alert-success alert-dismissible fade show  w-100 text-center" role="alert">
        Reservation record deleted successfully.
        <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        exit();
    } else {
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: An error occured while deleting the reservation record. Please try again.
        <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        exit();
    }
}
?>