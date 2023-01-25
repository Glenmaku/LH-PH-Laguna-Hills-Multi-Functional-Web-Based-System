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
    $Remarks = $row['Remarks'];
    $table = '
        <div class="panel-content" id="panel">
        <h3>ASSOCIATION DUES</h3>

        <div class="input-group">
        <span class="input-group-text">Block and Lot</span>
        <input type="text" id="Lot_ID" class="form-control" value ="' . $Lot_ID . '" disabled>
        
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
        <button class="edit-info" type="button" id="editModal-assoc-btn" data-toggle="modal" data-target="#editModal-assoc"><i class="fa-solid fa-pen"></i> Edit Information</button>
        <div class="modal fade" id="editModal-assoc" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm">
        <div class="input-group">
        <span class="input-group-text">Date Assigned</span>
        <input type="" id="date_assigned" class="form-control" value ="' . $date_assigned . '">
</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>';
  }
  echo $table;
}
