<?php
    include 'connection.php';
    
    //get the id parameter from the URL
    $id = $_GET["id"];
    
    //query the database to get the status of the selected lot
    $query = "SELECT Status FROM lot_information WHERE Lot_ID = '$id'";
    $result = mysqli_query($con, $query);
    
    //check for query error
    if(!$result) {
        die("Query failed: " . mysqli_error($con));
    }
    
    //fetch the result as an associative array
    $data = mysqli_fetch_assoc($result);
    
    //return the data as a JSON object
    echo json_encode($data);
    
    //close the connection
    mysqli_close($con);
?>
