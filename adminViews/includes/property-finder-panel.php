<?php

include ('connection.php');

if(isset($_POST['mapDataSend'])){
  $sql = "SELECT Lot_ID, Block, Lot, Street, Status, Area FROM `lot_information`";
  $result = mysqli_query($con, $sql);
  $table = '<div class="finder" id="finder-panel">
              <h3>LOT INFORMATION</h3>';

  while($row = mysqli_fetch_assoc($result)){
      $Block = $row['Block'];
      $Lot = $row['Lot'];
      $Street = $row['Street'];
      $Status = $row['Status'];
      $Area = $row['Area'];
      $table .= '
      <div class="input-group">
              <span class="input-group-text">Block</span>
              <input type="text" id="finder-block" class="form-control" value="'.$Block.'" disabled>
              <span class="input-group-text">Lot</span>
              <input type="text" id="finder-lot" class="form-control" value="'.$Lot.'" disabled>
      </div>
      <div class="input-group">
              <span class="input-group-text">Street</span>
              <input type="text" id="finder-street" class="form-control" value="'.$Street.'" disabled>
      </div>
      <div class="input-group">
              <span class="input-group-text">Status</span>
              <input type="text" id="finder-status" class="form-control" value="'.$Status.'" disabled>
      </div>
      <div class="input-group">
              <span class="input-group-text">Area per Sqm</span>
              <input type="text" id="finder-area-per-sqm" class="form-control" value="'.$Area.'" disabled>
      </div>';
  }
  $table .= '</div>';
  echo $table;
}
?>
