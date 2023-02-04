<?php
// require_once('connection.php'); 
// //require_once('functions.php'); 
// //AssignLotsOwners();
//         $LUsername = $_POST['LotUsername'];  
//         $LProperty = $_POST['LotProperty'];
//         $LOwnership = $_POST['OwnerType'];
       
//         if(empty($LProperty)) {
//             echo 'Please select a property';}
//             else{
                
//         $query = "insert into assigned_lot (lot_id,owner_username,ownership) 
//         values ('$LProperty','$LUsername','$LOwnership')";
        
//         $result = mysqli_query($con,$query);
//         if($result){
//             echo'Successfully assigned property';
//         }}
?>
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
                $check_query = "SELECT * FROM assigned_lot WHERE lot_id = '$LProperty' AND owner_username = '$LUsername'";
                $check_result = mysqli_query($con, $check_query);
                if(mysqli_num_rows($check_result) > 0){
                    echo 'This property is already assigned to this user';
                } else {
        $query = "insert into assigned_lot (lot_id,owner_username,ownership) 
        values ('$LProperty','$LUsername','$LOwnership')";
        
        $result = mysqli_query($con,$query);
        if($result){
            echo'Successfully assigned property';
        }}}
?>