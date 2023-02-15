<?php
//connection to database
include 'connection.php';

$records_per_page = 10; // number of records per page
////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST["reservequery"])) {
  $search = mysqli_real_escape_string($con, $_POST["reservequery"]);
  $query = "SELECT * FROM `transac_reserv_records` 
  WHERE records_transaction_no LIKE '%" . $search . "%'
  OR t_name LIKE '%" . $search . "%'
  OR total LIKE '%" . $search . "%' 
  OR reserv_date_start LIKE '%" . $search . "%'
  OR reserv_date_end LIKE '%" . $search . "%' 
  OR authorization_type LIKE '%" . $search . "%' 
  OR date_created LIKE '%" . $search . "%'
  OR discount LIKE '%" . $search . "%' 
  OR remarks LIKE '%" . $search . "%' 

 ";
} 
else {
$query = "SELECT COUNT(*) as total_records FROM `transac_reserv_records` ORDER BY records_transaction_no";
$result = mysqli_query($con, $query);

$total_rows = mysqli_fetch_array($result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);

if (isset($_POST["page"])) {
  $page = $_POST["page"];
} else {
  $page = 1;
}
$start_from = ($page - 1) * $records_per_page;
$query = "SELECT * FROM `transac_reserv_records` ORDER BY records_transaction_no  LIMIT $start_from, $records_per_page";
}

$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
  $Rtable ='<table class="table">
    <thead>
      <tr>
        <th>Transaction No.</th>
        <th>Full Name</th>
        <th>Duration</th>
        <th>Total</th>
        <th>Payment</th>
        <th>Balance</th>
        <th>Remarks</th>
        <th>Date</th>
        <th>Authorization</th>
        <th>Details</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>';
  while($row=mysqli_fetch_assoc($result)){
      $reservation_ID = $row['records_transaction_no'];
      $reservation_name =	$row['t_name'];
      $fromdate = $row['reserv_date_start'];
      $todate = $row['reserv_date_end'];
      $reservation_total = $row['total'];
      $reservation_discount = $row['discount'];
      $reservation_remarks = $row['remarks'];
      $reservation_reserv_payment = $row['reserv_payment'];
      $reservation_reserv_change = $row['reserv_change'];
      $reservation_remaining_balance = $row['remaining_balance'];
      $authorization = $row['authorization_type'];
      $reservations_date = $row['date_created'];
      $Rtable .= '  <tr>
                          <td>'.$reservation_ID.'</td>
                          <td>'.$reservation_name.'</td>
                          <td>'.$fromdate.' <b>-</b> '.$todate.'</td>
                          <td>'.$reservation_total.'</td>
                   
                          <td>'.$reservation_reserv_payment.'</td>
                  
                          <td>'.$reservation_remaining_balance.'</td>
                          <td>'.$reservation_remarks.'</td>
                          <td>'.$reservations_date.'</td>
                          <td>'.$authorization.'</td>
                          <td><button id="btn_view_reserv" class="btn_view_reserv btn btn-primary" name="view_button" onclick="view_edit_reservation(\''.$reservation_ID.'\')"><i class="fa-solid fa-eye"></i></button></td>
                          <td> <button  id="btn_update_reserv" class="btn_update_reserv  btn btn-primary" name="edit_button" onclick="view_update_reservation(\''.$reservation_ID.'\')" ><i class="fa-solid fa-pen"></i></button> </td>
                          <td><button class="btn btn-danger" id="btn_delete_reserv"  onclick="delete_reservation(\''.$reservation_ID.'\')"> <i class="fa-solid fa-trash"></i></button></td>
                      <tr>';
  }
$Rtable .= '</tbody></table>';
// Add the pagination links
$query = "SELECT COUNT(*) as total_records FROM `transac_reserv_records`";
$total_pages_result = mysqli_query($con, $query);
$total_rows = mysqli_fetch_array($total_pages_result);
$total_pages = ceil($total_rows["total_records"] / $records_per_page);
$page = 1;
$pagination = '<nav aria-label="Page navigation">
<ul class="pagination">';
if($page > 1){
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table('.($page - 1).')">Previous</a></li>';
}

// Page numbers
for ($i = 1; $i <= $total_pages; $i++) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table('.$i.')">'.$i.'</a></li>';
}

// Next button
if($page < $total_pages) {
$pagination .= '<li class="page-item"><a class="page-link" onclick="Get_Reservations_Table('.($page + 1).')">Next</a></li>';
}

$pagination .= '</ul></nav>';
// Concatenate the pagination links and the table
$Rtable=  $Rtable. $pagination;

echo $Rtable;
}
else {
echo 'Data Not Found ';
}


