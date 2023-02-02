<?php
include('connection.php');

if(isset($_POST['announceOwner_id'])){

$announce_no = $_POST['announceOwner_id'];
$query="SELECT * FROM `announcement_tb` where announcement_no ='".$announce_no."'";

$result=mysqli_query($con,$query);
$response = array();

while($row = mysqli_fetch_assoc($result)){
    $response = $row;
}
echo json_encode($response);
}
else{
    $response['status']=200;
    $response['message']="Invalid or data not found";

}
?>