<?php include ('connection.php');

if(isset($_POST['ownerusername'])){
    //$ownerid = $_POST['ownerid'];
    $ownerusername = $_POST['ownerusername'];
            
           $ownersql= "select * from owner_accounts where owner_username ='".$ownerusername."'";
            //$ownersql="SELECT owner_accounts.owner_id,owner_accounts.owner_fname,owner_accounts.owner_lname, owner_accounts.owner_username, owner_accounts.owner_email, owner_information.owner_gender,owner_information.owner_birthdate,owner_information.owner_mobile,owner_information.owner_telephone,owner_information.owner_address FROM `owner_accounts`,`owner_information` WHERE (owner_accounts.owner_username = owner_information.owner_username AND owner_accounts.owner_username ='".$ownerusername."')";
            
            $ownerresult = mysqli_query($con, $ownersql);
            $ownerresponse = array();

            while($row = mysqli_fetch_assoc($ownerresult)){
                $ownerresponse = $row;
            }
        
            echo json_encode($ownerresponse);
    
    }

    else{
        $ownerresponse['status']=200;
        $ownerresponse['message']="Invalid or data not found";
    }
 

      // A query to update the data to database
    if(isset($_POST['owner_username'])){
        $owner_id           = $_POST['ownerview_id'];
        $owner_username     = $_POST['owner_username'];
        $owner_fname        = $_POST['owner_fname'];
        $owner_lname        = $_POST['owner_lname'];
        $owner_email        = $_POST['owner_email'];
        $owner_gender       = $_POST['owner_gender'];
        $owner_birthdate    = $_POST['owner_birthdate'];
        $owner_cpnum        = $_POST['owner_cpnum'];
        $owner_telnum       = $_POST['owner_telnum'];
        $owner_add          = $_POST['owner_add'];

//$querytop="select * from owner_accounts where owner_username = '$owner_username'";
//$resulttop=mysqli_query($con,$querytop);
 //if(mysqli_num_rows($resulttop)==0){
    //$query_info1="INSERT INTO owner_information(owner_username, owner_fname, owner_lname, owner_gender, owner_birthdate, owner_email, owner_mobile, owner_telephone, owner_address) VALUES ('$owner_username','$owner_fname','$owner_lname','$owner_gender',' $owner_birthdate',' $owner_email',' $owner_cpnum',' $owner_telnum',' $owner_add')"; 
    // $result_info1=mysqli_query($con,$query_info1);
//}
   //else{
   // $query_info2="UPDATE owner_information SET owner_fname='$owner_fname',owner_lname='$owner_lname',owner_gender='$owner_gender',owner_birthdate='$owner_birthdate',owner_email='$owner_email',owner_mobile='$owner_cpnum',owner_telephone='$owner_telnum',owner_address='$owner_add'where owner_username = '$owner_username'";
    //    $result_info2=mysqli_query($con,$query_info2);
                        
   // }
                
        if(empty($owner_fname)||empty($owner_lname)||empty($owner_email)){
            echo 'Fill all the blanks';
        }
        else{
            if (!preg_match("/^[a-zA-Z -]*$/",  $owner_fname) || !preg_match("/^[a-zA-Z -]*$/",  $owner_lname)) {
                echo 'Invalid Characters';
                }
            else{
                 if (!filter_var($owner_email, FILTER_VALIDATE_EMAIL)) {
                echo 'Invalid Email';
                    }
                else{
                    $ownersql ="UPDATE `owner_accounts` SET owner_fname = '$owner_fname', owner_lname = '$owner_lname', owner_gender='$owner_gender',owner_birthdate='$owner_birthdate',owner_email='$owner_email',owner_mobile='$owner_cpnum',owner_telephone='$owner_telnum',owner_address='$owner_add'where owner_username = '$owner_username'";
                    
                    $ownerresult = mysqli_query($con, $ownersql);

                    echo 'Successfully updated user information';

                    }
                    }
                }
            }
    
?>
