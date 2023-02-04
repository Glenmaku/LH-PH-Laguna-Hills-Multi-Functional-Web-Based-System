<?php
// include ('connection.php');
// if(isset($_POST['Lot_ID'])){

//     $Lot_ID = $_POST['Lot_ID'];
//     $MontlyDues = $_POST['Monthly_Dues'];
//     $YearlyDues = $_POST['Yearly_Dues'];
//     $DuesStatus = $_POST['Dues_Status'];
//     $DateAssigned = $_POST['Date_Assigned'];
//     $Remarks = $_POST['Remarks'];

    
//     $sql = "UPDATE `association_dues` SET `Monthly_Dues`='$MontlyDues',`Yearly_Dues`='$YearlyDues',`DueRemarks`='$Remarks',`date_assigned`='$DateAssigned' WHERE `Lot_ID`='$Lot_ID'";
//     $result = mysqli_query($con, $sql);
    
//     if($result){
//         echo "Data has been updated successfully!";
//     }else{
//         echo "Error: There was an error updating the data";
//     }
// }

// else{
//     echo "Error: No data to update";
//     mysqli_close($con);
// }
?>
<?php
require_once('connection.php');

$current_date = date("Y-m-d");

if(isset($_POST['Lot_ID'])){

    $Lot_ID = $_POST['Lot_ID'];
    $MontlyDues = $_POST['Monthly_Dues'];
    $YearlyDues = $_POST['Yearly_Dues'];
    $DuesStatus = $_POST['Dues_Status'];
    $DateAssigned = $_POST['Date_Assigned'];
    $Remarks = $_POST['Remarks'];

    $month_count = floor((strtotime($current_date) - strtotime($DateAssigned))/(60*60*24*30));
    $total_assocdues = $month_count * $MontlyDues;

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

        $assoc_balance =(( ($total_payment + $total_discount) - $total_change) - $total_penalty);

        $balance = $total_assocdues - $assoc_balance;

        if($balance === 0 || $balance === 0.00) {
            $status = "updated";    
        } else if($balance > 0) {
            $status = "outdated";
        } else if($balance < 0){
            $status = "advanced";
        }
    }

    $sql = "UPDATE association_dues SET Monthly_Dues = '$MontlyDues', Yearly_Dues = '$YearlyDues', DueRemarks = '$Remarks', date_assigned = '$DateAssigned', month_count = '$month_count', total_assocdues = '$total_assocdues', Balance = '$balance', Dues_Status = '$status', assoc_balance = '$assoc_balance' WHERE Lot_ID = '$Lot_ID'";
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo "Data has been updated successfully!";
    }else{
        echo "Error: There was an error updating the data";
    }
}

else{
    echo "Error: No data to update";
    mysqli_close($con);
}
?>