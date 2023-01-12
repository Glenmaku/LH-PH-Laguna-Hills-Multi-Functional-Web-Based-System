<?php

include ('connection.php');



    $sql= "UPDATE `lot_information` SET `block`='[]',`lot`='[]',`street`='[]',
    `status`='[]',`area`='[]',`price`='[]',`remarks`='[]' WHERE 1";

    $result=mysqli_query($con,$sql);

?>