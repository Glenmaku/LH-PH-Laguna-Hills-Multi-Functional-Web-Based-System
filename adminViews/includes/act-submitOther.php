<div>
  <div class="payment-area">
    <span>Total:</span>
    <input type="number" class="form-control" name="other_total" id="other_total" value="0" dir="rtl" disabled>
    <span>Payment:</span>
    <input type="number" class="form-control border border-dark" name="other_payment" id="other_payment" value="0" placeholder="Enter amount..."dir="rtl">
    <span>Change:</span>
    <input type="number" class="form-control" name="other_change" id="other_change" value="0" dir="rtl" disabled>
    <span hidden>Remaining Balance:</span>
    <input type="number" class="form-control" name="other_remaining_balance" id="other_remaining_balance" value="0" dir="rtl" disabled hidden>
    <span>Remarks:</span>
    <textarea id="other_remarks" placeholder="Type here.." class="border border-dark"></textarea>
    <button type="other_submit" class="btn btn-success other_submit" id="other_submit">Submit</button>
    <button type="other_reset" class="btn btn-danger other_reset" id="other_reset">Reset Form</button>
  </div>
</div>

<script>
  // other transac
  $(document).ready(function() {
    $("#other_submit").on("click", other_add_data);
  });
  
  function other_add_data() {
    // OTHER TRANSACTION SECTION - INSERT DATA 
    
    // other-total sql
    var transaction_number_all = $("#trans-no").val();
    var t_fname = $("#first-name").val();
    var t_lname = $("#last-name").val();
    var t_email = $("#transaction-email").val();
    var admin_confirmed = $("#admin-name-trans").val();
    var trans_date = $("#date").val();

    var o_category = $("#o_category").val();
    var o_quantity = $("#o_quantity").val();
    var o_price = $("#o_price").val();
    var o_subtotal = $("#o_subtotal").val();

    var o_category1 = $("#o_category1").val();
    var o_quantity1 = $("#o_quantity1").val();
    var o_price1 = $("#o_price1").val();
    var o_subtotal1 = $("#o_subtotal1").val();

    var o_category2 = $("#o_category2").val();
    var o_quantity2 = $("#o_quantity2").val();
    var o_price2 = $("#o_price2").val();
    var o_subtotal2 = $("#o_subtotal2").val();
    
    var o_category3 = $("#o_category3").val();
    var o_quantity3 = $("#o_quantity3").val();
    var o_price3 = $("#o_price3").val();
    var o_subtotal3 = $("#o_subtotal3").val();

    var o_category4 = $("#o_category4").val();
    var o_quantity4 = $("#o_quantity4").val();
    var o_price4 = $("#o_price4").val();
    var o_subtotal4 = $("#o_subtotal4").val();

    var total_all = $("#other_total").val();
    var other_payment_all = $("#other_payment").val();
    var other_change_all = $("#other_change").val();
    var other_remaining_balance_all = $("#other_remaining_balance").val();
    var other_remarks_all = $("#other_remarks").val();

    $.ajax({
      url: 'adminViews/insert-data-transaction-other-all.php',
      type: 'post',
      data: {
        trans_no_all_send: transaction_number_all,
        trans_date: trans_date,
          t_fname:t_fname,
          t_lname:t_lname,
          t_email:t_email,
          admin_confirmed:admin_confirmed,

        o_category:o_category,
        o_quantity:o_quantity,
        o_price:o_price,
        o_subtotal:o_subtotal,

        o_category1:o_category1,
        o_quantity1:o_quantity1,
        o_price1:o_price1,
        o_subtotal1:o_subtotal1,

        o_category2:o_category2,
        o_quantity2:o_quantity2,
        o_price2:o_price2,
        o_subtotal2:o_subtotal2,

        o_category3:o_category3,
        o_quantity3:o_quantity3,
        o_price3:o_price3,
        o_subtotal3:o_subtotal3,

        o_category4:o_category4,
        o_quantity4:o_quantity4,
        o_price4:o_price4,
        o_subtotal4:o_subtotal4,

        total_all_send: total_all,
        other_payment_all_send: other_payment_all,
        other_change_all_send: other_change_all,
        other_remaining_balance_all_send: other_remaining_balance_all,
        other_remarks_all_send: other_remarks_all
      },
      success: function(data) {
       $("#transaction_errors_others").html(data);
          if(data==="Confirmation"){
            $('#others-submit-confirmation').modal('show');
          }
      }
    });
  }
