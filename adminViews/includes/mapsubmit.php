<?php
    
    include_once('connection.php');
    
    $Block = $_POST['Blockvar'];
    $Lot = $_POST['Lotvar'];
    $Street = $_POST['Streetvar'];
    $Status = $_POST['Statusvar'];
    $Area = $_POST['Areavar'];
    $Price = $_POST['Pricevar'];
    $Remarks = $_POST['Remarksvar'];
    
    $query = "INSERT INTO `lot_information`(`Block`, `Lot`, `Street`, `Status`, `Area`, `Price`, `Remarks`) 
    VALUES ('.$Block.','.$Lot.','.$Street.','.$Status.','.$Area.','.$Price.','.$Remarks.')";
    $result= mysqli_query($con,$query);

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "oh no";
    }
?>
     

