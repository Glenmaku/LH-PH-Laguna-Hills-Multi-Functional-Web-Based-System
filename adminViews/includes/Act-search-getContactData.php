<?php 
require_once("connection.php");


$records_per_page = 10; // number of records per page
////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST["allconsquery"])) {
        $search = mysqli_real_escape_string($con, $_POST["allconsquery"]);
        $query = "SELECT * FROM `contact_us` 
        WHERE Contact_ID LIKE '%" . $search . "%'
        OR Contact_Date LIKE '%" . $search . "%' 
        OR Full_Name LIKE '%" . $search . "%' 
        OR Email_Address LIKE '%" . $search . "%' 
        OR Cellphone_Number LIKE '%" . $search . "%' 
        OR Subject LIKE '%" . $search . "%' 
        OR  Message LIKE '%" . $search . "%' ";
} 
else {
    $query = "SELECT COUNT(*) as total_records FROM `contact_us` ORDER BY Contact_ID";
    $result = mysqli_query($con, $query);

    $total_rows = mysqli_fetch_array($result);
    $total_pages = ceil($total_rows["total_records"] / $records_per_page);
    
    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    } else {
        $page = 1;
    }
    $start_from = ($page - 1) * $records_per_page;
    $query = "SELECT * FROM `contact_us` ORDER BY Contact_ID DESC LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $Contacttable='<table class="table">
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
    while($row=mysqli_fetch_assoc($result)){
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
   // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM `contact_us`";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $page = 1;
  $pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Contact_Table('.($page - 1).')">Previous</a></li>';
  }
  
  // Page numbers
  for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Contact_Table('.$i.')">'.$i.'</a></li>';
  }
  
  // Next button
  if($page < $total_pages) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Contact_Table('.($page + 1).')">Next</a></li>';
  }
  
  $pagination .= '</ul></nav>';
  // Concatenate the pagination links and the table
  $Contacttable =  $Contacttable . $pagination;

  echo $Contacttable;
} else {
  echo 'Data Not Found ';
}
?>  