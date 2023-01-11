<?php

include ('connection.php');

extract($_POST);
if(isset($_POST['blockSend']) && isset($_POST['lotSend']) && isset($_POST['streetSend']) && isset($_POST['statusSend']) 
&& isset($_POST['areaSend']) && isset($_POST['priceSend']) && isset($_POST['remarksSend']))

    $sql= "UPDATE into `lot_information` (block, lot, street, status, area, price, remarks) values ('$blockSend','$lotkSend','$streetSend',
    '$statusSend','$areaSend','$priceSend','$remarksSend')";

    $result=mysqli_query($con,$sql);

?>