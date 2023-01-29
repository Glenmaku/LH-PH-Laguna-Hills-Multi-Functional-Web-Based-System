<?php

// include('connection.php');

// // if (isset($_POST['mapOwnerSend'])) {
// //      $sql = "SELECT assigned_lot.lot_id, assigned_lot.owner_username, assigned_lot.ownership, owner_accounts.owner_fname, owner_accounts.owner_lname FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username ";
// //     $result = mysqli_query($con, $sql);
// //     while ($row = mysqli_fetch_assoc($result)) {
// //         $Lot_ID = $row['lot_id'];
// //         $OUsername = $row['owner_username'];
// //         $name = $row['owner_fname'];
// //         $lname = $row['owner_lname'];
// //         $ownership = $row['ownership'];
// //     $table= '
// //                         <div class="panel-content">
// //                         <h3>OWNER INFORMATION</h3>
// //                         <table class="table" text-center>
// //                         <thead>
// //                             <tr>
// //                                 <th scope="col">Name</th>
// //                                 <th scope="col">Username</th>   
// //                                 <th scope="col">Ownership</th>
// //                             </tr>
// //                         </thead><tbody class="fs-6">';
// //     $table.= '<tr>
// //                         <td scope="row">'.$name.' '. $lname .'</td>
// //                         <td>'.$OUsername.'</td>
// //                         <td>'.$Lot_ID.'</td>
// //                         <td>'.$ownership.'</td>
// //                     </tr>';

// //     $table .= '<tbody></table></div>';
// //       }echo $table;
// // }WHERE assigned_lot.lot_id = $id


// if(isset($_POST['mapOwnerSend'])) {
//      $sql = "SELECT assigned_lot.lot_id, assigned_lot.owner_username, assigned_lot.ownership, owner_accounts.owner_fname, owner_accounts.owner_lname FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username where assigned_lot.lot_id = ''";
//     $result = mysqli_query($con, $sql);
//     $table = '';
//     while ($row = mysqli_fetch_assoc($result)) {
//         $Lot_ID = $row['lot_id'];
//         $OUsername = $row['owner_username'];
//         $fname = $row['owner_fname'];
//         $lname = $row['owner_lname'];
//         $ownership = $row['ownership'];

//     $table = '          <input name="ownergets" id="ownergets" value="'.$Lot_ID.'" readonly>
//                         <input name="ownergets" id="ownershipfname" value="'.$fname.'" readonly>
   
//                         <div class="panel-content" >
//                         <h3>OWNER INFORMATION</h3>
//                         <table class="table text-center"id="ownership-table" >
//                         <thead>
//                             <tr>
//                                 <th scope="col">Name</th>
//                                 <th scope="col">Username</th>   
//                                 <th scope="col">Ownership</th>
//                             </tr>
//                         </thead><tbody class="fs-6">';
//     $table.= '        <tr>
//                         <td scope="row">'.$fname.' '.$lname.'</td>
//                         <td id="">'.$OUsername.'</td>
//                         <td id="ownergets">'.$Lot_ID.'</td>
//                         <td id="ownerships">'.$ownership.'</td>
//                       </tr>'; 

//     $table .= '<tbody></table></div>';echo $table;
//       }
// }
?>
<?php
include('connection.php');

if(isset($_POST['mapOwnerSend'])) {
$Lot_ID= $_POST["id"];
    $sql = "SELECT assigned_lot.lot_id, assigned_lot.owner_username, assigned_lot.ownership, owner_accounts.owner_fname, owner_accounts.owner_lname FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username where assigned_lot.lot_id = '$Lot_ID'";
    $result = mysqli_query($con, $sql);
    $table = '';
    if(mysqli_num_rows($result)>0){
    $table = '          
                        <div class="panel-content" id="panel">
                    
                        <table class="table text-center"id="ownership-table" >

                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                       
                                <th scope="col">Ownership</th>
                            </tr>
                        </thead><tbody class="fs-6">';
    while ($row = mysqli_fetch_assoc($result)) {
                        $Lot_ID     = $row['lot_id'];
                        $OUsername  = $row['owner_username'];
                        $fname      = $row['owner_fname'];
                        $lname      = $row['owner_lname'];
                        $ownership  = $row['ownership'];

    $table.= '       
     <tr >              

                        <td scope="row">'.$fname.' '.$lname.'</td>
                 
                        <td>'.$ownership.'</td>
                      </tr>'; 
                      
    }
    $table .= '</tbody></table></div>';
    echo $table;
    }else{
        echo "No Results Found";
    }
}
?>
<?php
// include('connection.php');
// if(isset($_POST['mapOwnerSend'])){
//    $domo = $_POST['lot_id'];
//     $sql = "SELECT *  FROM assigned_lot JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username where assigned_lot.lot_id = '$domo'";
//     $result = mysqli_query($con, $sql);
//     $table = array();
//     if(mysqli_num_rows($result)>0){
//     while ($row = mysqli_fetch_assoc($result)) {
//                         $Lot_ID     = $row['assigned_lot.lot_id'];
//                         $OUsername  = $row['owner_username'];
//                         $fname      = $row['owner_fname'];
//                         $lname      = $row['owner_lname'];
//                         $ownership  = $row['ownership'];
//         $table[] = array("Name"=>$fname,"Username"=>$OUsername,"Ownership"=>$Lot_ID,"Ownership_status"=>$ownership);
//     }
//     echo json_encode($table);
//     }else{
//         echo "No Results Found";
//     }
 
// }

?>



