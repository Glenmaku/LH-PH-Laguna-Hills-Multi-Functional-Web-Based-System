<?php
include 'connection.php';


session_start();
$username = $_SESSION['owner_username'];

if (isset($_POST['DBstatusSend'])) {

    $Table = ' <table class="table dash-status">
    <thead>
  <tr scope="row">
    <div class="dashboard-home">
        <div class="dash-desc">
          <h1></h1>
          <h3></h3>
        <h5></h5>
      </div>
  </div>
  </tr>
  </thead>
    ';
}

    $sql = "SELECT *, assigned_lot.owner_username FROM association_dues 
            JOIN assigned_lot ON association_dues.Lot_ID = assigned_lot.lot_id ";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['owner_username'] == $username) {
            $Lot_ID = $row['Lot_ID'];
            $Status = $row['Dues_Status'];
            $Balance = $row['Balance'];

            $Table .= ' <td >
            <div class="dashboard-home">
          <div class="dash-desc">
              <h1>'.$Lot_ID.'</h1>
              <h3>'.$Status.'</h3>
              <h5>'.$Balance.'</h5>
          </div>
            </td>';
        }
    }
    $Table .= '</table>';

    echo $Table;

?>
