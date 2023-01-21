<?php
//connection to database
include 'connection.php';

$records_per_page = 10;

if (isset($_POST["query"])) {
  $search = mysqli_real_escape_string($con, $_POST["query"]);
  $query = "SELECT * FROM `announcement_tb` 
  WHERE announcement_title LIKE '%" . $search . "%'";
} else {
  $query = "SELECT COUNT(*) as total_records FROM `announcement_tb` ORDER BY announcement_no DESC";
  $result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  if (isset($_POST["page"])) {
    $page = $_POST["page"];
  } else {
    $page = 1;
  }
  $start_from = ($page - 1) * $records_per_page;
  $query = "SELECT * FROM `announcement_tb` ORDER BY announcement_no DESC LIMIT $start_from, $records_per_page";
}
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
  $announcementTable = '<table class="table">
  <thead>
  <tr>
  <th scope="col">No.</th>
  <th scope="col">Title</th>
  <th scope="col style="width: 40%;" ">Description</th>
  <th scope="col">Date</th>
  <th scope="col">Actions</th>
  </tr>
  </thead>';
  while ($row = mysqli_fetch_array($result)) {
    $announcementId = $row['announcement_no'];
    $title = $row['announcement_title'];
    $description = substr($row['announcement_description'], 0, 30) . "...";
    $announcement_date = $row['announcement_date'];
    $announcementTable .= '<tr>
  <td scope="row">' . $announcementId . '</td>
  <td>' . $title . '</td>
  <td style="width: 40%;" >' . $description . '</td>
  <td>' . $announcement_date . '</td>
  <td><button class="btn btn-primary" onclick="get_announce_info('.$announcementId.')"><i class="fa-solid fa-eye"></i></button>
  <button class="btn btn-success" onclick="get_announce_record(' . $announcementId . ')"><i class="fa-solid fa-pen"></i></button> 
  <button class="btn btn-danger btn_delete_announce" data-bs-target="#deleteAnnounceModal" data-bs-toggle="modal" id="btn_delete_announce"  data-id2=' . $row['announcement_no'] . '><i class="fa-solid fa-trash"></i></button></td>
  </tr>';
  }
  $announcementTable .= '</table>';
  // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM announcement_tb";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $page = 1;
  $pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';

// Previous button
if($page > 1){
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage('.($page - 1).')">Previous</a></li>';
  }
  
  // Page numbers
  for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage('.$i.')">'.$i.'</a></li>';
  }
  
  // Next button
  if($page < $total_pages) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage('.($page + 1).')">Next</a></li>';
  }
  
  $pagination .= '</ul></nav>';
  
  // Concatenate the pagination links and the table
  $announcementTable = $announcementTable . $pagination;
  
  echo $announcementTable;
  } else {
  echo 'Data Not Found ';
  }

  ?>

