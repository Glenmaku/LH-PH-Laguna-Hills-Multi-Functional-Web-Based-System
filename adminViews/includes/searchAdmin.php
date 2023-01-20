<?php
//connection to database
include 'connection.php';

$records_per_page = 5; // number of records per page

if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    $query = "SELECT * FROM `admin_accounts` 
  WHERE admin_fname LIKE '%" . $search . "%'
  OR admin_lname LIKE '%" . $search . "%' 
  OR admin_username LIKE '%" . $search . "%' 
  OR  admin_email LIKE '%" . $search . "%' ";
} else {
    $query = "SELECT COUNT(*) as total_records FROM `admin_accounts` ORDER BY admin_id";
    $result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  if (isset($_POST["page"])) {
    $page = $_POST["page"];
  } else {
    $page = 1;
  }
  $start_from = ($page - 1) * $records_per_page;
  $query = "SELECT * FROM `admin_accounts` ORDER BY admin_id LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $adminAccountTable= '
    <table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Date Added</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>';
    while ($row = mysqli_fetch_array($result)) {
        $adminId = $row['admin_id'];
        $fname = $row['admin_fname'];
        $lame = $row['admin_lname'];
        $user = $row['admin_username'];
        $email = $row['admin_email'];
        $date = $row['date_added'];
        $adminAccountTable  .= '
        <tr>
        <td scope="row">' . $adminId . '</td>
        <td>' . $fname . '</td>
        <td>' . $lame . '</td>
        <td>' . $user . '</td>
        <td>' . $email . '</td>
        <td>' . $date . '</td>
        <td><button class="btn btn-success" onclick="get_admin_record(' . $adminId . ')"> <i class="fa-solid fa-pen"></i></button>
        <button class="btn btn-danger" onclick="deleteUser(' . $adminId . ')"> <i class="fa-solid fa-trash"></i></button></td>
      </tr>';
    }
    $adminAccountTable.='</table>';
   // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM `admin_accounts`";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $page = 1;
  $pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getAdminPage('.($page - 1).')">Previous</a></li>';
  }
  
  // Page numbers
  for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getAdminPage('.$i.')">'.$i.'</a></li>';
  }
  
  // Next button
  if($page < $total_pages) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getAdminPage('.($page + 1).')">Next</a></li>';
  }
  
  $pagination .= '</ul></nav>';
  // Concatenate the pagination links and the table
  $adminAccountTable =  $adminAccountTable . $pagination;

  echo $adminAccountTable;
} else {
  echo 'Data Not Found ';
}
?>