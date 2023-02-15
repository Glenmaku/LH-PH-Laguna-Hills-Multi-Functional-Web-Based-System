<?php
require("connection.php");
require("../phpmailer/transac_functions_others.php");
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

$message = "<p>Dear <strong>$name_all_send</strong>,</p>
<p>We are pleased to inform you that your recent transaction with our company has been successfully processed. </p>

<strong>Please find below the details of your transaction:</strong><br><br>
<table style='border-collapse: collapse; margin-left:50px;'>
<tr>
<td style=' padding: 2px; border: 1px solid transparent;'>Transaction No.:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong>$trans_no_all_send </strong></td>
</tr>
<tr>
<td style='padding: 2px; border: 1px solid transparent;'>Transaction Date:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong>$trans_date</strong></td>
</tr>
<tr>
<td style='padding: 2px; border: 1px solid transparent;'>Name:</td>
<td style='padding: 2px; border: 1px solid transparent;'><strong>$name_all_send</strong></td>
</tr><br>
<tr>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Category</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Quantity</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Price</strong></td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Subtotal</strong></td>
</tr>";
if (!empty($o_category)&&!empty($o_subtotal)) {
    $message.="<tr>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_category</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_quantity</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_price</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_subtotal</strong></td>
</tr>";
}
if (!empty($o_category1)&&!empty($o_subtotal1)) {
    $message.="<tr>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_category1</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_quantity1</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_price1</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_subtotal1</strong></td>
</tr>";
}
if (!empty($o_category2)&&!empty($o_subtotal2)) {
    $message.="<tr>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_category2</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_quantity2</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_price2</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_subtotal2</strong></td>
</tr>";
}
if (!empty($o_category3)&&!empty($o_subtotal3)) {
    $message.="<tr>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_category3</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_quantity3</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_price3</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_subtotal3</strong></td>
</tr>";
}
if (!empty($o_category4)&&!empty($o_subtotal4)) {
    $message.="<tr>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_category4</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>$o_quantity4</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_price4</strong></td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $o_subtotal4</strong></td>
</tr>";
}

$message.="<br><tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Total Amount:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $total_all_send</strong></td>
</tr>
<tr>
    <td style='padding: 2px; border: 1px solid transparent;'>Payment:</td>
    <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $other_payment_all_send</strong></td>
</tr>
<tr>
        <td style='padding: 2px; border: 1px solid transparent;'>Change:</td>
        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $other_change_all_send</strong></td>
</tr>
</table>
    <p>If you have any questions or concerns, please do not hesitate to contact us. We are always available to assist you.</p>
    <p>Best regards,<br>
    <strong>$admin_confirmed<br>
    Laguna Hills Subdivision</strong></p>";
$email      = $t_email;
$subject    = " Transaction Confirmation in Laguna Hills";

sendEmail($email, $subject, $message );

?>