<?php

include ('connection.php');


    if(isset($_POST['mapDataSend'])){
    $sql= "SELECT * FROM `lot_information`";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $Lot_ID=$row['Lot_ID'];
        $Block=$row['Block'];
        $Lot=$row['Lot'];
        $Street=$row['Street'];
        $Status=$row['Status'];
        $Area=$row['Area'];
        $Price=$row['Price'];
        $Remarks=$row['Remarks'];
        $table='
        <div class="panel-content" id="panel">
        <h3>LOT INFORMATION</h3>
        <div class="input-group">
                <span class="input-group-text">Block</span>
                <input type="text" id="block" class="form-control" value ="'.$Block.'" disabled>
                <span class="input-group-text">Lot</span>
                <input type="text" id="lot" class="form-control" value ="'.$Lot.'"disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Street</span>
                <input type="text" id="street" class="form-control" value ="'.$Street.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Status</span>
                <input type="text" id="status" class="form-control" value ="'.$Status.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Area per Sqm</span>
                <input type="text" id="area-per-sqm" class="form-control" value ="'.$Area.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">price</span>
                <input type="text" id="price" class="form-control" value ="'.$Price.'" disabled>
        </div>

        <div class="input-group">
                <span class="input-group-text">Remarks</span>
                <textarea class="form-control" id="remarks" disabled>'.$Remarks.'</textarea>
        </div>
        <input name="lotedit-id" id="lotedit-id" type="hidden">
        <button class="edit-info" id="loteditModal-btn" type="button" data-toggle="modal" data-target="#loteditModal"><i class="fa-solid fa-pen"></i> Edit Information</button>
        <div class="modal fade" id="editModal-lot" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="editForm-lot">
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