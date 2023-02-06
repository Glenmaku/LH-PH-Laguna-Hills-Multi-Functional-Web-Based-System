<?php
require_once('connection.php'); 
//require_once('functions.php'); 
//DeleteOwnerRecord();
$Del_Id = $_POST['DeleteOwner'];
$deletequery = "delete from owner_accounts where owner_id = '$Del_Id' ";
$deleteresult = mysqli_query($con,$deletequery);

if($deleteresult)
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
