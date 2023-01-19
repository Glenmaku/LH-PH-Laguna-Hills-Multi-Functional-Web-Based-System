<?php
//connection to database
include 'connection.php';


if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    $query = "SELECT * FROM `admin_accounts` 
  WHERE admin_fname LIKE '%" . $search . "%'
  OR admin_lname LIKE '%" . $search . "%' 
  OR admin_username LIKE '%" . $search . "%' 
  OR  admin_email LIKE '%" . $search . "%' ";
} else {
    $query = "SELECT * FROM `admin_accounts` ORDER BY admin_id";
}
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $accountTable= '
    <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>';
    while ($row = mysqli_fetch_array($result)) {
        $adminId = $row['admin_id'];
        $fname = $row['admin_fname'];
        $lame = $row['admin_lname'];
        $user = $row['admin_username'];
        $email = $row['admin_email'];
        
        $accountTable  .= '
        <tr>
        <td scope="row">' . $adminId . '</td>
        <td>' . $fname . '</td>
        <td>' . $lame . '</td>
        <td>' . $user . '</td>
        <td>' . $email . '</td>
        <td><button class="btn btn-success" onclick="getDetails(' . $adminId . ')"> <i class="fa-solid fa-pen"></i></button>
        <button class="btn btn-danger" onclick="deleteUser(' . $adminId . ')"> <i class="fa-solid fa-trash"></i></button></td>
      </tr>';
    }
    $accountTable.='</table>';
    echo $accountTable;
} else {
    echo 'Data Not Found ';
}
