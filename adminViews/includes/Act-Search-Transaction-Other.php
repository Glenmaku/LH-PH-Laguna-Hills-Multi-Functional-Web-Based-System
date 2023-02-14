<?php
//connection to database
include 'connection.php';

$records_per_page = 10; // number of records per page
////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["otherquery"])) {
  $search = mysqli_real_escape_string($con, $_POST["otherquery"]);
  $query = "SELECT * FROM `transac_other` 
  WHERE transaction_no LIKE '%" . $search . "%'
  OR t_name LIKE '%" . $search . "%'
  OR price LIKE '%" . $search . "%' 
  OR category LIKE '%" . $search . "%' 
  OR created_at LIKE '%" . $search . "%'
 ";
} 
else {
$query = "SELECT COUNT(*) as total_records FROM `transac_other` ORDER BY transaction_no";
$result = mysqli_query($con, $query);

$total_rows = mysqli_fetch_array($result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);

if (isset($_POST["page"])) {
  $page = $_POST["page"];
} else {
  $page = 1;
}
$start_from = ($page - 1) * $records_per_page;
$query = "SELECT * FROM `transac_other` ORDER BY transaction_no  LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
  $Otable ='<table class="table">
  <thead>
    <tr>
      <th>Transaction No.</th>
      <th>Full Name</th>
      <th>Category</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Total</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>';
while($row=mysqli_fetch_assoc($result)){
      $others_ID = $row['transaction_no'];
      $others_name =	$row['t_name'];
      $category = $row['category'];
      $quantity = $row['quantity'];
      $price = $row['price'];
      $subtotal = $row['subtotal'];
      $otherss_date = $row['created_at'];

      $Otable .= '  <tr>
                        <td>'.$others_ID.'</td>
                        <td>'.$others_name.'</td>
                        <td>'.$category.'</td>
                        <td>'.$quantity.'</td>
                        <td>'.$price.'</td>
                        <td>'.$subtotal.'</td>
                        <td>'.$otherss_date.'</td>    
                      <tr>';
  }
$Otable .= '</tbody></table>';
// Add the pagination links
$query = "SELECT COUNT(*) as total_records FROM `transac_other`";
$total_pages_result = mysqli_query($con, $query);
$total_rows = mysqli_fetch_array($total_pages_result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);
$page = 1;
$pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Others_Services_Table('.($page - 1).')">Previous</a></li>';
}

// Page numbers
for ($i = 1; $i <= $total_pages; $i++) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Others_Services_Table('.$i.')">'.$i.'</a></li>';
}

// Next button
if($page < $total_pages) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Others_Services_Table('.($page + 1).')">Next</a></li>';
}

$pagination .= '</ul></nav>';
// Concatenate the pagination links and the table
$Otable=  $Otable. $pagination;

echo $Otable;
}
else {
echo 'Data Not Found ';
}


?>