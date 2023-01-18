<?php
    session_start(); 
require_once('connection.php');

if(isset($_POST['login_button']))
{
    if(empty($_POST['emailorusername'])||empty($_POST['password']) )
    {
        header("location: ../Login.php?Empty");
        exit();
    }
    else
    {
        $EU = mysqli_real_escape_string($con,$_POST['emailorusername']);
        $Password = mysqli_real_escape_string($con,$_POST['password']);

        $query_owner= " select * from owner_accounts where owner_email = '".$EU."' or owner_username = '".$EU."'";
        $query_admin=" select * from admin_accounts where admin_email = '".$EU."' or admin_username = '".$EU."'";

        $result_owner = mysqli_query($con,$query_owner);
        $result_admin = mysqli_query($con,$query_admin);

        
        if($row=mysqli_fetch_assoc($result_owner))
        {
            $HashPass = password_verify($Password,$row['owner_password']);

            if($HashPass==false)
            {
                header("location: ../Login.php?P_Invalid");
                exit();
            }
            elseif($HashPass==true)
            {
                $_SESSION['owner_I_D']=$row['owner_id'];
                $_SESSION['owner_fName']=$row['owner_fname'];
                $_SESSION['owner_lName']=$row['owner_lname'];
                $_SESSION['owner_lName']=$row['owner_username'];
                $_SESSION['owner_email']=$row['owner_email'];
                $_SESSION['owner_password']=$row['owner_password'];
                header("location: ../homeowneraccountconnect.php?Welcome");
                exit();
            }
        }

        else  if($row=mysqli_fetch_assoc($result_admin))
        {
            $HashPass = password_verify($Password,$row['admin_password']);

            if($HashPass==false)
            {
                header("location: ../Login.php?P_Invalid");
                exit();
            }
            elseif($HashPass==true)
            {
                $_SESSION['admin_I_D']=$row['admin_id'];
                $_SESSION['admin_fName']=$row['admin_fname'];
                $_SESSION['admin_lName']=$row['admin_lname'];
                $_SESSION['admin_lName']=$row['admin_username'];
                $_SESSION['admin_email']=$row['admin_email'];
                $_SESSION['admin_password']=$row['admin_password'];
                header("location: ../adminaccountconnect.php?Welcome");//change this to the homepage of the admin panel
                exit();
            }
        }
        else
        {
            header("location: ../Login.php?U_Invalid");
            exit();
        }

    }

}
else
{
    header("location: ../Login.php");
    exit();
}
