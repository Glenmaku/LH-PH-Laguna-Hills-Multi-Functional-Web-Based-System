<?php
require_once('connection.php'); 
//require_once('functions.php'); 
//AssignLotsOwners();
        $LUsername = $_POST['LotUsername'];  
        $LProperty = $_POST['LotProperty'];
        $LOwnership = $_POST['OwnerType'];
       
        if(empty($LProperty)) {
            echo 'Please select a property';}
            else{
                
        $query = "insert into assigned_lot (lot_id,owner_username,ownership) 
        values ('$LProperty','$LUsername','$LOwnership')";
        
        $result = mysqli_query($con,$query);
        if($result){
            echo'Successfully assigned property';
        }}
?>
