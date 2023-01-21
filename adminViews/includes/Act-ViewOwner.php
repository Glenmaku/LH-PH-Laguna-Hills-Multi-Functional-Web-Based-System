<?php
include('connection.php');

if(isset($_POST['viewid'])){

$view_id = $_POST['viewid'];
$viewquery="select * from owner_accounts where owner_id='".$view_id."'";
//$viewquery="SELECT owner_accounts.owner_id,owner_accounts.owner_fname,owner_accounts.owner_lname, owner_accounts.owner_username, owner_accounts.owner_email, owner_information.owner_gender,owner_information.owner_birthdate,owner_information.owner_mobile,owner_information.owner_telephone,owner_information.owner_address FROM `owner_accounts`,`owner_information` WHERE (owner_accounts.owner_username = owner_information.owner_username AND owner_accounts.owner_id='".$view_id."')";

$viewresult=mysqli_query($con,$viewquery);
$viewresponse = array();

while($row = mysqli_fetch_assoc($viewresult)){
    $viewresponse = $row;
}
echo json_encode($viewresponse);
}
else{
    $viewresponse['status']=200;
    $viewresponse['message']="Invalid or data not found";

}
?>