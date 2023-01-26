  <?php

  include ('connection.php');

     

      if(isset($_POST['mapDataSend'])){
      $sql= "SELECT * FROM `lot_information`";
      $result=mysqli_query($con,$sql);
      while($row=mysqli_fetch_assoc($result)){
          $Lot_ID= $row['Lot_ID'];
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
          <input name="lotedit-id" id="lotedit-id"  value="'.$Lot_ID.'" readonly>
          <button class="edit-info" id="loteditModal-btn"><i class="fa-solid fa-pen"></i> Edit Information</button>
          <button class="edit-info" id="lotupdateModal-btn" ><i class="fa-solid fa-pen"></i>Update Information</button>
  </div>';
      }
      echo $table;
  }
  ?>    

  <!--<button class="edit-info" id="loteditModal-btn" type="button" data-toggle="modal" data-target="#loteditModal"><i class="fa-solid fa-pen"></i> Edit Information</button>-->
  <script>
    $(document).ready(function(){
    $("#loteditModal-btn").click(function(){
        $("input").prop("disabled", false); // enable the input fields
        $("textarea").prop("disabled", false); // enable the textarea
        $(this).hide(); // hide the edit button
        $("#lotupdateModal-btn").show(); // show the update button
    });
});

$(document).on("click", "#lotupdateModal-btn", function(){
  // var Lot_ID = $("#lotedit-id").val();
 
    var Block = $("#block").val();
    var Lot = $("#lot").val();
    var Street = $("#street").val();
    var Status = $("#status").val();
    var Area = $("#area-per-sqm").val();
    var Price = $("#price").val();
    var Remarks = $("#remarks").val();

    $.ajax({
        url: "adminViews/includes/Act-update_map_lot.php",
        type: "POST",
        data: {
            Lot_ID: Lot_ID,
            Block: Block,
            Lot: Lot,
            Street: Street,
            Status: Status,
            Area: Area,
            Price: Price,
            Remarks: Remarks
        },
        success: function(data){
          console.log(data);
            alert("Data has been updated successfully!");
            $("#lotupdateModal-btn").hide(); // hide the update button
            $("#loteditModal-btn").show(); // show the edit button
            $("input").prop("disabled", true); // disable the input fields
            $("textarea").prop("disabled", true); // disable the textarea
        }
    });
});

  </script>
