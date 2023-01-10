<?php
    include 'connection.php';

    if(isset($_POST['displaySend'])){
        $accountTable= '<table class="table">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">actions</th>
          </tr>
        </thead>';

        $sql = "SELECT * FROM `admin_accounts`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $adminId = $row['admin_id'];
            $fname = $row['admin_fname'];
            $lame = $row['admin_lname'];
            $user = $row['admin_username'];
            $email = $row['admin_email'];
            $accountTable.= 'tr>
            <td scope="row">'.$adminId.'</td>
            <td>'.$fname.'</td>
            <td>'.$lame.'</td>
            <td>'.$user.'</td>
            <td>'.$email.'</td>
          </tr>';
        }
        $accountTable.='</table>';
        echo  $accountTable;
    }
?>