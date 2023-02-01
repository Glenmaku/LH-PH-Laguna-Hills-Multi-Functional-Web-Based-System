<div>
    <div class="payment-area">
        <span>Total:</span>
        <input type="text" class="form-control" name="other_total" id="other_total" value="0" disabled>
        <span>Payment:</span>
        <input type="text" class="form-control" name="other_payment" id="other_payment" value="0" placeholder="Enter amount...">
        <span>Change:</span>
        <input type="text" class="form-control" name="other_change" id="other_change" value="0" disabled>
        <span>Remaining Balance:</span>
        <input type="text" class="form-control" name="other_remaining-balance" id="other_remaining-balance" value="0" disabled>
        <span>Remarks:</span>
        <textarea placeholder="Type here.."></textarea>
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
        //TRYING TO MAKE SOME ALERTS
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
            data.services.push({
                category: $("#o_category5").val(),
                quantity: $("#o_quantity5").val(),
                price: $("#o_price5").val(),
                subtotal: $("#o_subtotal5").val()
            });

            data.services.push({
                category: $("#o_category6").val(),
                quantity: $("#o_quantity6").val(),
                price: $("#o_price6").val(),
                subtotal: $("#o_subtotal6").val()
            });
            data.services.push({
                category: $("#o_category7").val(),
                quantity: $("#o_quantity7").val(),
                price: $("#o_price7").val(),
                subtotal: $("#o_subtotal7").val()
            });
            data.services.push({
                category: $("#o_category7").val(),
                quantity: $("#o_quantity7").val(),
                price: $("#o_price7").val(),
                subtotal: $("#o_subtotal7").val()
            });
            data.services.push({
                category: $("#o_category8").val(),
                quantity: $("#o_quantity8").val(),
                price: $("#o_price8").val(),
                subtotal: $("#o_subtotal8").val()
            });
            data.services.push({
                category: $("#o_category9").val(),
                quantity: $("#o_quantity9").val(),
                price: $("#o_price9").val(),
                subtotal: $("#o_subtotal9").val()
            });
            data.services.push({
                category: $("#o_category10").val(),
                quantity: $("#o_quantity10").val(),
                price: $("#o_price10").val(),
                subtotal: $("#o_subtotal10").val()
            });
            data.services.push({
                category: $("#o_category11").val(),
                quantity: $("#o_quantity11").val(),
                price: $("#o_price11").val(),
                subtotal: $("#o_subtotal11").val()
            });
            data.services.push({
                category: $("#o_category12").val(),
                quantity: $("#o_quantity12").val(),
                price: $("#o_price12").val(),
                subtotal: $("#o_subtotal12").val()
            });
            data.services.push({
                category: $("#o_category13").val(),
                quantity: $("#o_quantity13").val(),
                price: $("#o_price13").val(),
                subtotal: $("#o_subtotal13").val()
            });
            data.services.push({
                category: $("#o_category14").val(),
                quantity: $("#o_quantity14").val(),
                price: $("#o_price14").val(),
                subtotal: $("#o_subtotal14").val()
            });
            data.services.push({
                category: $("#o_category15").val(),
                quantity: $("#o_quantity15").val(),
                price: $("#o_price15").val(),
                subtotal: $("#o_subtotal15").val()
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

        for (var i = 1; i <= 15; i++) {
            $("#o_category" + i).val("");
            $("#o_quantity" + i).val("");
            $("#o_price" + i).val("");
            $("#o_subtotal" + i).val("");
        }
    }

    $(document).ready(function() {
    $(".o_quantity, .o_price").on("keyup", function() {
        var quantity = $(".o_quantity").val();
        var price = $(".o_price").val();
        var subtotal = quantity * price;
        $(".o_subtotal").val(subtotal);
    });
    $(document).ready(function() {
    $(".o_subtotal").on("change", function() {
        var total = 0;
        $(".o_subtotal").each(function() {
            total += parseFloat($(this).val());
        });
        $("#other_total").val(total);
    });
});
});

</script>