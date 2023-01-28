<?php
include ('connection.php');
if(isset($_POST['Lot_ID'])){

    $Lot_ID = $_POST['Lot_ID'];
    $MontlyDues = $_POST['Monthly_Dues'];
    $YearlyDues = $_POST['Yearly_Dues'];
    $DuesStatus = $_POST['Dues_Status'];
    $DateAssigned = $_POST['Date_Assigned'];
    $Remarks = $_POST['Remarks'];

    
    $sql = "UPDATE `association_dues` SET `Monthly_Dues`='$MontlyDues',`Yearly_Dues`='$YearlyDues',`DueRemarks`='$Remarks',`date_assigned`='$DateAssigned' WHERE `Lot_ID`='$Lot_ID'";
    $result = mysqli_query($con, $sql);
    
    if($result){
        echo "Data has been updated successfully!";
    }else{
        echo "Error: There was an error updating the data";
    }
}
else{
    echo "'Error: No data to update";
    mysqli_close($con);
}
?>