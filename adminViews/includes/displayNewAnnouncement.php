<?php
    include 'connection.php';

    if(isset($_POST['announcementSend'])){
        $announcementTable= '<table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>';

        $sql = "SELECT * FROM `announcement_tb`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $announcementId = $row['announcement_no'];
            $title = $row['announcement_title'];
            $description = $row['announcement_description'];
            $announcement_date = $row['announcement_date'];
            $announcementTable.= '<tr>
            <td scope="row">'.$announcementId.'</td>
            <td>'.$title.'</td>
            <td>'.$description.'</td>
            <td>'.$announcement_date.'</td>
            <td><button class="btn btn-success"><i class="fa-solid fa-eye"></i></button>
            <button class="btn btn-success" onclick="getDetails('.$announcementId.')"> <i class="fa-solid fa-pen"></i></button>
            <button class="btn btn-danger" onclick="deleteUser('.$announcementId.')"> <i class="fa-solid fa-trash"></i></button></td>
          </tr>';
        }
        $announcementTable.='</table>';
        echo $announcementTable;
    }
?>
