<?php
include "includes/connection.php";

extract($_POST);
if(isset($_POST['trans_no_all_send']) && isset($_POST['name_all_send']) && isset($_POST['total_all_send']) && isset($_POST['other_payment_all_send']) && isset($_POST['other_change_all_send']) && isset($_POST['other_remaining_balance_all_send'])&& isset($_POST['other_remarks_all_send'])){

    $sql = "INSERT into transac_other_total (transaction_no,t_name, other_total, other_payment, other_change, other_remaining_balance, other_remarks) values ('$trans_no_all_send','$name_all_send','$total_all_send', '$other_payment_all_send','$other_change_all_send', '$other_remaining_balance_all_send', '$other_remarks_all_send')";

    $result = mysqli_query($con,$sql);

    if($result){
    echo "<script>alert('successully sent to database - records-ALL');</script>";
    } 
    else {
        echo "<script>alert('oh no. error sending to records transaction');</script>";
    }
}
