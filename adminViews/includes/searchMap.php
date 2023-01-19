<?php
//connection to database
include 'connection.php';



if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($con, $_POST["query"]);
    $query = "SELECT * FROM `lot_information` 
  WHERE Lot_ID LIKE '%" . $search . "%'
  OR Area LIKE '%" . $search . "%'";
}else {
    $query = "SELECT * FROM `lot_information` ORDER BY Lot_ID";
}


$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fas fa-edit"></i>Edit Information</button>
</div>';
    }
    echo $table;
} else{
    echo 'Data not Found!';
}
