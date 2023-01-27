<?php
require_once("connection.php");
/////////////////////////////////////////////////////////////

if(isset($_POST['Others_Rec'])){
    $records_per_page = 10; // number of records per page
    $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
    $start_from = ($page - 1) * $records_per_page; // start from record
    $Otable ='<table class="table">
    <thead>
      <tr>
        <th>Transaction No.</th>
        <th>Date</th>
        <th>Full Name</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
        
      
      </tr>
    </thead>
    <tbody>';
    
    $others_sql = "SELECT * FROM transac_other ORDER BY transaction_no LIMIT $start_from, $records_per_page";
    $others_result = mysqli_query($con,$others_sql);

    while($row=mysqli_fetch_assoc($others_result)){
      $others_ID = $row['transaction_no'];
      $others_name =	$row['t_name'];
      $Category = $row['category'];
      $Quantity = $row ['quantity'];
      $Price = $row['price'];
      $Subtotal = $row['subtotal'];
      $otherss_date = $row['created_at'];
      $Otable .= '  <tr>
                              <td>'.$others_ID.'</td>
                              <td>'.$otherss_date.'</td>
                              <td>'.$others_name.'</td>
                               <td>'.$Category.'</td>
                               <td>'.$Quantity.'</td>
                               <td>'.$Price.'</td>
                               <td>'.$Subtotal.'</td>
                             
                              
                      <tr>';
  }
$Otable .= '</tbody></table>';
  // Add the pagination links
  $othersquery = "SELECT COUNT(*) as total_records FROM `transac_other`";
  $total_pages_result = mysqli_query($con, $othersquery);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $pagination = '<nav aria-label="Page navigation">
        <ul class="pagination">';
  if ($page > 1) {
    $previous = $page - 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Others_Services_Table(' . $previous . ')">Previous</a></li>';
  }
  for ($i = 1; $i <= $total_pages; $i++) {
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Others_Services_Table(' . $i . ')">' . $i . '</a></li>';
  }
  if ($page < $total_pages) {
    $next = $page + 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Others_Services_Table(' . $next . ')">Next</a></li>';
  }
  $pagination .= '</ul></nav>';

  // Concatenate the pagination links and the table
  $Otable=  $Otable . $pagination;

  echo $Otable;

}

else {
    echo 'Data Not Found ';
  }

?>