?>
<!--FOR SHOW MODAL-->
<div class="modal fade" id="reserv_receipt_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Reservation Details</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
        </div>
        <div class="modal-body ps-5 pe-5">
        
        <span hidden>transaction number</span>
        <input id="r_modal_transno" hidden>
          <div id="reserv_receipt-division"></div>

        </div>
        <div class="modal-footer d-flex justify-content-between ">
          <button type="button" class="btn btn-primary" id="resend_reservation">Resend Receipt</button>
          <!--<button type="button" class="btn btn-primary" id="edit_reservation" onclick="">Update Payment</button>-->
        </div>
      </div>
    </div>
  </div>
<!--FOR SHOW End-->
<!--FOR SHOW MODAL-->
<div class="modal fade" id="reserv_update_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Payment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id=""></button>
        </div>
        <div class="modal-body ps-5 pe-5">
      <div id="message-reservation_update"></div>
        <div class="input-group mb-3">
          <span class="input-group-text">Transaction No.</span>
          <input type="text" id="r_modal_transno_e" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"disabled>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" >Total</span>
          <input type="text" id="r_total" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled readonly>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Payment</span>
          <input type="text" id="r_payment" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Change</span>
          <input type="text" id="r_change" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"disabled>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">Remaining Balance</span>
          <input type="text" id="r_balance" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-primary"  onclick="update_reservation()" id="update_reservation">Update</button>
          <!--<button type="button" class="btn btn-primary" id="edit_reservation" onclick="">Update Payment</button>-->
        </div>
      </div>
    </div>
  </div>
<!--FOR SHOW End-->

<!-- DeleteModal -->
<div class="modal fade" id="deletereservationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <input type="" name="reservationdelete_id" id="reservationdelete_id">
                    <p>Are you sure you want to cancel this reservation?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btn_close">Cancel</button>
                    <button type="button" class="btn btn-danger" name="btn_deletereservation" id="btn_deletereservation">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
  function view_edit_reservation(transno){
    $("#r_modal_transno").val(transno);

    var transaction_id = $("#r_modal_transno").val();
        $.ajax({
            type: "POST",
            url: "adminViews/includes/Act-view_all_transaction_reserv.php",
            data: { transaction_id: transaction_id},
            success: function(data) {
                $("#reserv_receipt-division").html(data);
            }
        });
        $("#reserv_receipt_Modal").modal("show");
    }


  function view_update_reservation(transno) {
    // to show the current data
    $('#r_modal_transno_e').val(transno);
    $.post("adminViews/includes/Act-reserve-edit-update.php", {
      transno:transno
    }, function(data, status) {
      var reserve = JSON.parse(data);
      $('#r_total').val(reserve.total);
      $('#r_payment').val(reserve.reserv_payment);
      $('#r_change').val(reserve.reserv_change);
      $('#r_balance').val(reserve.remaining_balance);
      // Enable the input fields to allow editing
      $('#r_total').prop('disabled', false);
      $('#r_payment').prop('disabled', false);
      $('#r_balance').prop('disabled', false);
    });
    $("#reserv_update_Modal").modal("show");
  }

  function update_reservation() {
    var transno= $('#r_modal_transno_e').val();
    var r_change = $('#r_change').val();
    var r_total = $('#r_total').val();
    var r_payment = $('#r_payment').val();
    var r_balance = $('#r_balance').val();

    $.post('adminViews/includes/Act-reserve-edit-updates.php', {
      transno:transno,
      r_total:r_total,
      r_change:r_change,
      r_payment:r_payment,
      r_balance:r_balance
    }, function(data, status) {
      $('#reserv_update_Modal').modal('show');
      $('#message-reservation_update').html(data);
      // Disable the input fields again after updating
      $('#r_total').prop('disabled', true);
      $('#r_payment').prop('disabled', true);
      $('#r_balance').prop('disabled', true);
    });
  }
  $('#r_payment').on('change', function() {
    var r_total = parseFloat($('#r_total').val());
    var r_payment = parseFloat($('#r_payment').val());

    if (r_total > r_payment) {
      // Calculate balance
      var r_balance = r_total - r_payment;
      $('#r_change').val('0.00');
      $('#r_balance').val(r_balance.toFixed(2));
    } else if (r_total < r_payment) {
      // Calculate change
      var r_change = r_payment - r_total;
      $('#r_balance').val('0.00');
      $('#r_change').val(r_change.toFixed(2));
    } else {
      // r_total equals r_payment
      $('#r_change').val('0.00');
      $('#r_balance').val('0.00');
    }
  });
    //DELETE OWNER RECORDS
    function delete_reservation(deletereserve){
   $("#reservationdelete_id").val(deletereserve);
      var Delete_transaction = $("#reservationdelete_id").val();

      $('#deletereservationModal').modal('show');
      $(document).on('click', '#btn_deletereservation', function() {
                $.ajax({
                    url: 'adminViews/includes/Act-DeleteReservation.php',
                    method: 'post',
                    data: {
                        Deletetrans: Delete_transaction
                    },
                    success: function(data) {
                        $('#deletereservationModal').modal('hide');
                        $('#delete-message-trans').html(data); //.hide(5000);

                    }
                })
            })
        }
    
</script>