
<?php
require_once('connection.php'); 

$Del_Id = $_POST['DeleteAdmin'];
$query = "DELETE FROM admin_accounts where admin_id = '$Del_Id' ";
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
