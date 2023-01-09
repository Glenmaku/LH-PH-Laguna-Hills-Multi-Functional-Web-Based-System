<?php
require_once('connection.php');


if(isset($_POST['btn_deleteadminacc']))
{
    $AdminID = $_POST['admindelete_id'];

    $query = "DELETE FROM admin_accounts WHERE admin_id='".$AdminID."'";
    $result= mysqli_query($con,$query);

    if($result)
    {
        header("location:../RecordAdminAccount.php?successdelete");
    }
    else{
        header("location:../RecordAdminAccount.php");
    }
}
?>