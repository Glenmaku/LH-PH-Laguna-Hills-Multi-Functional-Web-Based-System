<?php

    include_once('connection.php');
    $stmt = $con->prepare("INSERT INTO `lot_information` (Block, Lot, Street, Status, Area, Price, Remarks) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $Block, $Lot, $Street, $Status, $Area, $Price, $Remarks);
    
    $Block = $_POST['Blockvar'];
    $Lot = $_POST['Lotvar'];
    $Street = $_POST['Streetvar'];
    $Status = $_POST['Statusvar'];
    $Area = $_POST['Areavar'];
    $Price = $_POST['Pricevar'];
    $Remarks = $_POST['Remarksvar'];
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }


?>
