<?php

require_once('connection.php');

extract($_POST);
if(isset($_POST['blockSend']) && isset($_POST['lotSend']) && isset($_POST['streetSend']) && isset($_POST['statusSend']) 
&& isset($_POST['areaSend']) && isset($_POST['priceSend']) && isset($_POST['remarksSend']))

    $sql= "UPDATE `lot_information` SET `block`='[]', `lot`='[]', `street`='[]', `status`='[]', `area`='[]', `price`='[]', `remarks`='[]',";

    $result=mysqli_query($con,$sql);

?>