<?php
session_start();
require_once('connection.php');

$UserName = $_POST['EU'];
$Password = $_POST['PASS'];

if(empty($UserName)||empty($Password)){
    echo 'Please fill in the blanks';
}
else{
    $owner_query = "select * from owner_accounts where  owner_email = '".$UserName."' or owner_username = '".$UserName."'";
    $admin_query = "select * from admin_accounts where  admin_email = '".$UserName."' or admin_username = '".$UserName."'";
    $owner_result = mysqli_query($con,$owner_query);
    $admin_result = mysqli_query($con,$admin_query);

    if($row=mysqli_fetch_assoc($owner_result)){
        $HashPass = password_verify($Password,$row['owner_password']);
        if($HashPass==false)
        {
            echo 'Invalid Password';
        }
        else if($HashPass==true)
        {
             
            $_SESSION['owner_I_D']=$row['owner_id'];
            $_SESSION['owner_fName']=$row['owner_fname'];
            $_SESSION['owner_lName']=$row['owner_lname'];
            $_SESSION['owner_username']=$row['owner_username'];
            $_SESSION['owner_email']=$row['owner_email'];
            $_SESSION['owner_password']=$row['owner_password'];
           // echo"<script>remove(#login-message);</script>";
            //header("location: ../homeowneraccountconnect.php?Welcome");
            
           echo "<script>window.location.replace('homeowneraccountconnect.php?Welcome');</script>"; 
            exit();

        }
    }else  if($row=mysqli_fetch_assoc($admin_result)){
        $HashPass = password_verify($Password,$row['admin_password']);

        if($HashPass==false)
        {
            echo 'Invalid Password';
        }
        else if($HashPass==true)
            {
              
                $_SESSION['admin_I_D']=$row['admin_id'];
                $_SESSION['admin_fName']=$row['admin_fname'];
                $_SESSION['admin_lName']=$row['admin_lname'];
                $_SESSION['admin_username']=$row['admin_username'];
                $_SESSION['admin_email']=$row['admin_email'];
                $_SESSION['admin_password']=$row['admin_password'];
                echo "<script>window.location.replace('adminaccountconnect.php?Welcome');</script>";
                //echo"<script>remove(#login-message);</script>";
                //header("location: ../adminaccountconnect.php?Welcome");//change this to the homepage of the admin panel
                exit();
            } 
    }
    else{
        echo 'User not found';
    }

}
?>