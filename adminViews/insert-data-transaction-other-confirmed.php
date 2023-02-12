<?php
include "includes/connection.php";
if(isset($_POST['trans_no_all_send'])){
    $trans_no_all_send = $_POST['trans_no_all_send'];
    $t_fname = $_POST['t_fname'];
    $t_lname = $_POST['t_lname'];
    $t_email = $_POST['t_email'];
    $admin_confirmed = $_POST['admin_confirmed'];
    $trans_date = $_POST['trans_date'];
    
    $o_category = $_POST['o_category'];
    $o_category1 = $_POST['o_category1'];
    $o_category2 = $_POST['o_category2'];
    $o_category3 = $_POST['o_category3'];
    $o_category4 = $_POST['o_category4'];
    
    $o_quantity = $_POST['o_quantity'];
    $o_quantity1 = $_POST['o_quantity1'];
    $o_quantity2 = $_POST['o_quantity2'];
    $o_quantity3 = $_POST['o_quantity3'];
    $o_quantity4 = $_POST['o_quantity4'];
    
    $o_price = $_POST['o_price'];
    $o_price1 = $_POST['o_price1'];
    $o_price2 = $_POST['o_price2'];
    $o_price3 = $_POST['o_price3'];
    $o_price4 = $_POST['o_price4'];
    
    $o_subtotal = $_POST['o_subtotal'];
    $o_subtotal1 = $_POST['o_subtotal1'];
    $o_subtotal2 = $_POST['o_subtotal2'];
    $o_subtotal3 = $_POST['o_subtotal3'];
    $o_subtotal4 = $_POST['o_subtotal4'];

    $name_all_send = $t_fname." ".$t_lname;

    $total_all_send  = $_POST['total_all_send'];
    $other_payment_all_send = $_POST['other_payment_all_send'];
    $other_change_all_send = $_POST['other_change_all_send'];
    $other_remaining_balance_all_send = $_POST['other_remaining_balance_all_send'];
    $other_remarks_all_send = $_POST['other_remarks_all_send'];
    
    $sql = "INSERT into transac_other_total (transaction_no,t_name, other_total, other_payment, other_change, other_remaining_balance, other_remarks) values ('$trans_no_all_send','$name_all_send','$total_all_send', '$other_payment_all_send','$other_change_all_send', '$other_remaining_balance_all_send', '$other_remarks_all_send')";

    $result = mysqli_query($con,$sql);

    $sql2 = " INSERT INTO all_transaction (transaction_num,transaction_name,Category,transaction_email,confirmed_by) values ('$trans_no_all_send','$name_all_send','Other Services','$t_email','$admin_confirmed')";

    $result2 = mysqli_query($con,$sql2);

    if($result && $result2){
        echo'<div class="alert alert-success alert-dismissible fade show  w-100 text-center" role="alert">
        Successfully recorded transaction.
                     <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
       if (!empty($o_category) && (!empty($o_subtotal)||$o_subtotal===0)) {
        $sql3 = "INSERT INTO transac_other (transaction_no, t_name, category, quantity, price, subtotal) values ('$trans_no_all_send', '$name_all_send', '$o_category','$o_quantity',' $o_price','$o_subtotal')";
        $result3 = mysqli_query($con,$sql3); 
       }
        else{}
        if (!empty($o_category1) && (!empty($o_subtotal1)||$o_subtotal1===0)) {
            $sql4 = "INSERT INTO transac_other (transaction_no, t_name, category, quantity, price, subtotal) values ('$trans_no_all_send', '$name_all_send', '$o_category1','$o_quantity1',' $o_price1','$o_subtotal1')";
            $result4 = mysqli_query($con,$sql4); 

           }
            else{}
            if (!empty($o_category2) && (!empty($o_subtotal2)||$o_subtotal2===0)) {
                $sql5 = "INSERT INTO transac_other (transaction_no, t_name, category, quantity, price, subtotal) values ('$trans_no_all_send', '$name_all_send', '$o_category2','$o_quantity2',' $o_price2','$o_subtotal2')";
                $result5 = mysqli_query($con,$sql5); 
               }
                else{}
                if (!empty($o_category3) && (!empty($o_subtotal3)||$o_subtotal3===0)) {
                    $sql6 = "INSERT INTO transac_other (transaction_no, t_name, category, quantity, price, subtotal) values ('$trans_no_all_send', '$name_all_send', '$o_category3','$o_quantity3','$o_price3','$o_subtotal3')";
                    $result6 = mysqli_query($con,$sql6); 
                   }
                    else{}
                    if (!empty($o_category4) && (!empty($o_subtotal4)||$o_subtotal4===0)) {
                        $sql7 = "INSERT INTO transac_other (transaction_no, t_name, category, quantity, price, subtotal) values ('$trans_no_all_send', '$name_all_send', '$o_category4','$o_quantity4','$o_price4','$o_subtotal4')";
                        $result7 = mysqli_query($con,$sql7); 
                       }
                        else{}
    } 
    else {
        echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
        Error: Transaction unsuccessful. Please try again.
                    <button type="button" class="btn-close close_alert_others" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>';
                       exit();
    }
}
?>