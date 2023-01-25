<?php
require_once("connection.php");
    // Get Lot_ID from association_dues table
    $query = "SELECT Lot_ID FROM association_dues";
    $result = mysqli_query($con, $query);
    $lot_ids = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Loop through each Lot_ID
    foreach ($lot_ids as $lot_id) {
        // Get the sum of all assoc_payment from transaction_assoc table with the same Lot_ID as association_dues
        $query = "SELECT SUM(assoc_payment) FROM transaction_assoc WHERE Lot_ID = '$lot_id[Lot_ID]'";
        $result = mysqli_query($con, $query);
        $total_payment = mysqli_fetch_array($result)[0];

        // Get the sum of all assoc_change from transaction_assoc table with the same Lot_ID as association_dues
        $query = "SELECT SUM(assoc_change) FROM transaction_assoc WHERE Lot_ID = '$lot_id[Lot_ID]'";
        $result = mysqli_query($con, $query);
        $total_change = mysqli_fetch_array($result)[0];

        // Get the sum of all assoc_discount from transaction_assoc table with the same Lot_ID as association_dues
        $query = "SELECT SUM(assoc_discount) FROM transaction_assoc WHERE Lot_ID = '$lot_id[Lot_ID]'";
        $result = mysqli_query($con, $query);
        $total_discount = mysqli_fetch_array($result)[0];

        // Get the sum of all assoc_penalty from transaction_assoc table with the same Lot_ID as association_dues
        $query = "SELECT SUM(assoc_penalty) FROM transaction_assoc WHERE Lot_ID = '$lot_id[Lot_ID]'";
        $result = mysqli_query($con, $query);
        $total_penalty = mysqli_fetch_array($result)[0];

        // Update total_payment, total_change, total_discount, and total_penalty columns in association_dues table
        $query = "UPDATE association_dues SET total_payment = '$total_payment', total_change = '$total_change', total_discount = '$total_discount', total_penalty = '$total_penalty' WHERE Lot_ID = '$lot_id[Lot_ID]'";
        mysqli_query($con, $query);
    }

    // Close connection
    mysqli_close($con);
?>