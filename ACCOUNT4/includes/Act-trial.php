<?php
require_once('connection.php');

if(isset($_POST["OwnerType"])){
    $query = "insert into assigned_lot (lot_id,owner_username,ownership) values ('". $_POST['property']."','".$_POST['ownerusername']."','".$_POST["OwnerType"]."')";
    $result=mysqli_query($con,$query);
    echo 'DATA INSERTED';

}
?>