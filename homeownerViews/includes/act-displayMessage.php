<?php
    include 'connection.php';

    if(isset($_POST['messageSend'])){
        // Set the number of records to be displayed per page
        $records_per_page = 8;

        // Get the current page number
        $page = isset($_POST["messagePage"]) ? (int)$_POST["messagePage"] : 1;

        // Calculate the start index for the current page
        $start_from = ($page - 1) * $records_per_page;

        $Table= '<table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col style="width: 40%;"">Description</th>
            <th scope="col">Date</th>
          </tr>
        </thead>';

        $sql = "SELECT * FROM message_tb ORDER BY message_id DESC LIMIT $start_from, $records_per_page";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $message_id = $row['message_id'];
            $title = $row['message_title'];
            $description = substr($row['email_desc'], 0, 30) . "...";
            $message_date = $row['message_date'];
            $Table.= '<tr>
            <td scope="row">'.$title.'</td>
            <td style="width: 40%;">'.$description.'</td>
            <td>'.$message_date.'</td>
            </tr>';
            }
            $Table.='</table>';
           // Add the pagination links
           $query = "SELECT COUNT(*) as total_records FROM message_tb";
           $total_pages_result = mysqli_query($con, $query);
           $total_rows = mysqli_fetch_array($total_pages_result);
           $total_pages = ceil($total_rows["total_records"] / $records_per_page);
           $pagination = '<nav aria-label="Page navigation">
           <ul class="pagination">';
           $page = 1;
           if($page > 1) {
               $previous = $page - 1;
               $pagination .= '<li class="page-item"><a class="page-link" onclick="getMessagePage('.$previous.')">Previous</a></li>';
           }
           for ($i = 1; $i <= $total_pages; $i++) {
               $pagination .= '<li class="page-item"><a class="page-link" onclick="getMessagePage('.$i.')">'.$i.'</a></li>';
           }
           if($page < $total_pages) {
               $next = $page + 1;
               $pagination .= '<li class="page-item"><a class="page-link" onclick="getMessagePage('.$next.')">Next</a></li>';
           }
           $pagination .= '</ul></nav>';
       
           // Concatenate the pagination links and the table
           $Table =  $Table . $pagination;
       
           echo $Table;
        }else {
          echo 'Data Not Found ';
      }
?>  
        
        
        
        
