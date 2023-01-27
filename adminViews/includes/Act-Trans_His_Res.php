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
          <th>Date</th>
          <th>Full Name</th>
          <th>Total</th>
      </tr>
    </thead>
    <tbody>';
    $reservations_sql = "SELECT * FROM transac_reserv_records ORDER BY records_transaction_no LIMIT $start_from, $records_per_page";
    $reservations_result = mysqli_query($con,$reservations_sql);

    while($row=mysqli_fetch_assoc($reservations_result)){
      $reservation_ID = $row['records_transaction_no'];
      $reservation_name =	$row['t_name'];
      $reservation_total = $row['total'];
     // $Category = $row['category'];
      $reservations_date = $row['date_created'];
      $Rtable .= '  <tr>
                              <td>'.$reservation_ID.'</td>
                              <td>'.$reservations_date.'</td>
                              <td>'.$reservation_name.'</td>
                              <td>'.$reservation_total.'</td>
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