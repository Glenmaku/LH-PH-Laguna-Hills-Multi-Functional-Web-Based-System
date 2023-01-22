<?php
require_once('connection.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['VerifyEmail'];
    $code = $_POST['VerifyCode'];

//OWNER EMAIL VERIFY
    $verify="SELECT * FROM owner_accounts WHERE owner_email='$email' AND code='$code'";
    $code_result=mysqli_query($con,$verify);

//OWNER USERNAME VERIFY
    $uverify="SELECT * FROM owner_accounts WHERE owner_username='$email' AND code='$code'";
    $ucode_result=mysqli_query($con,$uverify);

//ADMIN EMAIL VERIFY
    $admin_verify = "SELECT * FROM admin_accounts WHERE admin_email='$email' AND code='$code'";
    $admin_code_result=mysqli_query($con,$admin_verify);
    
// ADMIN USERNAME VERIFY
    $uadmin_verify = "SELECT * FROM admin_accounts WHERE admin_username='$email' AND code='$code'";
    $uadmin_code_result=mysqli_query($con,$uadmin_verify);


     if(mysqli_num_rows($code_result)===1){
        $row = mysqli_fetch_assoc($code_result);
        $_SESSION['email']=$row['owner_email'];
        $_SESSION['username']=$row['owner_username'];
        echo "Verification successful. Please wait while you are redirected to a page where you can change your password.";
        echo "<script>window.open('reset-password.php?reset');</script>"; 
        exit();
    }
    else  if(mysqli_num_rows($ucode_result)===1){
        $row = mysqli_fetch_assoc($ucode_result);
        $_SESSION['email']=$row['owner_email'];
        $_SESSION['username']=$row['owner_username'];
        echo "Verification successful. Please wait while you are redirected to a page where you can change your password.";
        echo "<script>window.open('reset-password.php?reset');</script>"; 
        exit();
    }
    else if(mysqli_num_rows($admin_code_result)===1){
        $row = mysqli_fetch_assoc($admin_code_result);
        $_SESSION['email']=$row['admin_email'];
        $_SESSION['username']=$row['admin_username'];
        echo "Verification successful. Please wait while you are redirected to a page where you can change your password.";
        echo "<script>window.open('reset-password.php?reset');</script>"; 
        exit();
    } 
    else if(mysqli_num_rows($uadmin_code_result)===1){
        $row = mysqli_fetch_assoc($uadmin_code_result);
        $_SESSION['email']=$row['admin_email'];
        $_SESSION['username']=$row['admin_username'];
        echo "Verification successful. Please wait while you are redirected to a page where you can change your password.";
        echo "<script>window.open('reset-password.php?reset');</script>"; 
        exit();
    }


    else{
       echo "You've entered incorrect code!";
    }
} 

else {
    die("Direct access not allowed.");
}
?>