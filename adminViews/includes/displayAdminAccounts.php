<?php
require_once ('connection.php');

if (isset($_POST['displaySend'])) {
  $records_per_page = 5; // number of records per page
  $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
  $start_from = ($page - 1) * $records_per_page; // start from record

  $adminAccountTable = '<table class="table">
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

  $sql = "SELECT * FROM admin_accounts ORDER BY admin_id LIMIT $start_from, $records_per_page";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $adminId = $row['admin_id'];
    $fname = $row['admin_fname'];
    $lame = $row['admin_lname'];
    $user = $row['admin_username'];
    $email = $row['admin_email'];
    $date = $row['date_added'];
    $adminAccountTable .= '<tr>
            <td scope="row">' . $adminId . '</td>
            <td>' . $fname . '</td>
            <td>' . $lame . '</td>
            <td>' . $user . '</td>
            <td>' . $email . '</td>
            <td>' . $date . '</td>
            <td><button class="btn btn-success" onclick="getDetails(' . $adminId . ')"> <i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-danger" onclick="deleteUser(' . $adminId . ')"> <i class="fa-solid fa-trash"></i></button></td>
          </tr>';
  }
  $adminAccountTable .= '</table>';
  // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM `admin_accounts`";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $pagination = '<nav aria-label="Page navigation">
        <ul class="pagination">';
  if ($page > 1) {
    $previous = $page - 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getAdminPage(' . $previous . ')">Previous</a></li>';
  }
  for ($i = 1; $i <= $total_pages; $i++) {
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getAdminPage(' . $i . ')">' . $i . '</a></li>';
  }
  if ($page < $total_pages) {
    $next = $page + 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getAdminPage(' . $next . ')">Next</a></li>';
  }
  $pagination .= '</ul></nav>';

  // Concatenate the pagination links and the table
  $adminAccountTable =  $adminAccountTable . $pagination;

  echo $adminAccountTable;
} else {
  echo 'Data Not Found ';
}
?>