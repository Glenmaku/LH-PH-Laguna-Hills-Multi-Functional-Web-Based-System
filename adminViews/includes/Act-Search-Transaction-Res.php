<?php
//connection to database
include 'connection.php';

$records_per_page = 10; // number of records per page
////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["reservequery"])) {
  $search = mysqli_real_escape_string($con, $_POST["reservequery"]);
  $query = "SELECT * FROM `transac_reserv_records` 
  WHERE records_transaction_no LIKE '%" . $search . "%'
  OR t_name LIKE '%" . $search . "%'
  OR total LIKE '%" . $search . "%' 
  OR date_created LIKE '%" . $search . "%'
  OR discount LIKE '%" . $search . "%' 
  OR remarks LIKE '%" . $search . "%' 

 ";
} 
else {
$query = "SELECT COUNT(*) as total_records FROM `transac_reserv_records` ORDER BY records_transaction_no";
$result = mysqli_query($con, $query);

$total_rows = mysqli_fetch_array($result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);

if (isset($_POST["page"])) {
  $page = $_POST["page"];
} else {
  $page = 1;
}
$start_from = ($page - 1) * $records_per_page;
$query = "SELECT * FROM `transac_reserv_records` ORDER BY records_transaction_no  LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
  $Rtable ='<table class="table">
    <thead>
      <tr>
            <th>Transaction No.</th>
          <th>Date</th>
          <th>Full Name</th>
          <th>Total</th>

          <th>Discount</th>
          <th>Remarks</th>
          <th>Payment</th>
          <th>Change</th>

      </tr>
    </thead>
    <tbody>';
  while($row=mysqli_fetch_assoc($result)){
  $reservation_ID = $row['records_transaction_no'];
      $reservation_name =	$row['t_name'];
      $reservation_total = $row['total'];

      $reservation_discount = $row['discount'];
      $reservation_remarks = $row['remarks'];
      $reservation_reserv_payment = $row['reserv_payment'];
      $reservation_reserv_change = $row['reserv_change'];
      $reservation_remaining_balance = $row['remaining_balance'];

     // $Category = $row['category'];
      $reservations_date = $row['date_created'];
      $Rtable .= '  <tr>
                              <td>'.$reservation_ID.'</td>
                              <td>'.$reservations_date.'</td>
                              <td>'.$reservation_name.'</td>
                              <td>'.$reservation_total.'</td>

                              <td>'.$reservation_discount.'</td>
                              <td>'.$reservation_remarks.'</td>
                              <td>'.$reservation_reserv_payment.'</td>
                              <td>'.$reservation_reserv_change.'</td>
                              

                      <tr>';
  }
$Rtable .= '</tbody></table>';
// Add the pagination links
$query = "SELECT COUNT(*) as total_records FROM `transac_reserv_records`";
$total_pages_result = mysqli_query($con, $query);
$total_rows = mysqli_fetch_array($total_pages_result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);
$page = 1;
$pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table('.($page - 1).')">Previous</a></li>';
}

// Page numbers
for ($i = 1; $i <= $total_pages; $i++) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table('.$i.')">'.$i.'</a></li>';
}

// Next button
if($page < $total_pages) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table('.($page + 1).')">Next</a></li>';
}

$pagination .= '</ul></nav>';
// Concatenate the pagination links and the table
$Rtable=  $Rtable. $pagination;

echo $Rtable;
}
else {
echo 'Data Not Found ';
}


?>