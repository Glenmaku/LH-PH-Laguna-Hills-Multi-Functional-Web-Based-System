<?php
include 'connection.php';

if (isset($_POST['displayOwnerSend'])) {

  $records_per_page = 5; // number of records per page
  $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
  $start_from = ($page - 1) * $records_per_page; // start from record

  $owneraccountTable = '<table class="table">
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

  $ownersql = "SELECT * FROM `owner_accounts` ORDER BY owner_id LIMIT $start_from, $records_per_page";
  $ownerresult = mysqli_query($con, $ownersql);
  while ($row = mysqli_fetch_assoc($ownerresult)) {

    $Ownerid = $row['owner_id'];
    $Ownerfname = $row['owner_fname'];
    $Ownerlname = $row['owner_lname'];
    $Ownerusername = $row['owner_username'];
    $Owneremail = $row['owner_email'];
    $OwnerDate = $row['owner_date_added'];
    $owneraccountTable .= '<tr>
            <td scope="row">' . $Ownerid . '</td>
            <td>' . $Ownerfname . '</td>
            <td>' . $Ownerlname . '</td>
            <td>' . $Ownerusername . '</td>
            <td>' . $Owneremail . '</td>
            <td>' . $OwnerDate . '</td>
            <td><button id="btn_view_owner_acc" class="btn_view_owner_acc btn btn-primary" name="view_button" onclick="get_owner_info(' . $Ownerid . ')"><i class="fa-solid fa-eye"></i></button>
            <button  id="btn_edit_owner_acc" class="btn_edit_owner_acc btn btn-success" name="edit_button" onclick="get_owner_record(' . $Ownerid . ')" ><i class="fa-solid fa-pen"></i></button>
            <button  data-bs-toggle="modal" data-bs-target="#deleteOwnerModal" id="btn_delete_owner_acc" class="btn_delete_owner_acc btn btn-danger" name="delete_button" data-id2=' . $row['owner_id'] . '><i class="fa-solid fa-trash"></i></button></td>

          </tr>';
  }
  $owneraccountTable .= '</table>';

  // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM owner_accounts";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $pagination = '<nav aria-label="Page navigation">
           <ul class="pagination">';
  if ($page > 1) {
    $previous = $page - 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getOwnerPage(' . $previous . ')">Previous</a></li>';
  }
  for ($i = 1; $i <= $total_pages; $i++) {
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getOwnerPage(' . $i . ')">' . $i . '</a></li>';
  }
  if ($page < $total_pages) {
    $next = $page + 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="getOwnerPage(' . $next . ')">Next</a></li>';
  }
  $pagination .= '</ul></nav>';

  // Concatenate the pagination links and the table
  $owneraccountTable =  $owneraccountTable . $pagination;

  echo $owneraccountTable;
} else {
  echo 'Data Not Found ';
}
