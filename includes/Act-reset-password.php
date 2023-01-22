<?php
require_once('connection.php');
session_start();
if(isset($_POST['newPassword'])){

    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $Email = $_POST['Email'];

    if(empty($newPassword) || empty($confirmPassword)){
        echo "Both fields are required. Please try again.";

    }else if($newPassword != $confirmPassword){
        echo "Passwords do not match. Please try again.";

    }else{

        $hashed_password = password_hash($newPassword, PASSWORD_DEFAULT);

        $oe_query = "UPDATE owner_accounts SET owner_password='$hashed_password', code='' WHERE owner_email='$Email' OR owner_username='$Email'";
        $oe_result = mysqli_query($con, $oe_query);
        $oe_update_code = "UPDATE owner_accounts SET code = '' WHERE owner_email='$Email'";
        $oe_code_query = mysqli_query($con, $oe_update_code);

        $ae_query = "UPDATE admin_accounts SET admin_password='$hashed_password', code='' WHERE admin_email='$Email' OR admin_username='$Email'";
        $ae_result = mysqli_query($con, $ae_query);
        $ae_update_code = "UPDATE admin_accounts SET code = '' WHERE admin_email='$Email'";
        $ae_code_query = mysqli_query($con, $ae_update_code);


        if($oe_result || $ae_result){
            echo "Password updated successfully";
            session_destroy();
        }else{
            echo "An error occurred. Please try again later.";
        }
}}
?>