<?php
require_once('connection.php'); 
//require_once('functions.php'); 
//DeleteOwnerRecord();
$Delete_no = $_POST['DeleteAnnounce'];
$query = "DELETE FROM announcement_tb where announcement_no = '$Delete_no' ";
$result = mysqli_query($con,$query);

if($result)
{
    echo ' Your Record Has Been Delete ';
}
else
{
    echo ' Please Check Your Query ';
}
?>
