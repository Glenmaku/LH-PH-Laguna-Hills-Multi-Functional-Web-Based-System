<?php
include ('connection.php');
if(isset($_POST['Lot_ID'])){

    $Lot_ID = $_POST['Lot_ID'];
    $Block = $_POST['Block'];
    $Lot = $_POST['Lot'];
    $Street = $_POST['Street'];
    $Status = $_POST['Status'];
    $Area = $_POST['Area'];
    $Price = $_POST['Price'];
    $Remarks = $_POST['Remarks'];
    
    $sql = "UPDATE `lot_information` SET `Block`='$Block',`Lot`='$Lot',`Street`='$Street',`Status`='$Status',`Area`='$Area',`Price`='$Price',`Remarks`='$Remarks' WHERE `Lot_ID`='$Lot_ID'";
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