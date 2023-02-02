<?php
require_once("connection.php");
if(isset($_POST['get_HomeMessages_Rec'])){
    $records_per_page = 10; // number of records per page
    $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
    $start_from = ($page - 1) * $records_per_page; // start from record
    $Messagetable ='<table class="table">
    <thread>
        <tr>
            <th>Message No.</th>
            <th>Date</th>
            <th>Full Name</th>
            <th>Subject</th>
            <th>Message</th>
            <th>View Info</th>
        </tr>
    </thread><tbody>';
    $contact_sql = "SELECT * FROM `message_tb` ORDER BY message_id DESC LIMIT $start_from, $records_per_page";
$contact_result=mysqli_query($con, $contact_sql);

while($row=mysqli_fetch_assoc($contact_result)){
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

$allmessquery = "SELECT COUNT(*) AS total_records FROM `message_tb`";
$total_pages_result = mysqli_query($con, $allmessquery);
$total_rows = mysqli_fetch_array($total_pages_result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);
$pagination = '<nav aria-label="Page navigation">
      <ul class="pagination">';
if ($page > 1) {
  $previous = $page - 1;
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_HomeMessages_Table(' . $previous . ')">Previous</a></li>';
}
for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_HomeMessages_Table(' . $i . ')">' . $i . '</a></li>';
}
if ($page < $total_pages) {
  $next = $page + 1;
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_HomeMessages_Table(' . $next . ')">Next</a></li>';
}
$pagination .= '</ul></nav>';

// Concatenate the pagination links and the table
$Messagetable =  $Messagetable . $pagination;

echo $Messagetable;
}
else {
    echo 'Data Not Found ';
  }
?>