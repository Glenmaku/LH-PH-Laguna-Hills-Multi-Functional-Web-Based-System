<?php
require("connection.php");
require("../phpmailer/transac_functions_reserv.php");
$trans_nosend = $_POST['trans_nosend'];

$t_fname = $_POST['t_fname'];
$t_lname = $_POST['t_lname'];
$t_email = $_POST['t_email'];
$admin_confirmed = $_POST['admin_confirmed'];
$AuthorizeType = $_POST['AuthorizeType'];
$ReserverType = $_POST['ReserverType'];
$trans_date = $_POST['trans_date'];
$r_homeowner = $_POST['r_homeowner'];
$r_guest = $_POST['r_guest'];

$fromdate = $_POST['from_reservation_date'];
$todate = $_POST['to_reservation_date'];

$checkbox_hall = $_POST['checkbox_hall'];
$checkbox_court = $_POST['checkbox_court'];
$checkbox_miming = $_POST['checkbox_miming'];

$hall_time_start = $_POST['hall_time_start'];
$hall_time_end = $_POST['hall_time_end'];
$price_hall = $_POST['price_hall'];

$court_time_start = $_POST['court_time_start'];
$court_time_end = $_POST['court_time_end'];
$price_court = $_POST['price_court'];

$miming_time_start = $_POST['miming_time_start'];
$miming_time_end = $_POST['miming_time_end'];
$price_miming = $_POST['price_miming'];

$totalprice_send = $_POST['totalprice_send'];
$reserv_discountsend = $_POST['reserv_discountsend'];
$remarks_send = $_POST['remarks_send'];
$reserv_paymentsend = $_POST['reserv_paymentsend'];
$reserv_changesend = $_POST['reserv_changesend'];
$reserv_remaining_balancesend = $_POST['reserv_remaining_balancesend'];
$namesend = $t_fname." ".$t_lname;
        

$message = "<p>Dear <strong>$namesend</strong>,</p>
<p>We are pleased to inform you that your reservation for Laguna Hills has been approved. Your reservation details are as follows:</p>

<strong>Please find below the details of your payment:</strong><br><br>
<table style='border-collapse: collapse; margin-left:50px;'>

    <tr>
        <td style=' padding: 2px; border: 1px solid transparent;'>Transaction No.:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$trans_nosend</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Transaction Date:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$trans_date</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Name:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$namesend</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Reservation Date:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$fromdate - $todate</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Reserved Amenities: </td>
    </tr>";
    if (!empty($checkbox_hall)) {
        $newhall = $price_hall-($price_hall*($reserv_discountsend/100));
    $message ="<tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Function Hall</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$hall_time_start - $hall_time_end</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $price_hall</strong></td>
    </tr>"; }else{}
    if (!empty($checkbox_miming)) {
        $newmiming = $price_miming-($price_miming*($reserv_discountsend/100));
        $message ="<tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Swimming Pool</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$miming_time_start - $miming_time_end</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $price_miming</strong></td>
    </tr>"; }else{}
    if (!empty($checkbox_court)) {
        $newcourt = $price_court-($price_court*($reserv_discountsend/100));
    $message ="<tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Covered Court</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$court_time_start - $court_time_end</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong> Php $price_court</strong></td>
    </tr>"; }else{}
    $message="<tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Total Amount:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $totalprice_send</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Discount:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>$reserv_discountsend%</strong></td>
    </tr>
    <tr>
    <td style='padding: 2px; border: 1px solid transparent;'>Payment:</td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $reserv_paymentsend</strong></td>
</tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Change:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $reserv_changesend</strong></td>
    </tr>
    <tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Remaining Balance:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $reserv_remaining_balancesend</strong></td>
    </tr>
</table>
<p>Please note that once a reservation is confirmed, there is no return or refund. We kindly ask for your full cooperation regarding this matter.</p>

<p>We would like to thank you for choosing to stay with us and we hope that you will have a pleasant and enjoyable experience in Laguna Hills.</p>

<p>If you have any questions or concerns, please do not hesitate to contact us. We are always available to assist you.</p>
<p>Best regards,<br>
<strong>$admin_confirmed<br>
Laguna Hills Subdivision</strong></p>";
$email      = $t_email;
$subject    = " Reservation Confirmation in Laguna Hills";

sendEmail($email, $subject, $message );
?>