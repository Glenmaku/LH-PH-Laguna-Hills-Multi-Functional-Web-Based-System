<div>
  <div class="payment-area">
    <span>Total:</span>
    <input type="text" class="form-control reserv_total" name="reserv_total" id="reserv_total" disabled>
    <span>Payment:</span>
    <input type="text" class="form-control reserv_payment" name="reserv_payment" id="reserv_payment" value="0" placeholder="Enter amount...">
    <span>Change:</span>
    <input type="text" class="form-control reserv_change" name="reserv_change" id="reserv_change" value="0" disabled>
    <span hidden>Remaining Balance:</span>
    <input type="text" class="form-control reserv_remaining_balance" name="reserv_remaining_balance" id="reserv_remaining_balance" value="0" disabled hidden>
    <span>Remarks:</span>
    <textarea id="reserv_remark" placeholder="Type here.."></textarea>
    <button type="submit" id="reserv_submit" class="btn btn-success reserv_submit">Submit</button>
    <button type="reset" id="reserv_reset" class="btn btn-danger reserv_reset">Reset Form</button>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#reserv_submit").on("click", add_data);
  });

  function add_data(){
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
    var r_discounts = $("#r-discount").val();
    var from_reservation_date = $("#from-reservation-date").val();
    var to_reservation_date = $("#to-reservation-date").val();
  //  var from_reservation_date_string = new Date();
  //  var month1 = from_reservation_date_string.getUTCMonth() + 1;
   // var day1 = from_reservation_date_string.getUTCDate();
   // var year1 = from_reservation_date_string.getUTCFullYear();
   // var from_reservation_date = year1 + "-" + month1 + "-" + day1;

   // var to_reservation_date_string = new Date();
   // var month2 = to_reservation_date_string.getUTCMonth() + 1;
   // var day2 = to_reservation_date_string.getUTCDate();
  //  var year2 = to_reservation_date_string.getUTCFullYear();
  //  var to_reservation_date = year2 + "-" + month2 + "-" + day2;

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
          pricesend: price_hall,
          r_discounts: r_discounts
        },
        success: function(data, status) {
          // function to display data
          //console.log(status);
        }
      });
    } else {
      //console.log("function-hall is empty");
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
          pricesend: price_court,
          r_discounts: r_discounts
        },
        success: function(data, status) {
          // function to display data
       //   console.log(status);
        }
      });
    } else {
     // console.log("function-court is empty");
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
          pricesend: price_miming,
          r_discounts: r_discounts
        },
        success: function(data, status) {
          // function to display data
      //    console.log(status);
        }
      });
    } else {
  //    console.log("function-miming is empty");
    }

    if ($("#radio-hall" || "#radio-court" || "#radio-miming").is(":checked")) {
      //solution to sa discount and sa total price
      // var initial_discount = $("#r-discount").val() / 100;
      var initial_price = $("#in-radio-miming3").val(); + $("#in-radio-hall3").val(); + $("#in-radio-court3").val();

      // let totals = hall + miming + court;
      // let discountedAmount = initial_price - (initial_price * initial_discount);

      var total_price = $("#reserv_total").val();
      // (initial_price - (initial_price * (reserv_discount / 100)));

      // $("#in-radio-miming3").val() + $("#in-radio-hall3").val() + $("#in-radio-court3").val() - ($("#in-radio-miming3").val() + $("#in-radio-hall3").val() + $("#in-radio-court3").val() * (initial_discount));
      var reserv_discount = $("#r-discount").val();
      var remarks = $("#reserv_remark").val();
      var reserv_payment = $("#reserv_payment").val();
      var reserv_change = $("#reserv_change").val();
      var reserv_remaining_balance = $("#reserv_remaining_balance").val();

      $.ajax({
        url: 'adminViews/insert-data-transaction-records.php',
        type: 'post',
        data: {
          trans_nosend: trans_no,
          namesend: nameadd,
          totalprice_send: total_price,
          reserv_discountsend: reserv_discount,
          remarks_send: remarks,
          reserv_paymentsend: reserv_payment,
          reserv_changesend: reserv_change,
          reserv_remaining_balancesend: reserv_remaining_balance
        },
        success: function(data, status) {
          // function to display data
          alert(data);
          if (data === "Successfully recorded transaction") {
                    $("#client-name").val("");
                    $("#from-reservation-date").val("");
                    $("#to-reservation-date").val("");
                    $("#in-radio-hall1").val("");
                    $("#in-radio-hall2").val("");
                    $("#in-radio-hall3").val("0");

                    $("#in-radio-court1").val("");
                    $("#in-radio-court2").val("");
                    $("#in-radio-court3").val("0");

                    $("#in-radio-miming1").val("");
                    $("#in-radio-miming2").val("");
                    $("#in-radio-miming3").val("0");
                    $("#r-discount").val("0");
                
                    $("#reserv_total").val("0");
                    $("#reserv_payment").val("0");
                    $("#reserv_change").val("0");
                    $("#reserv_remark").val("0");
                    $("#radio-hall").prop("checked", false);
                    $("#radio-court").prop("checked", false);
                    $("#radio-miming").prop("checked", false); }
                     $.ajax({
                        url: 'adminViews/includes/act-transact.php',
                        type: 'post', //path to PHP script
                        success: function(data) {
                            $("#trans-no").val(data); //update input field with response from server
                        }
                    });
                       
        }
      });
    }
    // end OTHER TRANSACTION SECTION - INSERT DATA

    // clear the forms after pressing the submit  
    //$("#trans-no").val("");
  //  // $("#date").val("");
  //   $("#client-name").val("");

  //   $("#from-reservation-date").val("");
  //   $("#to-reservation-date").val("");
  //   $("#in-radio-hall1").val("");
  //   $("#in-radio-hall2").val("");
  //   $("#in-radio-hall3").val("0");

  //   $("#in-radio-court1").val("");
  //   $("#in-radio-court2").val("");
  //   $("#in-radio-court3").val("0");

  //   $("#in-radio-miming1").val("");
  //   $("#in-radio-miming2").val("");
  //   $("#in-radio-miming3").val("0");
  //   $("#r-discount").val("0");
 
  //   $("#reserv_total").val("0");
  //   $("#reserv_payment").val("0");
  //   $("#reserv_change").val("0");
  //   $("#reserv_remark").val("0");
  //   $("#radio-hall").prop("checked", false);
  //   $("#radio-court").prop("checked", false);
  //   $("#radio-miming").prop("checked", false);

  }

  function calculateTotal() {
    const hall = parseFloat(document.getElementById("in-radio-hall3").value);
    const court = parseFloat(document.getElementById("in-radio-court3").value);
    const miming = parseFloat(document.getElementById("in-radio-miming3").value);
    const discount = parseFloat(document.getElementById("r-discount").value) / 100;
    const total = hall + court + miming;
    const subtotal = total - total * discount;
    document.getElementById("reserv_total").value = subtotal.toFixed(2);
  }

  document.getElementById("in-radio-hall3").addEventListener("change", calculateTotal);
  document.getElementById("in-radio-court3").addEventListener("change", calculateTotal);
  document.getElementById("in-radio-miming3").addEventListener("change", calculateTotal);
  document.getElementById("r-discount").addEventListener("change", calculateTotal);

  let total = 0;

  document.querySelectorAll(".selected-reservation input[type=text][id^=in-radio]").forEach(input => {
    total += parseFloat(input.value);
  });

  let discount = parseFloat(document.querySelector("#r-discount").value);
  total -= discount;

  // document.querySelector("#reserv_total").value = total.toFixed(2);

  $(document).ready(function() {
    $("#r-discount").change(function() {
      let hall = parseInt($("#in-radio-hall3").val());
      let miming = parseInt($("#in-radio-miming3").val());
      let court = parseInt($("#in-radio-court3").val());
      let total = hall + miming + court;
      let discount = parseInt($("#r-discount").val());
      let discountedAmount = total - (total * discount / 100);
      $("#reserv_total").val(discountedAmount);
    });
  });

  // $("#reserv_payment").on("change", function() {
  //   // var reserv_total = parseFloat($("#reserv_total").val());
    
  //   var reserv_payment = parseFloat($("#reserv_payment").val());
  //   if (reserv_total > reserv_payment) {
  //     var reserv_remaining_balance = reserv_total - reserv_payment;
  //     $("#reserv_remaining_balance").val(reserv_remaining_balance);
  //     $("#reserv_change").val(0);
  //   } else {
  //     var reserv_change = reserv_payment - reserv_total;
  //     $("#reserv_change").val(reserv_change);
  //     $("#reserv_remaining_balance").val(0);
  //   }
  // });
  $("#reserv_payment").on("change", function() {
  var reserv_total = parseFloat($("#reserv_total").val());
  var reserv_payment = parseFloat($("#reserv_payment").val());
  if (reserv_total === reserv_payment) {
    $("#reserv_remaining_balance").val(0);
    $("#reserv_change").val(0);
  } else if (reserv_total > reserv_payment) {
    var reserv_remaining_balance = reserv_total - reserv_payment;
    $("#reserv_remaining_balance").val(reserv_remaining_balance);
    $("#reserv_change").val(0);
  } else {
    var reserv_change = reserv_payment - reserv_total;
    $("#reserv_change").val(reserv_change);
    $("#reserv_remaining_balance").val(0);
  }
});
</script>