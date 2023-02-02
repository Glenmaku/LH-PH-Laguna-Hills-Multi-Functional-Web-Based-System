<?php
include "includes/connection.php";

extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['totalprice_send']) && isset($_POST['reserv_discountsend']) && isset($_POST['trans_nosend']) && isset($_POST['remarks_send']) ){
    
    //records_transaction_no	name	date	total	created_at

    $sql = "INSERT into transac_reserv_records (records_transaction_no,t_name, total, discount, remarks) values ('$trans_nosend','$namesend','$totalprice_send', '$reserv_discountsend','$remarks_send')";

    $result = mysqli_query($con,$sql);

    if($result){
    echo "<script>alert('successully sent to database - records');</script>";
    } 
    else {
        echo "<script>alert('oh no. error sending to records transaction');</script>";
    }
}
