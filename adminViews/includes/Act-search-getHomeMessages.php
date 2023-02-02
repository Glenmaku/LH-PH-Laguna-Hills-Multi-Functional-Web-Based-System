<?php 
require_once("connection.php");


$records_per_page = 10; // number of records per page
////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST["allmessquery"])) {
        $search = mysqli_real_escape_string($con, $_POST["allmessquery"]);
        $query = "SELECT * FROM `message_tb` 
        WHERE message_id LIKE '%" . $search . "%'
        OR message_date LIKE '%" . $search . "%' 
        OR Homeowner_Full_Name LIKE '%" . $search . "%' 
        OR message_title LIKE '%" . $search . "%' 
        OR  email_desc LIKE '%" . $search . "%' ";
} 
else {
    $query = "SELECT COUNT(*) as total_records FROM `message_tb` ORDER BY message_id";
    $result = mysqli_query($con, $query);

    $total_rows = mysqli_fetch_array($result);
    $total_pages = ceil($total_rows["total_records"] / $records_per_page);
    
    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    } else {
        $page = 1;
    }
    $start_from = ($page - 1) * $records_per_page;
    $query = "SELECT * FROM `message_tb` ORDER BY message_id DESC LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $Messagetable='<table class="table">
    <thread>
        <tr>
            <th>Contact No.</th>
            <th>Date</th>
            <th>Full Name</th>
            <th>Subject</th>
            <th>Message</th>
            <th>View Info</th>
        </tr>
    </thread><tbody>';
    while($row=mysqli_fetch_assoc($result)){
        $message_username = $row['Homeowner_Username'];
        $message_id = $row['message_id'];
        $message_date = $row['message_date'];
        $message_Fullname = $row['Homeowner_Full_Name'];
        $message_subject = $row['message_title'];
        $message_message = $row['email_desc'];
        $Messagetable.='
                            <tr>
                            <td>'.$message_id.'</td>
                            <td>'.$message_date.'</td>
                            <td>'.$message_Fullname.'</td>
                            <td>'.$message_subject.'</td>
                            <td>'.$message_message.'</td>
                            <td><button id="btn_view_owner_contact" class="btn_view_owner_contact btn btn-primary" name="view_button" onclick="get_owner_contact('.$message_username.')"><i class="fa-solid fa-eye"></i></button></td>
                            </tr>';
    }
    $Messagetable.='</tbody><table>';
   // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM `message_tb`";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $page = 1;
  $pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_HomeMessages_Table('.($page - 1).')">Previous</a></li>';
  }
  
  // Page numbers
  for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_HomeMessages_Table('.$i.')">'.$i.'</a></li>';
  }
  
  // Next button
  if($page < $total_pages) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_HomeMessages_Table('.($page + 1).')">Next</a></li>';
  }
  
  $pagination .= '</ul></nav>';
  // Concatenate the pagination links and the table
  $Messagetable =  $Messagetable . $pagination;

  echo $Messagetable;
} else {
  echo 'Data Not Found ';
}
?>  
