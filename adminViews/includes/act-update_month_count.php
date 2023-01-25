<?php
require_once('connection.php');

$current_date = date("Y-m-d");

$query = "SELECT Lot_ID, date_assigned, Monthly_Dues, total_payment, total_change, total_discount, total_penalty, assoc_balance FROM association_dues";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $transaction_id = $row['Lot_ID'];
    $date_assigned = $row['date_assigned'];
    $monthly_dues = $row['Monthly_Dues'];
    $total_payment = $row['total_payment'];
    $total_change = $row['total_change'];
    $total_discount = $row['total_discount'];
    $total_penalty = $row['total_penalty'];
    $assoc_balance = $row['assoc_balance'];
    if($date_assigned == "0000-00-00" || $date_assigned == ""){
        $month_count = 0;
        $total_assocdues = 0;
        $balance = 0;
        $status = "N/A";
    }else {
        $month_count = floor((strtotime($current_date) - strtotime($date_assigned))/(60*60*24*30));
        $total_assocdues = $month_count * $monthly_dues;
        
        $assoc_balance =(( ($total_payment + $total_discount)-$total_change)-$total_penalty);


        $balance = $total_assocdues - $assoc_balance;
        if($balance === 0||$balance === 0.00) {
            $status = "updated";    
        } else if($balance > 0) {
            $status = "outdated";
        } else if($balance<0){
            $status = "advanced";
        }
    }

    $update_query = "UPDATE association_dues SET month_count = '$month_count', total_assocdues = '$total_assocdues', Balance = '$balance', Dues_Status = '$status', assoc_balance = '$assoc_balance ' WHERE Lot_ID = '$transaction_id'";
    mysqli_query($con, $update_query);

}

mysqli_close($con);
?>