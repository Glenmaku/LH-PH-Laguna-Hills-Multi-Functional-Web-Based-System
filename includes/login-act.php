<?php
    session_start();
require_once('connection.php');

if(isset($_POST['login_button']))
{
    if(empty($_POST['email'])||empty($_POST['password']) )
    {
        header("location: ../Login.php?Empty");
        exit();
    }
    else
    {
        $Email = mysqli_real_escape_string($con,$_POST['email']);
        $Password = mysqli_real_escape_string($con,$_POST['password']);

        $Query = " select * from employee_accounts where Employee_Email ='".$Email."'";
        $result = mysqli_query($con,$Query);
        
        if($row=mysqli_fetch_assoc($result))
        {
            $HashPass = password_verify($Password,$row['Employee_Password']);

            if($HashPass==false)
            {
                header("location: ../Login.php?P_Invalid");
                exit();
            }
            elseif($HashPass==true)
            {
                $_SESSION['Employee_U_D']=$row['Employee_Account_ID'];
                $_SESSION['Employee_FName']=$row['Employee_FName'];
                $_SESSION['Employee_LName']=$row['Employee_LName'];
                $_SESSION['Employee_Position']=$row['Employee_Position'];
                $_SESSION['Employee_Email']=$row['Employee_Email'];
                $_SESSION['Employee_Password']=$row['Employee_Password'];


                header("location: ../account.php?Well");
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
?> 