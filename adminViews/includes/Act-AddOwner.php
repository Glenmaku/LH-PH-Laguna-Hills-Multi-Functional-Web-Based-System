<?php
require_once('connection.php');
//require_once('functions.php'); 
//Insertaddownerrecord();

$OFname = $_POST['OwnerFname'];
$OLname = $_POST['OwnerLname'];
$OEmail = $_POST['OwnerEmail'];
$OUsername = $_POST['OwnerUsername'];
$OPassword = $_POST['OwnerPassword'];
if (empty($OFname) || empty($OLname) || empty($OEmail) || empty($OUsername) || empty($OPassword)) {
    echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
    All input fields are required
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
}
else{
if (!preg_match("/^[a-zA-Z -]*$/", $OFname) || !preg_match("/^[a-zA-Z -]*$/", $OLname)) {
echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
Invalid Characters
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
}
else{
    if (!filter_var($OEmail, FILTER_VALIDATE_EMAIL)) {
        echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
Invalid Email
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
    }
    else{
        $queryuser = "select * from owner_accounts where owner_username ='".$OUsername."'";
        $resultuser = mysqli_query($con, $queryuser);
        if (mysqli_fetch_assoc($resultuser)) {
            echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
            username is already taken
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
        }
        else{
            $queryemail = "select * from owner_accounts where owner_email = '".$OEmail."'";
                $resultemail = mysqli_query($con, $queryemail);
                if (mysqli_fetch_assoc($resultemail)) {
                    echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
                    email is already taken
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>';
                }
                else{
                    $Hash = password_hash($OPassword, PASSWORD_DEFAULT);
                    $ownerquery="insert into owner_accounts (owner_fname,owner_lname,owner_username,owner_email,owner_password) values ('$OFname','$OLname','$OUsername','$OEmail','$Hash')";
                    $owner_result=mysqli_query($con,$ownerquery);

                    if($owner_result){
                          echo'<div class="alert alert-success alert-dismissible fade show w-100" role="alert" >
                          User Successfully Added
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                             </div>';
                        }
                        else{
                            echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
                            Please check your query
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>';
                            }
                    }
            }

        } }
    }

?>