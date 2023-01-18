<?php
//require_once('functions.php'); 
//DisplayOwnerTableRecord();
    include 'connection.php';

    if(isset($_POST['displayOwnerSend'])){
        $owneraccountTable= '<table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Date Added</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>';

        $ownersql = "SELECT * FROM `owner_accounts`";
        $ownerresult = mysqli_query($con, $ownersql);
        while($row = mysqli_fetch_assoc($ownerresult)){

            $Ownerid = $row['owner_id'];
            $Ownerfname = $row['owner_fname'];
            $Ownerlname = $row['owner_lname'];
            $Ownerusername = $row['owner_username'];
            $Owneremail =$row['owner_email'];
            $OwnerDate =$row['owner_date_added'];
            $owneraccountTable.= '<tr>
            <td scope="row">'.$Ownerid.'</td>
            <td>'. $Ownerfname.'</td>
            <td>'. $Ownerlname.'</td>
            <td>'. $Ownerusername.'</td>
            <td>'. $Owneremail.'</td>
            <td>'. $OwnerDate.'</td>
            <td><button id="btn_view_owner_acc" class="btn_view_owner_acc" name="view_button" 
            onclick="get_owner_info('.$Ownerid.')"  >VIEW</button> </td><!--VIEW-EYE ICON-->

            <td> <button  id="btn_edit_owner_acc" class="btn_edit_owner_acc" name="edit_button" onclick="get_owner_record('.$Ownerid.')" >EDIT</button> </td>

            <td> <button  data-bs-toggle="modal" data-bs-target="#deleteOwnerModal" id="btn_delete_owner_acc" class="btn_delete_owner_acc" name="delete_button" data-id2='.$row['owner_id'].'>DELETE</button> </td>

          </tr>';
        }
        $owneraccountTable.='</table>';
        echo  $owneraccountTable;
    }


?>

