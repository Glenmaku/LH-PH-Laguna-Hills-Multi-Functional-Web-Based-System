<?php
include "includes/connection.php";

extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['totalprice_send']) ){
    
    //records_transaction_no	name	date	total	created_at

    $sql = "INSERT into transac_reserv_records (t_name, total) values ('$namesend','$totalprice_send')";

    $result = mysqli_query($con,$sql);

    if($result){
    echo "<script>alert('successully sent to database');</script>";
    } 
    else {
        echo "<script>alert('oh no');</script>";
    }
}
