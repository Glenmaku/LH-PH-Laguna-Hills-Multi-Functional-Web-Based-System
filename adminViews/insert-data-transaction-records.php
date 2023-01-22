<?php
include "includes/connection.php";

extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['pricesend']) ){
    
    //records_transaction_no	name	date	total	created_at

    $sql = "INSERT into transac_reserv_records (t_name, price) values ('$namesend','$pricesend')";

    $result = mysqli_query($con,$sql);

    if($result){
    echo "<script>alert('successully sent to database');</script>";
    }
    else {
        echo "<script>alert('oh no');</script>";
    }
}
else{
    echo "<script>alert('error');</script>";
}
