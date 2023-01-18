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
    echo 'All input fields are required';}
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

?>