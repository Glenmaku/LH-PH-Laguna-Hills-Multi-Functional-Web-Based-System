<?php
include "includes/connection.php";

extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['totalprice_send']) && isset($_POST['reserv_discountsend']) && isset($_POST['trans_nosend']) ){
    
    //records_transaction_no	name	date	total	created_at

    $sql = "INSERT into transac_reserv_records (records_transaction_no,t_name, total, discount) values ('$trans_nosend','$namesend','$totalprice_send', '$reserv_discountsend')";

    $result = mysqli_query($con,$sql);

    if($result){
    echo "<script>alert('successully sent to database');</script>";
    } 
    else {
        echo "<script>alert('oh no. error sending to records transaction');</script>";
    }
}
