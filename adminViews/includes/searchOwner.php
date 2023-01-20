<?php
//connection to database
include 'connection.php';

$records_per_page = 5; // number of records per page

if (isset($_POST["query"])) {
  $search = mysqli_real_escape_string($con, $_POST["query"]);
  $query = "SELECT * FROM `owner_accounts` 
              WHERE owner_fname LIKE '%" . $search . "%'
              OR owner_lname LIKE '%" . $search . "%' 
              OR owner_username LIKE '%" . $search . "%' 
              OR  owner_email LIKE '%" . $search . "%' ";
} else {
  $query = "SELECT COUNT(*) as total_records FROM `owner_accounts` ORDER BY owner_id";
  $result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  if (isset($_POST["page"])) {
    $page = $_POST["page"];
  } else {
    $page = 1;
  }
  $start_from = ($page - 1) * $records_per_page;
  $query = "SELECT * FROM `owner_accounts` ORDER BY owner_id LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
  $owneraccountTable = '
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
    $owner_id = $row['owner_id'];
    $owner_fname = $row['owner_fname'];
    $owner_lname = $row['owner_lname'];
    $owner_username = $row['owner_username'];
    $owner_email = $row['owner_email'];
    $Owner_date = $row['owner_date_added'];

    $owneraccountTable .= '<tr>
            <td scope="row">' . $owner_id . '</td>
            <td>' . $owner_fname . '</td>
            <td>' . $owner_lname . '</td>
            <td>' . $owner_username . '</td>
            <td>' . $owner_email . '</td>
            <td>' . $Owner_date . '</td>
            <td><button id="btn_view_owner_acc" class="btn_view_owner_acc btn btn-primary" name="view_button" onclick="get_owner_info(' . $owner_id . ')"><i class="fa-solid fa-eye"></i></button>
            <button  id="btn_edit_owner_acc" class="btn_edit_owner_acc btn btn-success" name="edit_button" onclick="get_owner_record(' . $owner_id . ')" ><i class="fa-solid fa-pen"></i></button>
            <button  data-bs-toggle="modal" data-bs-target="#deleteOwnerModal" id="btn_delete_owner_acc" class="btn_delete_owner_acc btn btn-danger" name="delete_button" data-id2=' . $row['owner_id'] . '><i class="fa-solid fa-trash"></i></button></td>

          </tr>';
  }
  $owneraccountTable .= '</table>';

  // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM `owner_accounts`";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $page = 1;
  $pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getOwnerPage('.($page - 1).')">Previous</a></li>';
  }
  
  // Page numbers
  for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getOwnerPage('.$i.')">'.$i.'</a></li>';
  }
  
  // Next button
  if($page < $total_pages) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getOwnerPage('.($page + 1).')">Next</a></li>';
  }
  
  $pagination .= '</ul></nav>';
  // Concatenate the pagination links and the table
  $owneraccountTable =  $owneraccountTable . $pagination;

  echo $owneraccountTable;
} else {
  echo 'Data Not Found ';
}
?>