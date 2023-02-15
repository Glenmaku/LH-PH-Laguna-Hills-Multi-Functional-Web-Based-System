<?php
require("connection.php");
require("one_functions.php");
require_once 'PHPMailerAutoload.php';
require_once 'class.smtp.php';
require_once 'class.phpmailer.php';

if(isset($_POST['transaction_num'])){

$trans_num = $_POST['transaction_num'];

$t_fname = $_POST['t_fname'];
$t_lname = $_POST['t_lname'];
$t_email = $_POST['t_email'];
$property = $_POST['property'];
$total_balance = $_POST['total_balance'];
$selected_balance = $_POST['selected_balance'];
$discount = $_POST['discount'];
$interest = $_POST['interest'];
$balance_total = $_POST['balance_total'];
$payment = $_POST['payment'];
$change = $_POST['change'];
$ifadvanced = $_POST['ifadvanced'];
$remaining_balance = $_POST['remaining_balance'];
$remarks = $_POST['remarks'];
$admin_confirmed = $_POST['admin_confirmed'];
$trans_date = $_POST['trans_date'];
$conv_discount = (($discount/100)* $selected_balance);
$conv_balance_val = $payment - $change;

$transaction_name = $t_fname." ".$t_lname;

//insert data into database
$sql = "INSERT INTO transaction_assoc (transaction_num,Lot_ID,assoc_totalbal,assoc_selectedBal,assoc_payment,assoc_change,assoc_remaining_bal,assoc_penalty,assoc_discount,assoc_remarks, balance_val) 
        VALUES ('$trans_num','$property','$total_balance','$selected_balance', '$payment','$change','$remaining_balance','$interest','$conv_discount', '$remarks','$conv_balance_val');
        INSERT INTO all_transaction (transaction_num,transaction_name,Category,transaction_email,confirmed_by) 
        VALUES ('$trans_num','$transaction_name','Association Dues','$t_email','$admin_confirmed')";

        $message    = "Dear '.$transaction_name.', <br>
                        We hope this email finds you in good health and high spirits. This is to confirm that we have received your payment for your Association Dues with Transaction Number '.$trans_num.' on '.$trans_date.'. We acknowledge your payment with gratitude and we would like to take this opportunity to thank you for your timely payment.<br>
                        We would also like to remind you that your prompt payment is important to our subdivision and is greatly appreciated. Your payment will be used to maintain and improve the facilities of the subdivision and to provide better services to all homeowners.<br>
                        Please find below the details of your payment:
                        Homeowner Name: '.$transaction_name.'<br>
                        Block and Lot Number: '.$property.'<br>
                        Association Balance: '.$total_balance.'<br>
                        Penalty: '.$interest.'<br>
                        Discount: ('.$discount.'%) - '.$conv_discount.'<br>
                        Payment '.$payment.'<br>
                        Change: '.$change.'<br>
                        Remaining Balance: '.$remaining_balance.'<br>
                        If you have any questions or concerns, please do not hesitate to contact us. We are always available to assist you.<br>
                        Thank you again for your payment and your continued support.<br>
                        Best regards,<br>
                        '.$admin_confirmed.'<br>
                        Laguna Hills Subdivision ";
        $email      = $t_email;
        $subject    = "<b>Payment Confirmation of Association Dues</b>";

        sendEmail($email, $subject, $message );

        
if(mysqli_multi_query($con, $sql)){
    echo'<div class="alert alert-success alert-dismissible fade show  w-100 text-center" role="alert">
    Successfully recorded transaction.
    <button type="button" class="btn-close close_alert_assoc" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();  
} else {
 echo'<div class="alert alert-danger alert-dismissible fade show  w-100 text-center" role="alert">
 Error: Transaction unsuccessful. Please try again.
             <button type="button" class="btn-close close_alert_assoc" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                exit();
}
}