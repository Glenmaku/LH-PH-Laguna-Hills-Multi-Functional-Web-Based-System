<?php
require("connection.php");
require("../phpmailer/transac_functions_assoc.php");

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
                $message = "<p>Dear <strong>$transaction_name</strong>,</p>
                <p>We hope this email finds you in good health and high spirits. This is to confirm that we have received your payment for your Association Dues with Transaction Number <strong>$trans_num</strong> on <strong>$trans_date</strong>. We acknowledge your payment with gratitude and we would like to take this opportunity to thank you for your timely payment.</p>
                <p>We would also like to remind you that your prompt payment is important to our subdivision and is greatly appreciated. Your payment will be used to maintain and improve the facilities of the subdivision and to provide better services to all homeowners.</p>

                <strong>Please find below the details of your payment:</strong><br><br>
                <table style='border-collapse: collapse; margin-left:50px;'>

                    <tr>
                        <td style=' padding: 2px; border: 1px solid transparent;'>Homeowner Name:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>$transaction_name</strong></td>
                    </tr>
                    <tr>
                        <td style='padding: 2px; border: 1px solid transparent;'>Block and Lot Number:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>$property</strong></td>
                    </tr>
                    <tr>
                        <td style='padding: 2px; border: 1px solid transparent;'>Association Balance:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $total_balance</strong></td>
                    </tr>
                    <tr>
                        <td style='padding: 2px; border: 1px solid transparent;'>Penalty:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $interest</strong></td>
                    </tr>
                    <tr>
                        <td style='padding: 2px; border: 1px solid transparent;'>Discount:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>($discount%) - Php $conv_discount</strong></td>
                    </tr>
                    <tr>
                        <td style='padding: 2px; border: 1px solid transparent;'>Payment:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $payment</strong></td>
                    </tr>
                    <tr>
                        <td style='padding: 2px; border: 1px solid transparent;'>Change:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $change</strong></td>
                    </tr>
                    <tr>
                        <td style='padding: 2px; border: 1px solid transparent;'>Remaining Balance:</td>
                        <td style='padding: 2px; border: 1px solid transparent;'><strong>Php $remaining_balance</strong></td>
                    </tr>
                </table>
                <p>If you have any questions or concerns, please do not hesitate to contact us. We are always available to assist you.</p>
                <p>Thank you again for your payment and your continued support.</p>
                <p>Best regards,<br>
                <strong>$admin_confirmed<br>
                Laguna Hills Subdivision</strong></p>";
$email      = $t_email;
$subject    = "Payment Confirmation of Association Dues";

sendEmail($email, $subject, $message );
?>