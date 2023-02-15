<?php
 include ('connection.php');
    // A query to update the data to database
    if(isset($_POST['transno'])){
        $transno = $_POST['transno'];
        $r_total = $_POST['r_total'];
        $r_payment = $_POST['r_payment'];
        $r_change = $_POST['r_change'];
        $r_balance = $_POST['r_balance'];
        
      $reserversql ="UPDATE `transac_reserv_records` SET total = '$r_total', reserv_payment = '$r_payment', reserv_change = '$r_change', remaining_balance = '$r_balance' WHERE records_transaction_no= '$transno'";
                    $reserverresult = mysqli_query($con, $reserversql);
                    echo'<div class="alert alert-success alert-dismissible fade show w-100" role="alert" >
                    Successfully updated user information
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                   </div>';
        }

?>
