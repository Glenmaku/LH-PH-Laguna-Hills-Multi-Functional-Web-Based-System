<?php
    

if(isset($_POST['assignlot_button'])){
require_once('connection.php');
    $query = "insert into assigned_lot (lot_id,owner_username,ownership) values ('".$_POST['AssignLot']."','".$_POST['Usernameid']."','".$_POST['OwnerType']."')";
    
    $results=mysqli_query($con,$query);
   
    if($results)
    {
        echo ' Your Record Has Been Saved in the Database';
    }
    else
    {
        echo ' Please Check Your Query ';
    }
} 
?>