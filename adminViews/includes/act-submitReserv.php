<div>
    <div class="transaction-history">
        <button data-bs-toggle="modal" data-bs-target="#reservation-history-modal"><i class="fa-solid fa-clock-rotate-left"></i> Reservation History</button>
    </div>
    <div class="payment">
        <span>Total:</span>
        <input type="text" class="form-control" name="total" id="total" value="0" disabled>
        <span>Payment:</span>
        <input type="text" class="form-control" name="payment" id="payment" value="0" placeholder="Enter amount..." onchange="calculate();">
        <span>Change:</span>
        <input type="text" class="form-control" name="change" id="change" value="0" disabled>
        <span>Remaining Balance:</span>
        <input type="text" class="form-control" name="remaining-balance" id="remaining-balance" value="0" disabled>
        <span>Remarks:</span>
        <textarea placeholder="Type here.."></textarea>
        <button type="submit" id="ro_submit">Submit</button>
        <button type="reset" id="reset">Reset Form</button>
    </div>
</div>

<div class="modal modal-lg" tabindex="-1" id="reservation-history-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body reserveTable">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
   $(document).ready(function() {
        $("#ro_submit").on("click", add_data);
    });

    function add_data() {
        // code that might throw an error

        var checkbox_hall = ["#radio-hall"];
        var checkbox_court = ["#radio-court"];
        var checkbox_miming = ["#radio-miming"];

        var trans_no = $("#trans-no").val();
        var nameadd = $("#client-name").val();
        var from_reservation_date_string = $("#from-reservation-date").val();
        var to_reservation_date_string = $("#to-reservation-date").val();
        var price_hall = $("#in-radio-hall3").val();
        var price_court = $("#in-radio-court3").val();
        var price_miming = $("#in-radio-miming3").val();

        var hall_time_start = $("#in-radio-hall1").val();
        var hall_time_end = $("#in-radio-hall2").val();

        var court_time_start = $("#in-radio-court1").val();
        var court_time_end = $("#in-radio-court2").val();

        var miming_time_start = $("#in-radio-miming1").val();
        var miming_time_end = $("#in-radio-miming2").val();

        var from_reservation_date_string = new Date();
        var month1 = from_reservation_date_string.getUTCMonth() + 1;
        var day1 = from_reservation_date_string.getUTCDate();
        var year1 = from_reservation_date_string.getUTCFullYear();
        var from_reservation_date = year1 + "-" + month1 + "-" + day1;

        var to_reservation_date_string = new Date();
        var month2 = to_reservation_date_string.getUTCMonth() + 1;
        var day2 = to_reservation_date_string.getUTCDate();
        var year2 = to_reservation_date_string.getUTCFullYear();
        var to_reservation_date = year2 + "-" + month2 + "-" + day2;

        if ($("#radio-hall").is(":checked")) {
            // date conversion
            $.ajax({
                url: 'adminViews/insert-data-transaction-hall.php',
                type: 'post',
                data: {
                    trans_nosend: trans_no,
                    namesend: nameadd,
                    from_reservation_datesend: from_reservation_date,
                    to_reservation_datesend: to_reservation_date,
                    time_startsend: hall_time_start,
                    time_endsend: hall_time_end,
                    pricesend: price_hall
                },
                success: function(data, status) {
                    // function to display data
                    console.log(status);
                }
            });
        } else {
            console.log("function-hall is empty");
        }

        if ($("#radio-court").is(":checked")) {
            // date conversion
            $.ajax({
                url: 'adminViews/insert-data-transaction-court.php',
                type: 'post',
                data: {
                    trans_nosend: trans_no,
                    namesend: nameadd,
                    from_reservation_datesend: from_reservation_date,
                    to_reservation_datesend: to_reservation_date,
                    time_startsend: court_time_start,
                    time_endsend: court_time_end,
                    pricesend: price_court
                },
                success: function(data, status) {
                    // function to display data
                    console.log(status);
                }
            });
        } else {
            console.log("function-court is empty");
        }

        if ($("#radio-miming").is(":checked")) {
            // date conversion
            $.ajax({
                url: 'adminViews/insert-data-transaction-miming.php',
                type: 'post',
                data: {
                    trans_nosend: trans_no,
                    namesend: nameadd,
                    from_reservation_datesend: from_reservation_date,
                    to_reservation_datesend: to_reservation_date,
                    time_startsend: miming_time_start,
                    time_endsend: miming_time_end,
                    pricesend: price_miming
                },
                success: function(data, status) {
                    // function to display data
                    console.log(status);
                }
            });
        } else {
            console.log("function-miming is empty");
        }

        if ($("#radio-hall" || "#radio-court" || "#radio-miming").is(":checked")) {
            //solution to sa discount and sa total price
            var initial_discount = $("#r-discount").val() / 100;
            var reserv_discount = $("#r-discount").val();
            var initial_price = $("#in-radio-miming3").val(); + $("#in-radio-hall3").val(); + $("#in-radio-court3").val();
            var total_price = $("#in-radio-miming3").val() + $("#in-radio-hall3").val() + $("#in-radio-court3").val() - ($("#in-radio-miming3").val() + $("#in-radio-hall3").val() + $("#in-radio-court3").val() * (initial_discount));

            $.ajax({
                url: 'adminViews/insert-data-transaction-records.php',
                type: 'post',
                data: {
                    trans_nosend: trans_no,
                    namesend: nameadd,
                    totalprice_send: total_price,
                    reserv_discountsend: reserv_discount
                },
                success: function(data, status) {
                    // function to display data
                    console.log(status);
                }
            });
        }
        

        // OTHER TRANSACTION SECTION - INSERT DATA 
        //TRYING TO MAKE SOME ALERTS
        if ($("#category").val().trim() && !isNaN($("#quantity").val().trim()) && !isNaN($("#price").val().trim()) && !isNaN($("#o_subtotal").val().trim())) {
            var data = {};
            data.transaction_number = $("#trans-no").val();
            data.name = $("#client-name").val();
            data.services = [];
            data.services.push({
                category: $("#category").val(),
                quantity: $("#quantity").val(),
                price: $("#price").val(),
                subtotal: $("#o_subtotal").val()
            });
            data.services.push({
                category: $("#category1").val(),
                quantity: $("#quantity1").val(),
                price: $("#price1").val(),
                subtotal: $("#o_subtotal1").val()
            });
            data.services.push({
                category: $("#category2").val(),
                quantity: $("#quantity2").val(),
                price: $("#price2").val(),
                subtotal: $("#o_subtotal2").val()
            });
            data.services.push({
                category: $("#category3").val(),
                quantity: $("#quantity3").val(),
                price: $("#price3").val(),
                subtotal: $("#o_subtotal3").val()
            });
            data.services.push({
                category: $("#category4").val(),
                quantity: $("#quantity4").val(),
                price: $("#price4").val(),
                subtotal: $("#o_subtotal4").val()
            });
            data.services.push({
                category: $("#category5").val(),
                quantity: $("#quantity5").val(),
                price: $("#price5").val(),
                subtotal: $("#o_subtotal5").val()
            });
            $.post("adminViews/insert-data-transaction-other.php", {
                data: data
            }, function(response) {
                console.log(response);
            });
        } else {
            console.log("no input in the other services layer 1");
            if (isNaN($("#quantity").val().trim())) {
                alert("Quantity must be a number.");
            }
            if (isNaN($("#price").val().trim())) {
                alert("Price must be a number.");
            }
            if (isNaN($("#o_subtotal").val().trim())) {
                alert("Subtotal must be a number.");
            }
        }


        // end OTHER TRANSACTION SECTION - INSERT DATA


        // clear the forms after pressing the submit  
        $("#trans-no").val("");
        $("#date").val("");
        $("#client-name").val("");

        $("#from-reservation-date").val("");
        $("#to-reservation-date").val("");
        $("#in-radio-hall1").val("");
        $("#in-radio-hall2").val("");
        $("#in-radio-hall3").val("");

        $("#in-radio-court1").val("");
        $("#in-radio-court2").val("");
        $("#in-radio-court3").val("");

        $("#in-radio-miming1").val("");
        $("#in-radio-miming2").val("");
        $("#in-radio-miming3").val("");
        $("#r-discount").val("");
        $("#r-subtotal").val("");

        $("#radio-hall").prop("checked", false);
        $("#radio-court").prop("checked", false);
        $("#radio-miming").prop("checked", false);

        $("#category").val("");
        $("#quantity").val("");
        $("#price").val("");
        $("#o_subtotal").val("");

        // OTHER TRANSACTION LOOP FOR EACH ROW
        for (var i = 1; i <= 10; i++) {
            $("#category" + i).val("");
            $("#quantity" + i).val("");
            $("#price" + i).val("");
            $("#o_subtotal" + i).val("");
        }
    }
</script>