<?php
require_once("connection.php");
if(isset($_POST['get_ContactData_Rec'])){
    $records_per_page = 10; // number of records per page
    $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
    $start_from = ($page - 1) * $records_per_page; // start from record
    $Contacttable ='<table class="table">
    <thread>
        <tr>
            <th>Date</th>
            <th>Full Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Subject</th>
            <th>Message</th>
        </tr>
    </thread><tbody>';
    $contact_sql = "SELECT * FROM `contact_us` ORDER BY Contact_ID DESC LIMIT $start_from, $records_per_page";
$contact_result=mysqli_query($con, $contact_sql);

while($row=mysqli_fetch_assoc($contact_result)){
    $contact_id = $row['Contact_ID'];
    $contact_date = $row['Contact_Date'];
    $contact_Fullname = $row['Full_Name'];
    $contact_Email = $row['Email_Address'];
    $contact_phoneno = $row['Cellphone_Number'];
    $contact_subject = $row['Subject'];
    $contact_message = $row['Message'];
    $Contacttable.='
                        <tr>
                        <td>'.$contact_date.'</td>
                        <td>'.$contact_Fullname.'</td>
                        <td>'.$contact_Email.'</td>
                        <td>'.$contact_phoneno.'</td>
                        <td>'.$contact_subject.'</td>
                        <td>'.$contact_message.'</td>
                        </tr>';
}
$Contacttable.='</tbody><table>';

$allconsquery = "SELECT COUNT(*) AS total_records FROM `contact_us`";
$total_pages_result = mysqli_query($con, $allconsquery);
$total_rows = mysqli_fetch_array($total_pages_result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);
$pagination = '<nav aria-label="Page navigation">
      <ul class="pagination">';
if ($page > 1) {
  $previous = $page - 1;
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Contact_Table(' . $previous . ')">Previous</a></li>';
}
for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Contact_Table(' . $i . ')">' . $i . '</a></li>';
}
if ($page < $total_pages) {
  $next = $page + 1;
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Contact_Table(' . $next . ')">Next</a></li>';
}
$pagination .= '</ul></nav>';

// Concatenate the pagination links and the table
$Contacttable =  $Contacttable . $pagination;

echo $Contacttable;
}
else {
    echo 'Data Not Found ';
  }
?>