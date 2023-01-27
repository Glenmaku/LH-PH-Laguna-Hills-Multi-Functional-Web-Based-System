<?php
require_once("connection.php");
/////////////////////////////////////////////////////////////

if(isset($_POST['Assoc_Rec'])){
    $records_per_page = 10; // number of records per page
    $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
    $start_from = ($page - 1) * $records_per_page; // start from record
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
    
    $assoc_sql = "SELECT * FROM transaction_assoc ORDER BY transaction_num LIMIT $start_from, $records_per_page";
    $assoc_result = mysqli_query($con,$assoc_sql);

    while($row=mysqli_fetch_assoc($assoc_result)){
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
  $assocquery = "SELECT COUNT(*) as total_records FROM `transaction_assoc`";
  $total_pages_result = mysqli_query($con, $assocquery);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $pagination = '<nav aria-label="Page navigation">
        <ul class="pagination">';
  if ($page > 1) {
    $previous = $page - 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Association_Dues_Table(' . $previous . ')">Previous</a></li>';
  }
  for ($i = 1; $i <= $total_pages; $i++) {
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Association_Dues_Table(' . $i . ')">' . $i . '</a></li>';
  }
  if ($page < $total_pages) {
    $next = $page + 1;
    $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Association_Dues_Table(' . $next . ')">Next</a></li>';
  }
  $pagination .= '</ul></nav>';

  // Concatenate the pagination links and the table
  $Astable=   $Astable . $pagination;

  echo  $Astable;
}
else {
    echo 'Data Not Found ';
  }

/////////////////////////////////////////////////////////////

///else if(isset($_POST['Reservations_Rec'])){
 //   $records_per_page = 10; // number of records per page
   // $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
  ////  $start_from = ($page - 1) * $records_per_page; // start from record

//}

/////////////////////////////////////////////////////////////

//else if(isset($_POST['Other_Rec'])){
  //  $records_per_page = 10; // number of records per page
  //  $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1; // current page number
   // $start_from = ($page - 1) * $records_per_page; // start from record
    
////}

/////////////////////////////////////////////////////////////

?>