<?php
require_once('connection.php');




if(isset($_POST['btn_updateadminacc']))
{
    $AdminID = $_POST['adminupdate_id'];
    $AdminFname = $_POST['admin_fname'];
    $AdminLname = $_POST['admin_lname'];
    $AdminUsername = $_POST['admin_username'];
    $AdminEmail = $_POST['admin_email'];



    $query = "UPDATE admin_accounts SET admin_fname='".$AdminFname."', admin_lname='".$AdminLname."',admin_username='".$AdminUsername."',admin_email='".$AdminEmail."' WHERE admin_id='".$AdminID."' ";
    $result = mysqli_query($con, $query);

    if($result){
        header("location:../RecordAdminAccount.php?successupdate");
    }
    else{
        header("location:../RecordAdminAccount.php");
    }
}
?>