$(document).on('click','#others-submit-confirmed',function(){
  var transaction_number_all = $("#trans-no").val();
    var t_fname = $("#first-name").val();
    var t_lname = $("#last-name").val();
    var t_email = $("#transaction-email").val();
    var admin_confirmed = $("#admin-name-trans").val();
    var trans_date = $("#date").val();

    var o_category = $("#o_category").val();
    var o_quantity = $("#o_quantity").val();
    var o_price = $("#o_price").val();
    var o_subtotal = $("#o_subtotal").val();

    var o_category1 = $("#o_category1").val();
    var o_quantity1 = $("#o_quantity1").val();
    var o_price1 = $("#o_price1").val();
    var o_subtotal1 = $("#o_subtotal1").val();

    var o_category2 = $("#o_category2").val();
    var o_quantity2 = $("#o_quantity2").val();
    var o_price2 = $("#o_price2").val();
    var o_subtotal2 = $("#o_subtotal2").val();
    
    var o_category3 = $("#o_category3").val();
    var o_quantity3 = $("#o_quantity3").val();
    var o_price3 = $("#o_price3").val();
    var o_subtotal3 = $("#o_subtotal3").val();

    var o_category4 = $("#o_category4").val();
    var o_quantity4 = $("#o_quantity4").val();
    var o_price4 = $("#o_price4").val();
    var o_subtotal4 = $("#o_subtotal4").val();

    var total_all = $("#other_total").val();
    var other_payment_all = $("#other_payment").val();
    var other_change_all = $("#other_change").val();
    var other_remaining_balance_all = $("#other_remaining_balance").val();
    var other_remarks_all = $("#other_remarks").val();

    $.ajax({
      url: 'adminViews/insert-data-transaction-other-confirmed.php',
      type: 'post',
      data: {
        trans_no_all_send: transaction_number_all,
        admin_confirmed:admin_confirmed ,
        trans_date: trans_date,
          t_fname:t_fname,
          t_lname:t_lname,
          t_email:t_email,

        o_category:o_category,
        o_quantity:o_quantity,
        o_price:o_price,
        o_subtotal:o_subtotal,

        o_category1:o_category1,
        o_quantity1:o_quantity1,
        o_price1:o_price1,
        o_subtotal1:o_subtotal1,

        o_category2:o_category2,
        o_quantity2:o_quantity2,
        o_price2:o_price2,
        o_subtotal2:o_subtotal2,

        o_category3:o_category3,
        o_quantity3:o_quantity3,
        o_price3:o_price3,
        o_subtotal3:o_subtotal3,

        o_category4:o_category4,
        o_quantity4:o_quantity4,
        o_price4:o_price4,
        o_subtotal4:o_subtotal4,

        total_all_send: total_all,
        other_payment_all_send: other_payment_all,
        other_change_all_send: other_change_all,
        other_remaining_balance_all_send: other_remaining_balance_all,
        other_remarks_all_send: other_remarks_all
      },
      success: function(data) {
        $("#close_others_confirmed").trigger("click");
        $("#transaction_errors_others").html(data);
        $("#other_reset").trigger("click");
        $.ajax({
      url: 'adminViews/includes/insert-data-transaction-other-confirmed_mail.php',
      type: 'post',
      data: {
        trans_no_all_send: transaction_number_all,
        admin_confirmed:admin_confirmed ,
        trans_date: trans_date,
          t_fname:t_fname,
          t_lname:t_lname,
          t_email:t_email,

        o_category:o_category,
        o_quantity:o_quantity,
        o_price:o_price,
        o_subtotal:o_subtotal,

        o_category1:o_category1,
        o_quantity1:o_quantity1,
        o_price1:o_price1,
        o_subtotal1:o_subtotal1,

        o_category2:o_category2,
        o_quantity2:o_quantity2,
        o_price2:o_price2,
        o_subtotal2:o_subtotal2,

        o_category3:o_category3,
        o_quantity3:o_quantity3,
        o_price3:o_price3,
        o_subtotal3:o_subtotal3,

        o_category4:o_category4,
        o_quantity4:o_quantity4,
        o_price4:o_price4,
        o_subtotal4:o_subtotal4,

        total_all_send: total_all,
        other_payment_all_send: other_payment_all,
        other_change_all_send: other_change_all,
        other_remaining_balance_all_send: other_remaining_balance_all,
        other_remarks_all_send: other_remarks_all
      },
      success: function(data) {}});                     
        $.ajax({
          url: 'adminViews/includes/act-transact.php',
          type: 'post', //path to PHP script
          success: function(data) {
          $("#trans-no").val(data); //update input field with response from server
          }               
        });
      }
    });
 
});

  //auto compute
  $(document).ready(function() {
    $('.o_quantity, .o_price').on('input', function() {
      var row = $(this).closest('tr');
      var quantity = row.find('.o_quantity').val();
      var price = row.find('.o_price').val();
      var subtotal = quantity * price;
      row.find('.o_subtotal').val(subtotal);
    });

    $('.o_subtotal').on('input', function() {
      var subtotals = $('.o_subtotal').map(function() {
        return $(this).val();
      }).get();
      var total = 0;
      for (var i = 0; i < subtotals.length; i++) {
        total += parseInt(subtotals[i]);
      }
      $('#other_total').val(total);
    });
  });

  $(document).ready(function() {
    $("input[id^='o_quantity']").on("input", function() {
      calculate($(this).attr("id"));
    });
    $("input[id^='o_price']").on("input", function() {
      calculate($(this).attr("id"));
    });

    function calculate(inputId) {
      let idx = inputId.match(/\d+/);
      let quantity = $("#o_quantity" + idx).val();
      let price = $("#o_price" + idx).val();
      let subtotal = quantity * price;
      $("#o_subtotal" + idx).val(subtotal);

      let total = 0;
      $("input[id^='o_subtotal']").each(function() {
        total += Number($(this).val());
      });
      $("#other_total").val(total);

    }
  });

  //compute ng payments rem balance change


  document.getElementById("other_payment").addEventListener("input", function() {
    let otherTotal = parseFloat(document.getElementById("other_total").value);
    let otherPayment = parseFloat(document.getElementById("other_payment").value);

    if (otherTotal > otherPayment) {
      document.getElementById("other_remaining_balance").value = otherTotal - otherPayment;
      document.getElementById("other_change").value = 0;
    } else {
      document.getElementById("other_change").value = otherPayment - otherTotal;
      document.getElementById("other_remaining_balance").value = 0;
    }
  });

  $(document).ready(function() {
    $("#other_reset").on("click", other_reset_data);
  });

  function other_reset_data() {
    $("#last-name").val("");
    $("#first-name").val("");
    $("#transaction-email").val("");

    $("#o_category").val("");
    $("#o_quantity").val("");
    $("#o_price").val("");
    $("#o_subtotal").val("");

    $("#o_category1").val("");
    $("#o_quantity1").val("");
    $("#o_price1").val("");
    $("#o_subtotal1").val("");

    $("#o_category2").val("");
    $("#o_quantity2").val("");
    $("#o_price2").val("");
    $("#o_subtotal2").val("");

    $("#o_category3").val("");
    $("#o_quantity3").val("");
    $("#o_price3").val("");
    $("#o_subtotal3").val("");

    $("#o_category4").val("");
    $("#o_quantity4").val("");
    $("#o_price4").val("");
    $("#o_subtotal4").val("");

    $("#other_total").val("0");
    $("#other_payment").val("0");
    $("#other_change").val("0");
    $("#other_remarks").val("");
  }

</script>
