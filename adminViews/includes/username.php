<?php
require_once('connection.php');

//autogenerate for username
$query = "SELECT * FROM owner_accounts order by owner_id desc limit 1";//change to username if mali
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$lastid=$row['owner_id'];
$YearJoined= date("Y");
$IDnum=sprintf("%04s",($lastid+1)); 

$OwnerUsername="LHS".$YearJoined."-".$IDnum;
echo $OwnerUsername;
?>