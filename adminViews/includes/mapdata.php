<?php

include ('connection.php');


    if(isset($_POST['input'])){
        $input = $_POST['input'];
    }
    $sql= "SELECT * FROM `lot_information` WHERE Block LIKE '{$input}%'";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result) > 0){?>
    

    <?php
    }

?>