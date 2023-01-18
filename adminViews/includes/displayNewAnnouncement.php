<?php
    include 'connection.php';

    if(isset($_POST['announcementSend'])){
        // Set the number of records to be displayed per page
        $records_per_page = 10;

        // Get the current page number
        $page = isset($_POST["page"]) ? (int)$_POST["page"] : 1;

        // Calculate the start index for the current page
        $start_from = ($page - 1) * $records_per_page;

        $announcementTable= '<table class="table ">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            <th scope="col style="width: 40%;"">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>';

        $sql = "SELECT * FROM announcement_tb ORDER BY announcement_no DESC LIMIT $start_from, $records_per_page";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $announcementId = $row['announcement_no'];
            $title = $row['announcement_title'];
            $description = substr($row['announcement_description'], 0, 30) . "...";
            $announcement_date = $row['announcement_date'];
            $announcementTable.= '<tr>
            <td scope="row">'.$announcementId.'</td>
            <td>'.$title.'</td>
            <td style="width: 40%;">'.$description.'</td>
            <td>'.$announcement_date.'</td>
            <td><button class="btn btn-success"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-success" onclick="getDetails('.$announcementId.')"> <i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-danger" onclick="deleteUser('.$announcementId.')"> <i class="fa-solid fa-trash"></i></button></td>
            </tr>';
            }
            $announcementTable.='</table>';
           // Add the pagination links
           $query = "SELECT COUNT(*) as total_records FROM announcement_tb";
           $total_pages_result = mysqli_query($con, $query);
           $total_rows = mysqli_fetch_array($total_pages_result);
           $total_pages = ceil($total_rows["total_records"] / $records_per_page);
           $pagination = '<nav aria-label="Page navigation">
           <ul class="pagination">';
           if($page > 1) {
               $previous = $page - 1;
               $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage('.$previous.')">Previous</a></li>';
           }
           for ($i = 1; $i <= $total_pages; $i++) {
               $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage('.$i.')">'.$i.'</a></li>';
           }
           if($page < $total_pages) {
               $next = $page + 1;
               $pagination .= '<li class="page-item"><a class="page-link" onclick="getPage('.$next.')">Next</a></li>';
           }
           $pagination .= '</ul></nav>';
       
           // Concatenate the pagination links and the table
           $announcementTable =  $announcementTable . $pagination;
       
           echo $announcementTable;
        }else {
          echo 'Data Not Found ';
      }
?>  
        
        
        
        
