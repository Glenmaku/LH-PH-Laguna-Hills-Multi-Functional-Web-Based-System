<?php
require_once("connection.php");
    $old_pass = $_POST["old_pass"];
    $username = $_POST["owner_username"];
    // Connect to the database
    // Prepare and execute the query to check the entered password
if(empty($old_pass)){
    echo 'Please enter your password.';
}else{
$checkquery = "SELECT owner_password FROM owner_accounts WHERE owner_username = '$username' ";
$checkresult = mysqli_query($con,$checkquery);

if($row=mysqli_fetch_assoc($checkresult)){
    $HashPass = password_verify( $old_pass,$row['owner_password']);
    if($HashPass==false)
    {
        echo 'Invalid Password';
    }
    else if($HashPass==true){
        echo "success";}
    else{
        echo "fail";
    }
    }    
}


?>