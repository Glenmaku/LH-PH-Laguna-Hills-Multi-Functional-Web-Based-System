<?php
require_once("connection.php");
if(isset($_POST['new_pass'])){
    $newpass=$_POST['new_pass'];
    $confpass=$_POST['conf_pass'];
    $username=$_POST['owner_username'];

    if(empty($newpass) || empty($confpass)){
        echo "Both fields are required. Please try again.";
    } else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*(){}]{8,}$/', $newpass) || !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%^&*(){}]{8,}$/', $confpass)) {
        echo "The password must be at least 8 characters and contain at least 2 numbers. Please try again.";
    } else if($newpass != $confpass){
        echo "Passwords do not match. Please try again.";
    }else{
    $hashed_password = password_hash($newpass, PASSWORD_DEFAULT);
    $oe_query = "UPDATE owner_accounts SET owner_password='$hashed_password' WHERE owner_username='$username' ";
    $oe_result = mysqli_query($con, $oe_query);
    if($oe_result){
        echo "success";
  
    }else{
        echo "An error occurred. Please try again later.";
    }
}

}

?>
