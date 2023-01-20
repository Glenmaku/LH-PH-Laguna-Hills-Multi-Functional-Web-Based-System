<?php
include 'connection.php';

//autogenerate for username
$query = "SELECT * FROM admin_accounts order by admin_id desc limit 1";//change to username if mali
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$lastid=$row['admin_id'];
$YearJoined= date("Y");
$IDnum=sprintf("%04s",($lastid+1)); 

$AdminUsername="ADMIN".$YearJoined."-".$IDnum;
echo $AdminUsername;
?>