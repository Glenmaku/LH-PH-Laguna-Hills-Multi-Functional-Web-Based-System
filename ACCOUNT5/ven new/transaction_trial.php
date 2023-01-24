<?php require_once('connection.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <h1>TRANSACTION</h1>

    <span>Transaction No.</span>

    <!---EDIT NI VEN-->
    <input name="transaction-number" id="trans-no"> <!---EDIT NI VEN-->

    <!---PAADD NITO SA LINK -->



    <script>
        //to update the data in database 
        window.onload = function() {
            $.ajax({
                type: "POST",
                url: "act-update_month_count.php",
                data: {},
                success: function(result) {
                    console.log(result);
                }
            });
        }
//window.onload = function() {
  //$.ajax({
   // type: "POST",
    //url: "act-row-sum.php",
    //data: {},
    //success: function(result) {
     // if (result == "success") {
      //  console.log("Data updated successfully");
      //} else {
       // console.log("Error updating data");
      //}
   // }
  //});
//}

        $(document).ready(function() {
            $.ajax({
                url: "act-transact.php", //path to PHP script
                success: function(data) {
                    $("#trans-no").val(data); //update input field with response from server
                }
            });

            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();
            today = yyyy + '-' + mm + '-' + dd;
            $("#date").val(today);
        });
    </script>
<script>
    $(document).ready(function(){
    $.ajax({
        type: 'POST',
        url: 'act-row-sum.php',
        success: function(response){
            console.log(response);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
});
</script>

    <span>Date:</span>
    <input type="date" name="date" id="date" disabled>

    <span>Name:</span>
    <input type="text" name="name" id="client-name" placeholder="Enter name...">
    <!-- ASSOCIATION DUES -->
    <h2 id="panelsStayOpen-headingOne">ASSOCIATION DUES</h2>
    <div id="assoc-error"></div>
    <label for="Blocklot">
        <span>BlockLot</span>
    </label><br>
    <input type="text" list="blkandlots" name="property" id="property" placeholder="property" required>
    <datalist id="blkandlots">
       <!--<option value="blk1lot1"></option>
        <option value="blk1lot2"></option>
        <option value="blk1lot3"></option>
        <option value="blk1lot4"></option>
        <option value="blk1lot5"></option>
        <option value="blk1lot6"></option>
        <option value="blk1lot7"></option>
        <option value="blk1lot8"></option>
        <option value="blk1lot9"></option>
        <option value="blk1lot10"></option>
        <option value="blk1lot11"></option>
        <option value="blk1lot12"></option>END FOR BLOCK 1-->
        <option value="blk10lot12"></option>
        <option value="blk10lot1"></option>
        <option value="blk10lot10"></option>
        <option value="blk10lot11"></option>
        <option value="blk10lot12"></option>
        <option value="blk10lot13"></option>
        <option value="blk10lot14"></option>
        <option value="blk10lot15"></option>
        <option value="blk10lot16"></option>
        <option value="blk10lot17"></option>
        <option value="blk10lot18"></option>

    </datalist>
<button class="hwu"></button>
    <br><span>Total Balance:</span> <br>
    <input name="total-balance" id="total-balance" disabled value="0"><br>

    <br><span>Selected Balance:</span> <br>
    <input name="selected-balance" id="selected-balance" value="0" required><br>
 
    <span>Discount:</span><br>
    <input type="number" name="a-discount" id="a-discount" placeholder="Enter discount.." value="0"><br>

    <span>Interest/Penalty:</span><br>
    <input type="number" name="a-interest" id="a-interest" value="0"><br>

    <span>Total </span> <br>
    <input name="balance-total" id="balance-total" readonly value="0"><br>

 
        <div class="transaction-history">
            <button><i class="fa-solid fa-clock-rotate-left"></i> Transaction History</button><br>
        </div><br>
        <!--RIGHT PANELLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLLL-->
        <div class="payment"><br>
            <span>Total:</span><br><br>
            <input type="text" name="all-total" id="all-total" value="0" disabled><br>

            <span>Payment:</span><br>
            <input type="text" name="payment" id="a-payment" value="0" placeholder="Enter amount..."><br>
            
            <span>Change:</span><br>
            <input type="text" name="change" id="a-change" value="0" disabled><br>
            <input type="checkbox" id="ifadvanced">Advanced Payment<br>

            <span>Dues Remaining Balance:</span><br>
            <input type="text" name="remaining-balance" id="a-remaining-balance" disabled><br>

            <span>Remarks:</span><br>
            <textarea id="a-remarks" placeholder="Type here.."></textarea><br>

               <!--ACTION-->
            <button type="submit" id="assoc-submit">Submit</button>
            <button type="reset" id="assoc-reset">Reset Form</button>
                                                                     <!--ACTION-->
        </div>
  


    <!--EDIT NI VEN-->
    <script>
        //reset assoc button

        $(document).ready(function() {
            $("#assoc-reset").click(function() {
                $("input[type='text']").val("0");
                $("input[type='number']").val("0");
                $("input[type='text'][list='blkandlots']").val("");
                $("textarea").val("");
                $("input[type='checkbox']").prop("checked", false);
            });
        });

/////////////////////////////////////////////////////////////////////////////
$(document).ready(function() {
    // Get total balance when property is selected
    $("#property").change(function() {
        var lot_id = $(this).val();
        if (lot_id) {
            $.ajax({
                url: "act-get_balance.php",
                method: "POST",
                data: {
                    lot_id: lot_id
                },
                success: function(data) {
                    $("#total-balance").val(data);
                    calculateSubtotalsAndPayment();
                }
            });
        } else {
            $("#total-balance").val(0);
            calculateSubtotalsAndPayment();
        }

    });
    // Calculate the assoc total and payment
    $("#a-interest, #a-discount, #a-payment").on("input keyup", function() {
        calculateSubtotalsAndPayment();
    });

    // listen for change event on ifadvanced checkbox
    $("#ifadvanced").on("change", function() {
        calculateSubtotalsAndPayment();
    });

    function calculateSubtotalsAndPayment() {
       var totalBalance = parseFloat($("#total-balance").val());
       var selectedBalance = parseFloat($("#selected-balance").val());
       var interest = parseFloat($("#a-interest").val()) || 0;
       var discount = parseFloat($("#a-discount").val()) || 0;
       var baltotal = (selectedBalance + interest).toFixed(2);
       var Talltotal = (totalBalance - ((discount / 100) * totalBalance) + interest).toFixed(2);////
       var alltotal = (selectedBalance - ((discount / 100) * selectedBalance) + interest).toFixed(2);

       var payment = parseFloat($("#a-payment").val());
       var change = 0;
       var remainingBalance = 0;
       var ifadvanced = $("#ifadvanced").is(":checked");

       $("#balance-total").val(baltotal);
       $("#all-total").val(alltotal);

       if (alltotal >= payment) {
         // change = 0;
           remainingBalance = (totalBalance - payment + interest - ((discount / 100) * selectedBalance)).toFixed(2);
       } else if (alltotal < payment) {
           if (ifadvanced) {
               change = 0;
                remainingBalance = (totalBalance - payment - change + interest - ((discount / 100) * selectedBalance)).toFixed(2);
           } else {
               change = (payment - alltotal).toFixed(2);
                 remainingBalance = (totalBalance - payment +(payment - alltotal) + interest - ((discount / 100) * selectedBalance)).toFixed(2);
           }
       }

       $("#a-change").val(change);
       $("#a-remaining-balance").val(remainingBalance);
    }
});



//SUBMISSION OF TRANSACTION
$(document).ready(function(){
    $("#assoc-submit").click(function(){
        var transaction_num = $("#trans-no").val();
        var transaction_name = $("#client-name").val();
        var property = $("#property").val();
        var total_balance = $("#total-balance").val();
        var selected_balance = $("#selected-balance").val();
        var discount = $("#a-discount").val();
        var interest = $("#a-interest").val();
        var balance_total = $("#balance-total").val();
        var payment = $("#a-payment").val();
        var change = $("#a-change").val();
        var ifadvanced = $("#ifadvanced").val();
        var remaining_balance = $("#a-remaining-balance").val();
        var remarks = $("#a-remarks").val();
       
        $.ajax({
            type: "POST",
            url: "act-assoc_submit.php",
            data: {transaction_num:transaction_num,transaction_name:transaction_name,property:property, total_balance:total_balance, selected_balance:selected_balance, discount:discount, interest:interest, balance_total:balance_total, payment:payment, change:change, ifadvanced:ifadvanced, remaining_balance:remaining_balance, remarks:remarks},
            success: function(data) {
                alert("Data Inserted: " + data);
                $("#assoc-reset").trigger("click");
            }
        });
    });
});


        
    //    function submit_assoc() {
          //  $(document).on('click', '#assoc-submit', function() {
           //     var transaction_num = $("#trans-no").val();
             //   var Lot_ID = $("#property").val();
              //  var assoc_payment = parseFloat($("#a-payment").val());
            // //   var assoc_penalty = parseFloat($("#a-interest").val());
            //    var assoc_discount = parseFloat($("#a-discount").val());
             //   var a_change = parseFloat($("#a-change").val());
              //  var totalBalance = parseFloat($("#total-balance").val());
               // var a_remarks = $("#a-remarks").val();
           //     $.ajax({
             //       type: "POST",
           //         url: "act-assoc_submit.php",
              //      data: {
           //             transaction_num: transaction_num,
                   //     Lot_ID: Lot_ID,
                   //     assoc_payment: assoc_payment,
                   //     assoc_penalty: assoc_penalty,
                     //   assoc_discount: assoc_discount,
                       // a_change: a_change,
                        //totalBalance: totalBalance,
                        //a_remarks: a_remarks
                   // },
                   // success: function(data) {
                    //    $('#assoc-error').html(data);
                   // }
               // });
           // });
        //}
    </script>


    <script>
        //  $(document).ready(function() {
        //    $("#total-balance, #a-discount, #interest").on("input", function() {
        //      var total_balance = parseFloat($("#total-balance").val());
        //    var a_discount = parseFloat($("#a-discount").val());
        //  var interest = parseFloat($("#interest").val());
        //if(isNaN(total_balance) || isNaN(a_discount) || isNaN(interest)){
        //    alert("Invalid input value, please enter a number");
        //    return;
        //  }
        //dis = calculate(($a_discount / 100) * $total_balance);
        //next = calculate($total_balance - $dis);
        //last = calculate(next + interest)
        //var a_subtotal = (total_balance - (a_discount / 100 * total_balance)) + interest;
        //$("#a-subtotal").val(a_subtotal);
        //});
        //});
    </script>


    <!-- submit-area Section -->

    </div>
    </form>
    </div>
    </div>


    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script src="./script.js"></script>
    <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>