<?php

require_once('connection.php');

extract($_POST);
if(isset($_POST['blockSend']) && isset($_POST['lotSend']) && isset($_POST['streetSend']) && isset($_POST['statusSend']) 
&& isset($_POST['areaSend']) && isset($_POST['priceSend']) && isset($_POST['remarksSend']))

    $sql= "INSERT into `lot_information` (Block, Lot, Street, Status, Area, Price, Remarks) values ('$blockSend','$lotkSend','$streetSend',
    '$statusSend','$areaSend','$priceSend','$remarksSend')";

    $result=mysqli_query($con,$sql);

?>