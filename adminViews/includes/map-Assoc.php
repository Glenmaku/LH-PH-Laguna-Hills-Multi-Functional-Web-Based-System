<?php

include ('connection.php');

if(isset($_POST['mapAssocSend'])) {
        $sql = "SELECT Lot_ID, Monthly_Dues, Yearly_Dues, Dues_Status, date_assigned, DueRemarks FROM association_dues";
 // $sql = "SELECT * FROM `association_dues`";
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

        <div class="input-group">
                <span class="input-group-text">Block and Lot</span>
                <input type="text" id="Lot_ID" class="form-control" value ="'.$Lot_ID.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Monthly Dues</span>
                <input type="number" id="Monthly_Dues" class="form-control" value ="'.$Monthly_Dues.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Yearly Dues</span>
                <input type="number" id="Yearly_Dues" class="form-control" value ="'.$Yearly_Dues.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Status</span>
                <input type="text" id="Dues_Status" class="form-control" value ="'.$Dues_Status.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Date Assigned</span>
                <input type="date" id="date_assigned" class="form-control" value ="'.$date_assigned.'" disabled>
        </div>
        <div class="input-group">
                <span class="input-group-text">Remarks</span>
                <textarea class="form-control" id="remarks" disabled>'.$Remarks.'</textarea>
        </div>
        <button class="edit-info" id="editModal-assoc-btn"><i class="fa-solid fa-pen"></i> Edit Information</button>
        <button class="edit-info" id="assocupdateModal-btn" hidden onclick="Update_Assoc_Data()"><i class="fa-solid fa-pen"></i>Update Information</button>';

      
  }
  echo $table;
}
?>


  <script>
    $(document).ready(function(){
    $("#editModal-assoc-btn").click(function(){
        $("input").prop("disabled", false); // enable the input fields
        $("textarea").prop("disabled", false); // enable the textarea
        $("#assocupdateModal-btn").prop("hidden", false);
        $(this).hide(); // hide the edit button
        $("#assocupdateModal-btn").show(); // show the update button
    });
});
</script><script>
function Update_Assoc_Data(){
//$(document).on("click", "#lotupdateModal-btn", function(){

        var Lot_ID = $("#Lot_ID").val();     
        var Monthly_Dues = $("#Monthly_Dues").val();
        var Yearly_Dues= $("#Yearly_Dues").val();
        var Dues_Status = $("#Dues_Status").val();
        
        var Date_Assigned = $("#date_assigned").val();

        var Remarks = $("#remarks").val();
    $.ajax({
        url: "adminViews/includes/Act-update_assoc_dues.php",
        type: "POST",
        data: {
            Lot_ID: Lot_ID,
            Monthly_Dues:Monthly_Dues,
            Yearly_Dues:Yearly_Dues,
            Dues_Status:Dues_Status,
            Date_Assigned:Date_Assigned,
            Remarks: Remarks
        },
        success: function(data){

                alert('Update successful');
            $("#assocupdateModal-btn").hide(); // hide the update button
            $("#editModal-assoc-btn").show(); // show the edit button
            $("input").prop("disabled", true); // disable the input fields
            $("textarea").prop("disabled", true); // disable the textarea
        }
    });


} </script>