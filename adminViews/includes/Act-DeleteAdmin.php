
<?php
require_once('connection.php'); 

$Del_Id = $_POST['DeleteAdmin'];
$query = "DELETE FROM admin_accounts where admin_id = '$Del_Id' ";
$result = mysqli_query($con,$query);

if($result)
{
    echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
    A record has been deleted
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
       exit();
}
else
{
    echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
    Please Check Your Query
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
}
?>
