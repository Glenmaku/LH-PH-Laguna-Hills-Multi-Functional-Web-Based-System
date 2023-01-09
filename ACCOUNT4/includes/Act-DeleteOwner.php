<?php
require_once('connection.php');


if(isset($_POST['btn_deleteowneracc']))
{
    $OwnerID = $_POST['ownerdelete_id'];

    $query = "DELETE FROM owner_accounts WHERE owner_id='".$OwnerID."'";
    $result= mysqli_query($con,$query);

    if($result)
    {
        header("location:../RecordOwnerAccount.php?successdelete");
    }
    else{
        header("location:../RecordOwnerAccount.php");
    }
}
?>