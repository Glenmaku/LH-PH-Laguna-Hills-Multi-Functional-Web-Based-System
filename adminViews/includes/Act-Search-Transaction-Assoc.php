<?php
//connection to database
include 'connection.php';

$records_per_page = 10; // number of records per page
////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["assocquery"])) {
  $search = mysqli_real_escape_string($con, $_POST["assocquery"]);
  $query = "SELECT * FROM `transaction_assoc` 
  WHERE transaction_num LIKE '%" . $search . "%'
  OR Lot_ID LIKE '%" . $search . "%'
 
  OR assoc_selectedBal LIKE '%" . $search . "%' 
  OR assoc_payment LIKE '%" . $search . "%'
  OR assoc_change LIKE '%" . $search . "%'
  OR assoc_penalty LIKE '%" . $search . "%'
  OR assoc_discount LIKE '%" . $search . "%'
  OR assoc_date_payment LIKE '%" . $search . "%'
  OR  assoc_remarks LIKE '%" . $search . "%' ";
} 
else {
$query = "SELECT COUNT(*) as total_records FROM `transaction_assoc` ORDER BY transaction_num";
$result = mysqli_query($con, $query);

$total_rows = mysqli_fetch_array($result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);

if (isset($_POST["page"])) {
  $page = $_POST["page"];
} else {
  $page = 1;
}
$start_from = ($page - 1) * $records_per_page;
$query = "SELECT * FROM `transaction_assoc` ORDER BY transaction_num LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
  $Astable ='<table class="table">
    <thead>
      <tr>
        <th >Transaction No.</th>
         <th >Date</th>
         <th>Block & Lot</th>
          <th>Assoc Balance</th>
          <th>Penalty</th>
          <th>Discount</th>
          <th>Payment</th>
          <th>Change</th>
          <th>Remarks</th>
         
      </tr>
    </thead>
    <tbody>';
    while($row=mysqli_fetch_assoc($result)){
      $assoc_no = $row['transaction_num'];
      $assoc_date = $row['assoc_date_payment'];
      $Lot_ID = $row['Lot_ID'];
      
      $assoc_bal =$row['assoc_selectedBal'];
      $assoc_payment= $row['assoc_payment'];
      $assoc_change = $row['assoc_change'];
      $assoc_penalty = $row['assoc_penalty'];
      $assoc_discount = $row['assoc_discount'];
      
      $assoc_remarks = $row['assoc_remarks'];
      $Astable .= '  <tr>
                              <td>'.$assoc_no.'</td>
                              <td>'.$assoc_date.'</td>
                              <td>'.$Lot_ID.'</td>
                            
                              <td>'.$assoc_bal.'</td>
                              <td>'.$assoc_penalty.'</td>
                               <td>'.$assoc_discount.'</td>
                               <td>'.$assoc_payment.'</td>
                              <td>'.$assoc_change.'</td>
                               <td>'.$assoc_remarks.'</td>
                               
                             
                      <tr>';
  }
  $Astable .= '</tbody></table>';
// Add the pagination links
$query = "SELECT COUNT(*) as total_records FROM `transaction_assoc`";
$total_pages_result = mysqli_query($con, $query);
$total_rows = mysqli_fetch_array($total_pages_result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);
$page = 1;
$pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Association_Dues_Table('.($page - 1).')">Previous</a></li>';
}

// Page numbers
for ($i = 1; $i <= $total_pages; $i++) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Association_Dues_Table('.$i.')">'.$i.'</a></li>';
}

// Next button
if($page < $total_pages) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Association_Dues_Table('.($page + 1).')">Next</a></li>';
}

$pagination .= '</ul></nav>';
// Concatenate the pagination links and the table
$Astable=  $Astable. $pagination;

echo $Astable;
}
else {
echo 'Data Not Found ';
}


?>