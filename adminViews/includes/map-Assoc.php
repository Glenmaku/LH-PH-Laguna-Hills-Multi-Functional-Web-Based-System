<?php

include('connection.php');


if (isset($_POST['mapAssocSend'])) {
  $sql = "SELECT * FROM `association_dues`";
  $result = mysqli_query($con, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $Lot_ID = $row['Lot_ID'];
    $Monthly_Dues = $row['Monthly_Dues'];
    $Yearly_Dues = $row['Yearly_Dues'];
    $Dues_Status = $row['Dues_Status'];
    $date_assigned = $row['date_assigned'];
    $Remarks = $row['DueRemarks'];
    $table= '
        <div class="panel-content" id="panel">
        <h3>ASSOCIATION DUES</h3>

        <div class="input-group">
                <span class="input-group-text">Block and Lot</span>
                <input type="text" id="Lot_ID" class="form-control" value ="' . $Lot_ID . '" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Monthly Dues</span>
                <input type="number" id="Monthly_Dues" class="form-control" value ="' . $Monthly_Dues . '" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Yearly Dues</span>
                <input type="number" id="Yearly_Dues" class="form-control" value ="' . $Yearly_Dues . '" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Status</span>
                <input type="text" id="Dues_Status" class="form-control" value ="' . $Dues_Status . '" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Date Assigned</span>
                <input type="" id="date_assigned" class="form-control" value ="' . $date_assigned . '" disabled>
        </div>

        <div class="input-group">
                <span class="input-group-text">Remarks</span>
                <textarea class="form-control" id="remarks" disabled>' . $Remarks . '</textarea>
        </div>
        <button class="edit-info" type="button" id="editModal-assoc-btn" data-toggle="modal" data-target="#editModal-assoc"><i class="fa-solid fa-pen"></i> Edit Information</button>';
  }
  echo $table;
}
?>
