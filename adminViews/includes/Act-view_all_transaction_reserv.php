<?php
    include ('connection.php');
    if(isset($_POST['transaction_id'])){
        $transno = $_POST['transaction_id'];

        $reserv_sql = "SELECT all_transaction.transaction_name as name, all_transaction.transaction_email as email,all_transaction.transaction_date as dates,
        transac_reserv_records.reserver_type as reserver, transac_reserv_records.reserv_date_start as datestart, transac_reserv_records.reserv_date_end as dateend, transac_reserv_records.total as total, transac_reserv_records.discount as discount,transac_reserv_records.remarks as remarks, transac_reserv_records.reserv_payment as payment, transac_reserv_records.reserv_change as r_change, transac_reserv_records.remaining_balance as rembalance,transac_reserv_records.authorization_type as authorize
        FROM transac_reserv_records
        JOIN all_transaction ON transac_reserv_records.records_transaction_no = all_transaction.transaction_num 
        WHERE transac_reserv_records.records_transaction_no = '".$transno."' ";
        $reserv_result = mysqli_query($con, $reserv_sql);
        while($row = mysqli_fetch_assoc($reserv_result)){
          $reserv_name=$row['name'];
          $reserv_email=$row['email'];
          $reserv_date = $row['dates'];
          $reserv_type=$row['reserver'];
          $reserv_date_start=$row['datestart'];
          $reserv_date_end=$row['dateend'];
          $reserv_total=$row['total'];
          $reserv_discount=$row['discount'];
          $reserv_remarks=$row['remarks'];
          $reserv_payment=$row['payment'];
          $reserv_change=$row['r_change'];
          $reserv_remaining_balance=$row['rembalance'];
          $reserv_authorization_type=$row['authorize'];
  
          $reserv_payments=$reserv_payment- $reserv_change;
          $discount = $reserv_total*($reserv_discount/100);
  
          $reservcontent='';
          $reservcontent.='
        
    
                <div class="d-flex flex-row align-items-center row align-items-start border-bottom ">
                <div class="col-5">
                  <h6 class="d-flex mb-0">Transaction No:</h6>
                  <i class="d-flex" >'.$transno.'</i>
                </div>
                <div class="col-7">
                  <h6 class="d-flex mb-0 justify-content-end">Date:</h6>
                  <i class="d-flex justify-content-end" >'.$reserv_date.'</i>
                </div>
              </div><br>
              
              <div class="row align-items-start align-items-center  border-top">
                  <h6 class="col-5 mb-0">Recipient&apos;s Name:</h6>
                  <i class=" col d-flex justify-content-end"><b>'.$reserv_name.'</b></i>  </div>
                  <div class="row align-items-start align-items-center border-top border-bottom">
                  <h6 class="col-5 mb-0">Reserver:</h6>
                  <i class=" col d-flex justify-content-end">'.$reserv_type.'</i>  </div>
                  <div class="row align-items-start align-items-center">
                  <h6 class="col-4 mb-0">Recipient&apos;s Email:</h6>
                  <i class=" col d-flex justify-content-end">'.$reserv_email.'</i>
                </div>
              <div class="row align-items-start align-items-center border-bottom border-top">
                  <h6 class="col-5 mb-0">Reservation Date</h6>
                  <i class=" col d-flex justify-content-end"><b>'.$reserv_date_start.' - '.$reserv_date_end.'</b></i>
              </div>
              <div class="row align-items-start align-items-center ">
                  <h6 class="text-center mb-0">Reservations </h6></div>';
                //  if (!empty($checkbox_hall)) {
                  $hallsql="SELECT * FROM transac_reserv_hall WHERE transaction_no = '".$transno."'";
                  $hallsql_result= mysqli_query($con, $hallsql);
                  while($row = mysqli_fetch_assoc($hallsql_result)){
                    $hall_timestart=$row['time_start'];
                    $hall_timeend=$row['time_end'];
                    $hall_price = $row['price'];
  
                     // echo "Function Hall - $hall_time_start - $hall_time_end - $price_hall <br>";
                     $reservcontent.= '<div class="row align-items-start align-items-center ">
                      <h6 class="col-5 mb-0 ms-2">Function Hall</h6>
                      <i class="col d-flex justify-content-end">'.$hall_timestart.' - '.$hall_timeend.'</i>
                      <i class="col-3 d-flex justify-content-end"><b>&#8369; '.$hall_price.'</b></i>
                      </div>';
                  }
                  //  }
                  //  if (!empty($checkbox_court)) {
                    $courtsql="SELECT * FROM transac_reserv_court WHERE transaction_no = '".$transno."'";
                    $courtsql_result=mysqli_query($con, $courtsql);
                    while($row = mysqli_fetch_assoc($courtsql_result)){
                      $court_timestart=$row['time_start'];
                      $court_timeend=$row['time_end'];
                      $court_price = $row['price'];
                      //echo "Court - $court_time_start - $court_time_end - $price_court <br>";
                      $reservcontent.= '<div class="row align-items-start align-items-center ">
                      <h6 class="col-5 mb-0 ms-2">Covered Court</h6>
                      <i class="col d-flex justify-content-end"> '.$court_timestart.' - '.$court_timeend.'</i>
                      <i class="col-3 d-flex justify-content-end"><b>&#8369; '.$court_price.'</b></i>
                      </div>';
                  }
                  //  if (!empty($checkbox_miming)) {
                    $poolsql="SELECT * FROM transac_reserv_miming WHERE transaction_no = '".$transno."'";
                    $poolsql_result=mysqli_query($con, $poolsql);
                    while($row = mysqli_fetch_assoc($poolsql_result)){
                      $pool_timestart=$row['time_start'];
                      $pool_timeend=$row['time_end'];
                      $pool_price = $row['price'];
                      //echo "Swimming Pool - $miming_time_start - $miming_time_end - $price_miming <br>";
                      $reservcontent.= '<div class="row align-items-start align-items-center border-bottom">
                      <h6 class="col-5 mb-0 ms-2">Swimming Pool</h6>
                      <i class=" col d-flex justify-content-end"> '.$pool_timestart.' - '.$pool_timeend.'</i>
                      <i class=" col-3 d-flex justify-content-end"><b>&#8369; '.$pool_price.'</b></i>
                      </div>';
                   }  
          $reservcontent.= '
              <div class="row align-items-start align-items-center border-bottom">
                <h6 class="col-5 mb-0">Total Amount:</h6>
                <i class=" col d-flex justify-content-end"><b>&#8369; '.$reserv_total.'</b></i>
              </div>
              <div class="row align-items-start align-items-center">
                <h6 class="col-5 mb-0">Discount:</h6>
                <i class=" col d-flex justify-content-end">('.$reserv_discount.'%) &#8369; '.$discount.'</i>
              </div>
        
              <div class="row align-items-start align-items-center border-bottom">
              <h6 class="col-5 mb-0">Payment:</h6>
              <i class=" col d-flex justify-content-end"><b>&#8369; '.$reserv_payment.'</b></i>
              </div>
        
              <div class="d-flex flex-row align-items-center border-bottom">
              <h6 class="col-5 mb-0">Change:</h6>
              <i class=" col d-flex justify-content-end">&#8369; '.$reserv_change.'</i>
              </div><br>
        
              <div class="d-flex flex-row align-items-center border-bottom">
              <h6 class="col-5 mb-0">Remaining Balance:</h6>
              <i class=" col d-flex justify-content-end"><b>&#8369; '. $reserv_remaining_balance.'</b></i>
              </div><br>
              <div class="row align-items-start align-items-center border-top border-bottom">
              <h6 class="col-4 mb-0">Authorization:</h6>
              <i class=" col d-flex justify-content-end">'.$reserv_authorization_type.'</i>
            </div>
              <div class=" align-items-center ">
              <h6 class="d-flex mb-0 text-center">Remarks:</h6>
              <i class="d-flex text-center col-12">'.$reserv_remarks.'</i></div>
              </div>';
          echo $reservcontent;
        }
      }
?>