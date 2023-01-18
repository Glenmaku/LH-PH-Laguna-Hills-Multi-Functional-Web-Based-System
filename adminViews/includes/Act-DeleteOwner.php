<?php
require_once('connection.php'); 
//require_once('functions.php'); 
//DeleteOwnerRecord();
$Del_Id = $_POST['DeleteOwner'];
$deletequery = "delete from owner_accounts where owner_id = '$Del_Id' ";
$deleteresult = mysqli_query($con,$deletequery);

if($deleteresult)
{
    echo ' Your Record Has Been Delete ';
}
else
{
    echo ' Please Check Your Query ';
}
?>
