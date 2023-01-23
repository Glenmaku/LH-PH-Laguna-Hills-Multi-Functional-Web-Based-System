<?php

include('connection.php');


if (isset($_POST['mapOwnerSend'])) {
    $table= '
<div class="panel-content">
<h3>OWNER INFORMATION</h3>
<table class="table">
<thead>
<tr>
  <th scope="col">Name</th>
  <th scope="col">Ownership</th>
</tr>
</thead>';

    $sql = "SELECT * FROM `owner_accounts` JOIN `assigned_lot` ON owner_accounts.owner_username = assigned_lot.owner_username";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['owner_fname'];
        $lname = $row['owner_lname'];
        $ownership = $row['ownership'];

        $table.= '<tr>
        <td scope="row">' . $name . ' ' . $lname . '</td>
        <td>' . $ownership . '</td>
        </tr>';

        
    }
    $table .= '</table></div>';
    echo $table;
}
