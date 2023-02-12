<?php
include("connection.php");

$sql = "SELECT DISTINCT category FROM transac_other";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $data = array();
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        echo json_encode($data);
    } else {
        echo "0 results";
    }

    $con->close();
?>