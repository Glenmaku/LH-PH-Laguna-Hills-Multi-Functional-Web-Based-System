<div>
  <div class="payment-area">
    <span>Total:</span>
    <input type="text" class="form-control reserv_total" name="reserv_total" id="reserv_total" disabled value="0"dir="rtl">
    <span>Payment:</span>
    <input type="text" class="form-control reserv_payment border border-dark" name="reserv_payment" id="reserv_payment" value="0" placeholder="Enter amount..." dir="rtl">
    <span>Change:</span>
    <input type="text" class="form-control reserv_change" name="reserv_change" id="reserv_change" value="0" disabled dir="rtl">
    <span>Remaining Balance:</span>
    <input type="text" class="form-control reserv_remaining_balance" name="reserv_remaining_balance" id="reserv_remaining_balance" value="0" disabled dir="rtl">
    <span>Remarks:</span>
    <textarea id="reserv_remark" placeholder="Type here.." class=" border border-dark"></textarea>
    <button type="submit" id="reserv_submit" class="btn btn-success reserv_submit">Submit</button>
    <button type="reset" id="reserv_reset" class="btn btn-danger reserv_reset">Reset Form</button>
  </div>
</div>

<script>
  $(document).ready(function() {
    $("#reserv_submit").on("click", add_data);
  });

  function add_data() {
  
      var initial_price = $("#in-radio-miming3").val(); + $("#in-radio-hall3").val(); + $("#in-radio-court3").val();
      var total_price = $("#reserv_total").val();

      var t_fname = $("#first-name").val();
      var t_lname = $("#last-name").val();
      var t_email = $("#transaction-email").val();
      var admin_confirmed = $("#admin-name-trans").val();

      var reserv_discount = $("#r-discount").val();
      var remarks = $("#reserv_remark").val();
      var reserv_payment = $("#reserv_payment").val();
      var reserv_change = $("#reserv_change").val();
      var reserv_remaining_balance = $("#reserv_remaining_balance").val();

      var checkbox_hall = $("#radio-hall").is(":checked") ? $("#radio-hall").val() : "";
      var checkbox_court = $("#radio-court").is(":checked") ? $("#radio-court").val() : "";
      var checkbox_miming = $("#radio-miming").is(":checked") ? $("#radio-miming").val() : "";

      var trans_no = $("#trans-no").val();
      var trans_date = $("#date").val();
      
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

      var AuthorizeType = [];
            $('.authorization_type').each(function() {
                if ($(this).is(":checked")) {
                    AuthorizeType.push($(this).val());
                }
            });
            AuthorizeType = AuthorizeType.toString();
      $.ajax({
        url: 'adminViews/insert-data-transaction-records.php',
        type: 'post',
        data: {
          trans_nosend: trans_no,
          trans_date: trans_date,
          t_fname:t_fname,
          t_lname:t_lname,
          t_email:t_email,
          admin_confirmed:admin_confirmed,
          AuthorizeType:AuthorizeType,

          from_reservation_date:from_reservation_date,
          to_reservation_date:to_reservation_date,

          checkbox_hall:checkbox_hall,
          checkbox_court:checkbox_court,
          checkbox_miming:checkbox_miming,

          hall_time_start:hall_time_start,
          hall_time_end:hall_time_end,
          price_hall:price_hall,

          court_time_start:court_time_start,
          court_time_end:court_time_end,
          price_court:price_court,

          miming_time_start:miming_time_start,
          miming_time_end:miming_time_end,
          price_miming:price_miming,

          totalprice_send: total_price,
          reserv_discountsend: reserv_discount,
          remarks_send: remarks,
          reserv_paymentsend: reserv_payment,
          reserv_changesend: reserv_change,
          reserv_remaining_balancesend: reserv_remaining_balance
        },
        success: function(data) {
                                //alert(data);
                                $("#transaction_errors_reserv").html(data);
                                if(data==="Confirmation"){
                                    $('#reserv-submit-confirmation').modal('show');
                                //$("#assoc-reset").trigger("click");
                                }
                            }
      });
    // }
    // end OTHER TRANSACTION SECTION - INSERT DATA

  }
  $(document).on('click','#reserv-submit-confirmed',function(){
      var initial_price = $("#in-radio-miming3").val(); + $("#in-radio-hall3").val(); + $("#in-radio-court3").val();
      var total_price = $("#reserv_total").val();

      var t_fname = $("#first-name").val();
      var t_lname = $("#last-name").val();
      var t_email = $("#transaction-email").val();
      var admin_confirmed = $("#admin-name-trans").val();

      var reserv_discount = $("#r-discount").val();
      var remarks = $("#reserv_remark").val();
      var reserv_payment = $("#reserv_payment").val();
      var reserv_change = $("#reserv_change").val();
      var reserv_remaining_balance = $("#reserv_remaining_balance").val();

      var checkbox_hall = $("#radio-hall").is(":checked") ? $("#radio-hall").val() : "";
      var checkbox_court = $("#radio-court").is(":checked") ? $("#radio-court").val() : "";
      var checkbox_miming = $("#radio-miming").is(":checked") ? $("#radio-miming").val() : "";

      var trans_no = $("#trans-no").val();
      var trans_date = $("#date").val();
      
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

      var AuthorizeType = [];
            $('.authorization_type').each(function() {
                if ($(this).is(":checked")) {
                    AuthorizeType.push($(this).val());
                }
            });
            AuthorizeType = AuthorizeType.toString();
      $.ajax({
        url: 'adminViews/insert-data-reservation-confirmed.php',
        type: 'post',
        data: {
          trans_nosend: trans_no,
          trans_date: trans_date,
          t_fname:t_fname,
          t_lname:t_lname,
          t_email:t_email,
          admin_confirmed:admin_confirmed,
          AuthorizeType:AuthorizeType,

          from_reservation_date:from_reservation_date,
          to_reservation_date:to_reservation_date,

          checkbox_hall:checkbox_hall,
          checkbox_court:checkbox_court,
          checkbox_miming:checkbox_miming,

          hall_time_start:hall_time_start,
          hall_time_end:hall_time_end,
          price_hall:price_hall,

          court_time_start:court_time_start,
          court_time_end:court_time_end,
          price_court:price_court,

          miming_time_start:miming_time_start,
          miming_time_end:miming_time_end,
          price_miming:price_miming,

          totalprice_send: total_price,
          reserv_discountsend: reserv_discount,
          remarks_send: remarks,
          reserv_paymentsend: reserv_payment,
          reserv_changesend: reserv_change,
          reserv_remaining_balancesend: reserv_remaining_balance
        },
        success: function(data) {
                                $("#close_reserv_confirmed").trigger("click");
                                $("#transaction_errors_reserv").html(data);
                                $("#reserv_reset").trigger("click");
                                
                                $.ajax({
                                    url: 'adminViews/includes/act-transact.php',
                                    type: 'post', //path to PHP script
                                    success: function(data) {
                                    $("#trans-no").val(data); //update input field with response from server
                                    }               
                                 });
                                 $.ajax({
                                    type: 'POST',
                                    url: 'adminViews/includes/act-row-sum.php',
                                    success: function(response){
                                        console.log(response);
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        console.log(textStatus, errorThrown);
                                    }
                                });
                            }
      });
    // }
    // end OTHER TRANSACTION SECTION - INSERT DATA

  });

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


$("#reserv_payment").on("change", function() {
                  var reserv_total = parseFloat($("#reserv_total").val());
              
                  var reserv_payment = parseFloat($("#reserv_payment").val());
                  if (reserv_total > reserv_payment) {
                    var reserv_remaining_balance = reserv_total - reserv_payment;
                    $("#reserv_remaining_balance").val(reserv_remaining_balance);
                    $("#reserv_change").val(0);
                  } else {
                    var reserv_change = reserv_payment - reserv_total;
                    $("#reserv_change").val(reserv_change);
                    $("#reserv_remaining_balance").val(0);
                  }
                });

$(document).ready(function() {
    $("#reserv_reset").on("click", reserv_reset_data);
  });

  function reserv_reset_data() {
            $("#from-reservation-date").val("");
            $("#last-name").val("");
            $("#first-name").val("");
            $("#transaction-email").val("");
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
            $("#reserv_remaining_balance").val("0");
            $("#reserv_remark").val("");

            $("#radio-hall").prop("checked", false);
            $("#radio-court").prop("checked", false);
            $("#radio-miming").prop("checked", false);
            $("#authorize_id").prop("checked", false);
            $("#authorize_letter").prop("checked", false);
            $("#authorize_referral").prop("checked", false);
  }

</script>