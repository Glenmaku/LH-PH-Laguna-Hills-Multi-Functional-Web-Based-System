<div>
    <div class="payment-area">
        <span>Total:</span>
        <input type="text" class="form-control" name="other_total" id="other_total" value="0" disabled>
        <span>Payment:</span>
        <input type="text" class="form-control" name="other_payment" id="other_payment" value="0" placeholder="Enter amount...">
        <span>Change:</span>
        <input type="text" class="form-control" name="other_change" id="other_change" value="0" disabled>
        <span>Remaining Balance:</span>
        <input type="text" class="form-control" name="other_remaining_balance" id="other_remaining_balance" value="0" disabled>
        <span>Remarks:</span>
        <textarea id="other_remarks" placeholder="Type here.."></textarea>
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

        if ($("#o_category").val().trim() && !isNaN($("#o_quantity").val().trim()) && !isNaN($("#o_price").val().trim()) && !isNaN($("#o_subtotal").val().trim())) {
            var data = {};
            data.transaction_number = $("#trans-no").val();
            data.name = $("#client-name").val();
            data.services = [];
            data.services.push({
                category: $("#o_category").val(),
                quantity: $("#o_quantity").val(),
                price: $("#o_price").val(),
                subtotal: $("#o_subtotal").val()
            });
            data.services.push({
                category: $("#o_category1").val(),
                quantity: $("#o_quantity1").val(),
                price: $("#o_price1").val(),
                subtotal: $("#o_subtotal1").val()
            });
            data.services.push({
                category: $("#o_category2").val(),
                quantity: $("#o_quantity2").val(),
                price: $("#o_price2").val(),
                subtotal: $("#o_subtotal2").val()
            });
            data.services.push({
                category: $("#o_category3").val(),
                quantity: $("#o_quantity3").val(),
                price: $("#o_price3").val(),
                subtotal: $("#o_subtotal3").val()
            });
            data.services.push({
                category: $("#o_category4").val(),
                quantity: $("#o_quantity4").val(),
                price: $("#o_price4").val(),
                subtotal: $("#o_subtotal4").val()
            });
            
            $.post("adminViews/insert-data-transaction-other.php", {
                data: data
            }, function(response) {
                console.log(response);
            });
        } else {
            console.log("no input in the other services layer 1");
            if (isNaN($("#o_quantity").val().trim())) {
                alert("Quantity must be a number.");
            }
            if (isNaN($("#o_price").val().trim())) {
                alert("Price must be a number.");
            }
            if (isNaN($("#o_subtotal").val().trim())) {
                alert("Subtotal must be a number.");
            }
        }

        //TRYING TO MAKE SOME ALERTS
        var transaction_number_all = $("#trans-no").val();
        var name_all = $("#client-name").val();
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
          name_all_send: name_all,
          total_all_send: total_all,
          other_payment_all_send: other_payment_all,
          other_change_all_send : other_change_all,
          other_remaining_balance_all_send: other_remaining_balance_all,
          other_remarks_all_send: other_remarks_all
        },
        success: function(data, status) {
          // function to display data
          console.log(status);
        }
      });

        // clear the forms after pressing the submit  
        $("#trans-no").val("");
        $("#date").val("");
        $("#client-name").val("");

        $("#o_subtotal").val("");
        $("#o_category").val("");
        $("#o_quantity").val("");
        $("#o_price").val("");

        $("#o_subtotal1").val("");
        $("#o_category1").val("");
        $("#o_quantity1").val("");
        $("#o_rice1").val("");

        for (var i = 1; i <= 6; i++) {
            $("#o_category" + i).val("");
            $("#o_quantity" + i).val("");
            $("#o_price" + i).val("");
            $("#o_subtotal" + i).val("");
        }
    }

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

</script>