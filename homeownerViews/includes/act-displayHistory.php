<?php
include 'connection.php';

if (isset($_POST['historySend'])) {
    // Set the number of records to be displayed per page
    $records_per_page = 10;

    // Get the current page number
    $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1;

    // Calculate the start index for the current page
    $start_from = ($page - 1) * $records_per_page;

    $Table = '<table class="table">
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
        </thead>';
        
        
    $sql = "SELECT * FROM transaction_assoc ORDER BY transaction_num LIMIT $start_from, $records_per_page";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $assoc_no = $row['transaction_num'];
        $assoc_date = $row['assoc_date_payment'];
        $Lot_ID = $row['Lot_ID'];

        $assoc_bal = $row['assoc_selectedBal'];
        $assoc_payment = $row['assoc_payment'];
        $assoc_change = $row['assoc_change'];
        $assoc_penalty = $row['assoc_penalty'];
        $assoc_discount = $row['assoc_discount'];

        $assoc_remarks = $row['assoc_remarks'];
        $Table .= '  <tr>
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
  $Table .= '</table>';
    // Add the pagination links
    $query = "SELECT COUNT(*) as total_records FROM `transaction_assoc`";
    $total_pages_result = mysqli_query($con, $query);
    $total_rows = mysqli_fetch_array($total_pages_result);
    $total_pages = ceil($total_rows["total_records"] / $records_per_page);
    $pagination = '<nav aria-label="Page navigation">
           <ul class="pagination">';
    $page = 1;
    if ($page > 1) {
        $previous = $page - 1;
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $previous . ')">Previous</a></li>';
    }
    for ($i = 1; $i <= $total_pages; $i++) {
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $i . ')">' . $i . '</a></li>';
    }
    if ($page < $total_pages) {
        $next = $page + 1;
        $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage(' . $next . ')">Next</a></li>';
    }
    $pagination .= '</ul></nav>';

    // Concatenate the pagination links and the table
    $Table =  $Table . $pagination;

    echo $Table;
} else {
    echo 'Data Not Found ';
}
