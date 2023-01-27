<?php
//connection to database
include 'connection.php';

$records_per_page = 10; // number of records per page
////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST["alltransquery"])) {
        $search = mysqli_real_escape_string($con, $_POST["alltransquery"]);
        $query = "SELECT * FROM `all_transaction` 
        WHERE transaction_num LIKE '%" . $search . "%'
        OR transaction_name LIKE '%" . $search . "%' 
        OR Category LIKE '%" . $search . "%' 
        OR  transaction_date LIKE '%" . $search . "%' ";
} 
else {
    $query = "SELECT COUNT(*) as total_records FROM `all_transaction` ORDER BY transaction_num";
    $result = mysqli_query($con, $query);

    $total_rows = mysqli_fetch_array($result);
    $total_pages = ceil($total_rows["total_records"] / $records_per_page);
    
    if (isset($_POST["page"])) {
        $page = $_POST["page"];
    } else {
        $page = 1;
    }
    $start_from = ($page - 1) * $records_per_page;
    $query = "SELECT * FROM `all_transaction` ORDER BY transaction_num LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    $AllTransaction_table ='<table class="table">
    <thead>
      <tr>
            <th scope="col">Transaction No.</th>
            <th scope="col">Full Name</th>
            <th scope="col">Category</th>
            <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>';
    while($row=mysqli_fetch_assoc($result)){
        $Transaction_ID = $row['transaction_num'];
        $transaction_name =	$row['transaction_name'];
        $Category = $row['Category'];
        $transaction_date = $row['transaction_date'];
        $AllTransaction_table .= '  <tr>
                                        <td>'.$Transaction_ID.'</td>
                                        <td>'.$transaction_name.'</td>
                                        <td>'.$Category.'</td>
                                        <td>'.$transaction_date.'</td>
                                    <tr>';
                                    
}
$AllTransaction_table .= '</tbody></table>';
   // Add the pagination links
  $query = "SELECT COUNT(*) as total_records FROM `all_transaction`";
  $total_pages_result = mysqli_query($con, $query);
  $total_rows = mysqli_fetch_array($total_pages_result);
  $total_pages = ceil($total_rows["total_records"] / $records_per_page);
  $page = 1;
  $pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_All_Transaction_Table('.($page - 1).')">Previous</a></li>';
  }
  
  // Page numbers
  for ($i = 1; $i <= $total_pages; $i++) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_All_Transaction_Table('.$i.')">'.$i.'</a></li>';
  }
  
  // Next button
  if($page < $total_pages) {
  $pagination .= '<li class="page-item"><a class="page-link" onclick="Get_All_Transaction_Table('.($page + 1).')">Next</a></li>';
  }
  
  $pagination .= '</ul></nav>';
  // Concatenate the pagination links and the table
  $AllTransaction_table =  $AllTransaction_table . $pagination;

  echo $AllTransaction_table;
} else {
  echo 'Data Not Found ';
}
?>