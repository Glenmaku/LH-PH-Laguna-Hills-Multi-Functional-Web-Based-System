<?php
include "includes/connection.php";

extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['from_reservation_datesend']) && isset($_POST['to_reservation_datesend']) && isset($_POST['time_startsend']) && isset($_POST['time_endsend']) && isset($_POST['pricesend'])  ){

    $sql = "INSERT into transac_reserv_court (t_name,reserv_date_start,reserv_date_end,time_start,time_end,price) values ('$namesend','$from_reservation_datesend','$to_reservation_datesend','$time_startsend','$time_endsend','$pricesend')";

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
