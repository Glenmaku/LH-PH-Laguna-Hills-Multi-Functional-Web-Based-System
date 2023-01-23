<?php

include ('connection.php');


    if(isset($_POST['mapAssocSend'])){
    $sql= "SELECT * FROM `association_dues`";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $Lot_ID=$row['Lot_ID'];
        $Dues=$row['Monthly_Dues'];
        $Yearly=$row['Yearly_Dues'];
        $Status=$row['Status'];
        $Remarks=$row['Remarks'];
        $table='
        <div class="panel-content" id="panel">
        <h3>ASSOCIATION DUES</h3>

        <div class="input-group">
                <span class="input-group-text">Monthly Dues</span>
                <input type="text" id="street" class="form-control" value ="'.$Dues.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Yearly Dues</span>
                <input type="text" id="status" class="form-control" value ="'.$Yearly.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Status</span>
                <input type="text" id="area-per-sqm" class="form-control" value ="'.$Status.'" disabled>
        </div>

        <div class="input-group">
                <span class="input-group-text">Remarks</span>
                <textarea class="form-control" id="remarks" disabled>'.$Remarks.'</textarea>
        </div>
        <button class="edit-info" type="button" data-toggle="modal" data-target="#editModal"><i class="fa-solid fa-pen"></i> Edit Information</button>
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
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
          <!-- Form fields here -->
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
?>    