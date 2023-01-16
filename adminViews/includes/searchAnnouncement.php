<?php
//connection to database
include 'connection.php';


if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    $query = "SELECT * FROM `announcement_tb` 
  WHERE announcement_title LIKE '%" . $search . "%'";
} else {
    $query = "SELECT * FROM `announcement_tb` ORDER BY announcement_no";
}
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
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
    while ($row = mysqli_fetch_array($result)) {
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
} else {
    echo 'Data Not Found ';
}
