<?php
require_once("connection.php");
/////////////////////////////////////////////////////////////

if(isset($_POST['Reservations_Rec'])){
    $records_per_page = 10; // number of records per page
    $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
    $start_from = ($page - 1) * $records_per_page; // start from record
    $Rtable ='<table class="table">
    <thead>
      <tr>
          <th>Transaction No.</th>
          <th>Full Name</th>
          <th>Reserver</th>
          <th>Duration</th>
          <th>Total</th>
          <th>Discount</th>
          <th>Payment</th>
          <th>Change</th>
          <th>Balance</th>
          <th>Remarks</th>
          <th>Date</th>
          <th>Authorization</th>
          <th>Details</th>
          <th>Delete</th>
      </tr>
    </thead>
    <tbody>';
    $reservations_sql = "SELECT * FROM transac_reserv_records ORDER BY records_transaction_no DESC LIMIT $start_from, $records_per_page";
    $reservations_result = mysqli_query($con,$reservations_sql);

    while($row=mysqli_fetch_assoc($reservations_result)){
      $reservation_ID = $row['records_transaction_no'];
      $reservation_name =	$row['t_name'];
      $ReserverType = $row[''];
      $fromdate = $row['reserv_date_start'];
      $todate = $row['reserv_date_end'];
      $reservation_total = $row['total'];
      $reservation_discount = $row['discount'];
      $reservation_remarks = $row['remarks'];
      $reservation_reserv_payment = $row['reserv_payment'];
      $reservation_reserv_change = $row['reserv_change'];
      $reservation_remaining_balance = $row['remaining_balance'];
      $authorization = $row['authorization_type'];
      $reservations_date = $row['date_created'];
      $Rtable .= '  <tr>
                              <td>'.$reservation_ID.'</td>
                              <td>'.$reservation_name.'</td>
                              <td>'.$fromdate.' <b>-</b> '.$todate.'</td>
                              <td>'.$reservation_total.'</td>
                              <td>'.$reservation_discount.'</td>
                              <td>'.$reservation_reserv_payment.'</td>
                              <td>'.$reservation_reserv_change.'</td>
                              <td>'.$reservation_remaining_balance.'</td>
                              <td>'.$reservation_remarks.'</td>
                              <td>'.$reservations_date.'</td>
                              <td>'.$authorization.'</td>
                              <td><button id="btn_view_owner_acc" class="btn_view_owner_acc btn btn-primary" name="view_button" onclick="get_owner_info(' . $reservation_ID . ')"><i class="fa-solid fa-eye"></i></button></td>
                                        <td><button class="btn btn-danger" id="btn_deleteAdminAcc" data-bs-toggle="modal" data-bs-target="#deleteAdminModal" data-id2=' . $reservation_ID. '> <i class="fa-solid fa-trash"></i></button></td>
                      <tr>';
  }
$Rtable .= '</tbody></table>';
  // Add the pagination links
  $reservequery = "SELECT COUNT(*) as total_records FROM `transac_reserv_records`";
  $total_pages_result = mysqli_query($con, $reservequery);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $pagination = '<nav aria-label="Page navigation">
        <ul class="pagination">';
  if ($page > 1) {
    $previous = $page - 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table(' . $previous . ')">Previous</a></li>';
  }
  for ($i = 1; $i <= $total_pages; $i++) {
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table(' . $i . ')">' . $i . '</a></li>';
  }
  if ($page < $total_pages) {
    $next = $page + 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table(' . $next . ')">Next</a></li>';
  }
  $pagination .= '</ul></nav>';

  // Concatenate the pagination links and the table
  $Rtable=  $Rtable . $pagination;

  echo $Rtable;

}

else {
    echo 'Data Not Found ';
  }

?>