<?php
    include ('connection.php');
    if(isset($_POST['transaction_id'])){
        $transno = $_POST['transaction_id'];
        $categorytype=$_POST['category'];
        if($categorytype =="Association Dues"){

        // $assoc_sql= "SELECT * FROM transaction_assoc JOIN all_transaction ON transaction_assoc.transaction_num = all_transaction.transaction_num WHERE transaction_assoc.transaction_num = '".$transno."' AND all_transaction.Category ='".$categorytype."'";
        $assoc_sql="SELECT all_transaction.transaction_name as name, all_transaction.transaction_email as email, transaction_assoc.Lot_ID as lot_id, transaction_assoc.assoc_selectedBal as selected_bal, transaction_assoc.assoc_payment as payment, transaction_assoc.assoc_change as m_change, transaction_assoc.assoc_penalty as penalty, transaction_assoc.assoc_discount as discount, transaction_assoc.balance_val as balance, transaction_assoc.assoc_totalbal as total, transaction_assoc.assoc_remaining_bal as remaining, transaction_assoc.assoc_date_payment as date_payment, transaction_assoc.assoc_remarks as remarks 
        FROM transaction_assoc 
        JOIN all_transaction ON transaction_assoc.transaction_num = all_transaction.transaction_num 
        WHERE transaction_assoc.transaction_num = '".$transno."' AND all_transaction.Category ='".$categorytype."'";

        $assoc_result = mysqli_query($con, $assoc_sql);
        
        while($row = mysqli_fetch_assoc($assoc_result)){
            $assoc_name=$row['name'];
            $assoc_email=$row['email'];
            $assoc_lotid=$row['lot_id'];
            $assoc_selectedbal=$row['selected_bal'];
            $assoc_payment=$row['payment'];
            $assoc_change=$row['m_change'];
            $assoc_penalty=$row['penalty'];
            $assoc_discount=$row['discount'];
            $assoc_balance=$row['balance'];
            $assoc_total=$row['total'];
            $assoc_remaining=$row['remaining'];
            $assoc_date=$row['date_payment'];
            $assoc_remarks=$row['remarks'];
            $assoc_payments=$assoc_payment- $assoc_change;
            $discount = ($assoc_discount/$assoc_selectedbal)*100;
            $content='';
            $content.='
                <h6 class="text-center"><i>Association Dues</i></h6><br>
          
                  <div class="d-flex flex-row align-items-center row align-items-start border-bottom border-top">
                  <div class="col-8">
                    <h6 class="d-flex mb-0">Transaction No:</h6>
                    <i class="d-flex" >'.$transno.'</i>
                  </div>
                  <div class="col-4">
                    <h6 class="d-flex mb-0 justify-content-end">Date:</h6>
                    <i class="d-flex justify-content-end" >'.$assoc_date.'</i>
                  </div>
                </div><br>
            
                <div class="row align-items-start align-items-center  border-top">
                    <h6 class="col-5 mb-0">Recipient&apos;s Name:</h6>
                    <i class=" col d-flex justify-content-end"><b>'.$assoc_name.'</b></i>  </div>
                    <div class="row align-items-start align-items-center border-bottom">
                    <h6 class="col-4 mb-0">Recipient&apos;s Email:</h6>
                    <i class=" col d-flex justify-content-end">'.$assoc_email.'</i>
                  </div>
                  <div class="row align-items-start align-items-center border-bottom">
                    <h6 class="col-5 mb-0">Block and lot:</h6>
                    <i class=" col d-flex justify-content-end"><b>'.$assoc_lotid.'</b></i>
                  </div><br>
          
          
                <div class="row align-items-start align-items-center border-top">
                  <h6 class="col-5 mb-0">Total Balance:</h6>
                  <i class=" col d-flex justify-content-end"><b>&#8369; '.$assoc_total.'</b></i>
                </div>
                <div class="row align-items-start align-items-center border-bottom">
                  <h6 class="col-5 mb-0">Interest/Penalty:</h6>
                  <i class=" col d-flex justify-content-end">&#8369; '.$assoc_penalty.'</i>
                </div>
                <div class="row align-items-start align-items-center ">
                  <h6 class="col-5 mb-0">Discount:</h6>
                  <i class=" col d-flex justify-content-end">('.$discount.'%) &#8369; '.$assoc_discount.'</i>
                </div>
          
                <div class="row align-items-start align-items-center border-bottom">
                <h6 class="col-5 mb-0">Payment:</h6>
                <i class=" col d-flex justify-content-end"><b>&#8369; '.$assoc_payments.'</b></i>
                </div>
   
                <div class="d-flex flex-row align-items-center border-bottom">
                <h6 class="col-5 mb-0">Remaining Balance:</h6>
                <i class=" col d-flex justify-content-end"><b>&#8369; '.$assoc_remaining.'</b></i>
                </div><br>
                <div class=" align-items-center">
                <h6 class="d-flex mb-0 text-center">Remarks:</h6>
                <i class="d-flex text-center col-12"><i>'.$assoc_remarks.'</i></i></div>';
                echo $content;
        }
    }
    else if($categorytype =="Reservation"){

    }
    else if($categorytype=="Other Services"){

    }
    else{
        echo'ayaw gumana';
    }
    }else{
        echo'ayaw gumana ih';
    }
?>
