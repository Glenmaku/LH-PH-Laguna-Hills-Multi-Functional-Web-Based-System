<?php
require("connection.php");
require("../phpmailer/transac_functions_reserv.php");


if (isset($_POST['transno'])){
$transno = $_POST['transno'];
$reserv_query = "SELECT all_transaction.transaction_name as name, all_transaction.transaction_email as email,all_transaction.transaction_date as dates, all_transaction.confirmed_by as confirm,
transac_reserv_records.reserver_type as reserver, transac_reserv_records.reserv_date_start as datestart, transac_reserv_records.reserv_date_end as dateend, transac_reserv_records.total as total, transac_reserv_records.discount as discount,transac_reserv_records.remarks as remarks, transac_reserv_records.reserv_payment as payment, transac_reserv_records.reserv_change as r_change, transac_reserv_records.remaining_balance as rembalance,transac_reserv_records.authorization_type as authorize
FROM transac_reserv_records
JOIN all_transaction ON transac_reserv_records.records_transaction_no = all_transaction.transaction_num 
WHERE transac_reserv_records.records_transaction_no = '".$transno."' ";
$reserv_result = mysqli_query($con,$reserv_query);
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
          $reserv_confirm= $row['confirm'];
  
          $reserv_payments=$reserv_payment- $reserv_change;
          $discount = $reserv_total*($reserv_discount/100);

   
$message = "<p>Dear <strong>$reserv_name</strong>,</p>
<p>Your payment for your reservation has been successfully updated. Your reservation details are as follows:</p>

<strong>Please find below the details of your payment:</strong><br><br>
<table style='border-collapse: collapse; margin-left:50px;'>

    <tr>
        <td style=' padding: 2px; border: 1px solid transparent;'>Transaction No.:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$transno</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Transaction Date:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$reserv_date</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Name:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$reserv_name</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Reservation Date:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$reserv_date_start - $reserv_date_end</strong></td>
    </tr><br>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Reserved Amenities: </td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Amenities</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Time</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Price</strong></td>
    </tr>";   
    $hallsql="SELECT * FROM transac_reserv_hall WHERE transaction_no = '".$transno."'";
    $hallsql_result= mysqli_query($con, $hallsql);
    while($row = mysqli_fetch_assoc($hallsql_result)){
      $hall_timestart=$row['time_start'];
      $hall_timeend=$row['time_end'];
      $hall_price = $row['price'];
      $message.="<tr>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>Function Hall</strong></td>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>$hall_timestart - $hall_timeend</strong></td>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $hall_price</strong></td>
        </tr>";
    }
    $courtsql="SELECT * FROM transac_reserv_court WHERE transaction_no = '".$transno."'";
    $courtsql_result=mysqli_query($con, $courtsql);
    while($row = mysqli_fetch_assoc($courtsql_result)){
      $court_timestart=$row['time_start'];
      $court_timeend=$row['time_end'];
      $court_price = $row['price'];
      //echo "Court - $court_time_start - $court_time_end - $price_court <br>";
      $message.="<tr>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>Covered Court</strong></td>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>$court_timestart - $court_timeend</strong></td>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $court_price</strong></td>
        </tr>";
  }
  $poolsql="SELECT * FROM transac_reserv_miming WHERE transaction_no = '".$transno."'";
  $poolsql_result=mysqli_query($con, $poolsql);
  while($row = mysqli_fetch_assoc($poolsql_result)){
    $pool_timestart=$row['time_start'];
    $pool_timeend=$row['time_end'];
    $pool_price = $row['price'];
    //echo "Swimming Pool - $miming_time_start - $miming_time_end - $price_miming <br>";
    $message.="<tr>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>Swimming Pool</strong></td>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>$pool_timestart - $pool_timeend</strong></td>
      <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $pool_price</strong></td>
        </tr>";
 }  

$message.="<br><tr>
<td style='padding: 2px; border: 1px solid transparent;'>Total Amount:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong>Php  $reserv_total</strong></td>
</tr>
<tr>
<td style='padding: 2px; border: 1px solid transparent;'>Discount:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong> $reserv_discount%</strong></td>
</tr>
<tr>
<td style='padding: 2px; border: 1px solid transparent;'>Payment:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong>Php $reserv_payment</strong></td>
</tr>
<tr>
<td style='padding: 2px; border: 1px solid transparent;'>Change:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong>Php $reserv_change</strong></td>
</tr>
<tr>
<td style='padding: 2px; border: 1px solid transparent;'>Remaining Balance:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong>Php $reserv_remaining_balance</strong></td>
</tr>
</table>
<p>Please note that once a reservation is confirmed, there is no return or refund. We kindly ask for your full cooperation regarding this matter.</p>

<p>We would like to thank you for choosing to stay with us and we hope that you will have a pleasant and enjoyable experience in Laguna Hills.</p>

<p>If you have any questions or concerns, please do not hesitate to contact us. We are always available to assist you.</p>
<p>Best regards,<br>
<strong>$reserv_confirm<br>
Laguna Hills Subdivision</strong></p>";
$email      =  $reserv_email;
$subject    = " Reservation Confirmation in Laguna Hills";

sendEmail($email, $subject, $message );}
echo'<div class="alert alert-success alert-dismissible fade show w-100" role="alert" >
Successfully sent receipt.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
}
?>