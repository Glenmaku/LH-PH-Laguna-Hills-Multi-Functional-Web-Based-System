<?php
require_once('connection.php');

$Lotquery = "select * from owner_accounts order by owner_id desc";
$assignlotresult = mysqli_query($con, $Lotquery);
while ($row = mysqli_fetch_array($assignlotresult)) {
    echo '<option>' . $row['owner_username'] . '</option>';
}
?>