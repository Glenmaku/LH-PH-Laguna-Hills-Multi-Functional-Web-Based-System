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




