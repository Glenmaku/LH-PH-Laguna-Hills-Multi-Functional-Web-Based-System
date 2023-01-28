<?php
require_once('connection.php');

//autogenerate for username
$query = "SELECT * FROM owner_accounts order by owner_id desc limit 1";//change to username if mali
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    $lastid=$row['owner_id'];
    $IDnum=sprintf("%04s",($lastid+1)); 
} else {
    $IDnum=sprintf("%04s",(1)); 
}

$YearJoined= date("Y");
$OwnerUsername="LHS".$YearJoined."-".$IDnum;
echo $OwnerUsername;
?>