<?php
require_once('connection.php');

//Insert owner account
function  Insertaddownerrecord(){
    global $con;

    $OFname = $_POST['OwnerFname'];
    $OLname = $_POST['OwnerLname'];
    $OEmail = $_POST['OwnerEmail'];
    $OUsername = $_POST['OwnerUsername'];
    $OPassword = $_POST['OwnerPassword'];
    if (empty($OFname) || empty($OLname) || empty($OEmail) || empty($OUsername) || empty($OPassword)) {
        echo 'All input fields are requiredss';}
    else{
    if (!preg_match("/^[a-zA-Z -]*$/", $OFname) || !preg_match("/^[a-zA-Z -]*$/", $OLname)) {
    echo 'INVALID CHARACTERS';
    }
    else{
        if (!filter_var($OEmail, FILTER_VALIDATE_EMAIL)) {
            echo'INVALID EMAIL';
        }
        else{
            $queryuser = "select * from owner_accounts where owner_username ='".$OUsername."'";
            $resultuser = mysqli_query($con, $queryuser);
            if (mysqli_fetch_assoc($resultuser)) {
                echo 'username is already taken';
            }
            else{
                $queryemail = "select * from owner_accounts where owner_email = '".$OEmail."'";
                    $resultemail = mysqli_query($con, $queryemail);
                    if (mysqli_fetch_assoc($resultemail)) {
                        echo 'email is already taken';
                    }
                    else{
                        $Hash = password_hash($OPassword, PASSWORD_DEFAULT);
                        $ownerquery="insert into owner_accounts (owner_fname,owner_lname,owner_username,owner_email,owner_password) values ('$OFname','$OLname','$OUsername','$OEmail','$Hash')";
                        $owner_result=mysqli_query($con,$ownerquery);

                        if($owner_result){
                              echo 'User Successfully Added';
                            }
                            else{
                                 echo 'Please check your query';
                                }
                        }
                }

            } }
        }
}

//Assign Lot owners
function AssignLotsOwners(){
   
        global $con;

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
}

//display the table
//function DisplayOwnerTableRecord(){
    //global $con;
     //  $value = "";
      //  $value = '<table class="table">
                  //  <tr>
                    //    <td> Owner ID </td>
                     //  <td> First Name </td>
                    //    <td> Last Name</td>
                    //    <td> Username</td>
                    //    <td> Email Address</td>
                   //     <td> Date Added</td>
                  //      <td> View </td>
                  //      <td> Edit </td>
                 //       <td> Delete </td>
                //    </tr>';
      //  $query = "select * from owner_accounts ";
      //  $result = mysqli_query($con,$query);
        
       // while($row=mysqli_fetch_assoc($result))
      //  {
           // $value.= ' <tr>
                            //<td> '.$row['owner_id'].' </td>
                          //  <td> '.$row['owner_fname'].' </td>
                          //  <td> '.$row['owner_lname'].'</td>
                          //  <td> '.$row['owner_username'].'</td>
                         //   <td> '.$row['owner_email'].'</td>
                         //   <td> '.$row['owner_date_added'].'</td>
                            
                        //    <td> <button data-bs-toggle="modal" data-bs-target="#viewOwnerModal" id="btn_view_owner_acc" class="btn_view_owner_acc" name="view_button" data-id='.$row['owner_id'].'>VIEW</button> </td><!--VIEW-EYE ICON--> </td>

                         //   <td> <button  data-bs-toggle="modal" data-bs-target="#updateOwnerModal" id="btn_edit_owner_acc" class="btn_edit_owner_acc" name="edit_button" data-id1='.$row['owner_id'].'>EDIT</button> </td>

                        //    <td> <button  data-bs-toggle="modal" data-bs-target="#deleteOwnerModal" id="btn_delete_owner_acc" class="btn_delete_owner_acc" name="delete_button" data-id2='.$row['owner_id'].'>DELETE</button> </td>

                    //   </tr>';
       // }
       // $value.='</table>';
   //     echo json_encode(['status'=>'success','html'=>$value]);
//}

//view owner information

//AQUIRE OWNER RECORDS FIRST BEFORE EDIT
//function GetOwnerRecord(){
  //  global $con;
       // $UpdateID = $_POST['UpdateOwner'];
      //  $updatequery = "select * from owner_accounts where owner_id='".$UpdateID."'";
      //  $updateresult = mysqli_query($con,$updatequery);
       // while($row=mysqli_fetch_assoc($updateresult))
      //  {
          //  $User_data = "";
          //  $User_data[0]=$row['owner_id']; 
           // $User_data[1]=$row['owner_fname'];
           // $User_data[2]=$row['owner_lname']; 
          //  $User_data[3]=$row['owner_username'];
          //  $User_data[4]=$row['owner_email'];
       // }
       // echo json_encode($User_data);
//}
//edit owner records

//delete owner account
function DeleteOwnerRecord(){
    global $con;
    $Del_Id = $_POST['DeleteOwner'];
    $deletequery = "delete from owner_accounts where owner_id = '$Del_Id' ";
    $deleteresult = mysqli_query($con,$deletequery);

    if($deleteresult)
    {
        echo ' Your Record Has Been Delete ';
    }
    else
    {
        echo ' Please Check Your Query ';
    }
}



?>