<?php
require_once("connection.php");
    $old_pass = $_POST["old_pass"];
    $username = $_POST["admin_username"];
    // Connect to the database
    // Prepare and execute the query to check the entered password
if(empty($old_pass)){
    echo 'Please enter your password.';
}else{
$checkquery = "SELECT admin_password FROM admin_accounts WHERE admin_username = '$username' ";
$checkresult = mysqli_query($con,$checkquery);

if($row=mysqli_fetch_assoc($checkresult)){
    $HashPass = password_verify( $old_pass,$row['admin_password']);
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