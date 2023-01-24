<div class="all-transaction">
    <div class="transaction-menu">
        <div class="transaction-title">
            <h1>TRANSACTION</h1>
        </div>
        <div class="transaction-content">
            <div class="transaction-sheet">
                <div class="transaction-container">
                    <div class="container-horizontal">

                        <div class="transaction-details">
                            <div class="transaction-line">
                                <span>Transaction No.</span>
                                <input type="text" name="transaction-number" id="trans-no" placeholder="0000" required>
                            </div>
                            <div class="date-container">
                                <span>Date:</span>
                                <input type="date" name="date" id="date" disabled>
                            </div>
                        </div>
                        <div class="client-name"><span>Name:</span>
                            <input type="text" name="name" id="client-name" placeholder="Enter name..." required>
                        </div>
                    </div>
                </div>


                <!-- ASSOCIATION DUES -->
                <div class="association-dues" id="association-dues">
                    <div class="association-title">
                        <div class="div-title">
                            <h2 id="panelsStayOpen-headingOne">ASSOCIATION DUES</h2>
                        </div>
                        <div class="hide-option" id="hide_assoc">
                            <i class="fa-regular fa-eye-slash accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            </i>
                        </div>
                    </div>

                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <div class="lot-number">
                                <div class="propertycontainer">
                                    <!--FOR OWNER lot_id FIELD-->

                                    <label for="Blocklot">
                                        <span>BlockLot</span>
                                    </label><br>
                                    <input list="blkandlots" name="property" id="property" placeholder="property">
                                    <datalist id="blkandlots">
                                        <option value="blk1lot1"></option>
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
                                        <option value="blk1lot12"></option><!--END FOR BLOCK 1-->
                                        <option value="blk2lot1"></option>
                                        <option value="blk2lot2"></option>
                                        <option value="blk2lot3"></option>
                                        <option value="blk2lot4"></option>
                                        <option value="blk2lot5"></option>
                                        <option value="blk2lot6"></option>
                                        <option value="blk2lot7"></option>
                                        <option value="blk2lot8"></option>
                                        <option value="blk2lot9"></option>
                                        <option value="blk2lot10"></option>
                                        <option value="blk2lot11"></option>
                                        <option value="blk2lot12"></option>
                                        <option value="blk2lot13"></option>
                                        <option value="blk2lot14"></option>
                                        <option value="blk2lot15"></option>
                                        <option value="blk2lot16"></option>
                                        <option value="blk2lot17"></option>
                                        <option value="blk2lot18"></option>
                                        <option value="blk2lot19"></option>
                                        <option value="blk2lot20"></option>
                                        <option value="blk2lot21"></option>
                                        <option value="blk2lot22"></option>
                                        <option value="blk2lot23"></option>
                                        <option value="blk2lot24"></option>
                                        <option value="blk2lot25"></option>
                                        <option value="blk2lot26"></option>
                                        <option value="blk2lot27"></option>
                                        <option value="blk2lot28"></option>
                                        <option value="blk2lot29"></option>
                                        <option value="blk2lot30"></option>
                                        <option value="blk2lot31"></option>
                                        <option value="blk2lot32"></option>
                                        <option value="blk2lot33"></option>
                                        <option value="blk2lot34"></option>
                                        <option value="blk2lot35"></option>
                                        <option value="blk2lot36"></option>
                                        <option value="blk2lot37"></option>
                                        <option value="blk2lot38"></option>
                                        <option value="blk2lot39"></option>
                                        <option value="blk1lot12"></option>
                                        <option value="blk2lot40"></option><!--END FOR BLOCK 2-->
                                        <option value="blk3lot1"></option>
                                        <option value="blk3lot2"></option>
                                        <option value="blk3lot3"></option>
                                        <option value="blk3lot4"></option>
                                        <option value="blk3lot5"></option>
                                        <option value="blk3lot6"></option>
                                        <option value="blk3lot7"></option>
                                        <option value="blk3lot8"></option>
                                        <option value="blk3lot9"></option>
                                        <option value="blk3lot10"></option>
                                        <option value="blk3lot11"></option>
                                        <option value="blk3lot12"></option>
                                        <option value="blk3lot13"></option>
                                        <option value="blk3lot14"></option>
                                        <option value="blk3lot15"></option>
                                        <option value="blk3lot16"></option>
                                        <option value="blk3lot17"></option>
                                        <option value="blk3lot18"></option>
                                        <option value="blk3lot19"></option>
                                        <option value="blk3lot20"></option>
                                        <option value="blk3lot21"></option>
                                        <option value="blk3lot22"></option>
                                        <option value="blk3lot23"></option>
                                        <option value="blk3lot24"></option>
                                        <option value="blk3lot25"></option>
                                        <option value="blk3lot26"></option>
                                        <option value="blk3lot27"></option>
                                        <option value="blk3lot28"></option>
                                        <option value="blk3lot29"></option>
                                        <option value="blk3lot30"></option>
                                        <option value="blk3lot31"></option>
                                        <option value="blk3lot32"></option>
                                        <option value="blk3lot33"></option>
                                        <option value="blk3lot34"></option>
                                        <option value="blk3lot35"></option><!--END FOR BLOCK 3-->
                                        <option value="blk4lot1"></option>
                                        <option value="blk4lot2"></option>
                                        <option value="blk4lot3"></option>
                                        <option value="blk4lot4"></option>
                                        <option value="blk4lot5"></option>
                                        <option value="blk4lot6"></option>
                                        <option value="blk4lot7"></option>
                                        <option value="blk4lot8"></option>
                                        <option value="blk4lot9"></option>
                                        <option value="blk4lot10"></option>
                                        <option value="blk4lot11"></option>
                                        <option value="blk4lot12"></option>
                                        <option value="blk4lot13"></option>
                                        <option value="blk4lot14"></option><!--END FOR BLOCK 4-->
                                        <option value="blk5lot1"></option>
                                        <option value="blk5lot2"></option>
                                        <option value="blk5lot3"></option>
                                        <option value="blk5lot4"></option>
                                        <option value="blk5lot5"></option>
                                        <option value="blk5lot6"></option>
                                        <option value="blk5lot7"></option>
                                        <option value="blk5lot8"></option>
                                        <option value="blk5lot9"></option>
                                        <option value="blk5lot10"></option>
                                        <option value="blk5lot11"></option>
                                        <option value="blk5lot12"></option>
                                        <option value="blk5lot13"></option>
                                        <option value="blk5lot14"></option>
                                        <option value="blk5lot15"></option>
                                        <option value="blk5lot16"></option>
                                        <option value="blk5lot17"></option>
                                        <option value="blk5lot18"></option>
                                        <option value="blk5lot19"></option>
                                        <option value="blk5lot20"></option>
                                        <option value="blk5lot21"></option>
                                        <option value="blk5lot22"></option>
                                        <option value="blk5lot23"></option>
                                        <option value="blk5lot24"></option>
                                        <option value="blk5lot25"></option>
                                        <option value="blk5lot26"></option>
                                        <option value="blk5lot27"></option><!--END FOR BLOCK 5-->
                                        <option value="blk6lot1"></option><!--END FOR BLOCK 6-->
                                    </datalist>
                                </div>
                            </div>

                            <div class="address-status">
                                <div class="unpaid">
                                    <span>Unpaid Month/s:</span><br>
                                    <input type="text" name="unpaid" id="unpaid">
                                </div>
                                <div class="total-balance">
                                    <span>Total Balance:</span> <br>
                                    <input type="text" name="total-balance" id="total-balance" value="" disabled>
                                </div>
                                <div class="interest">
                                    <span>Interest/Penalty:</span><br>
                                    <input type="text" name="interest" id="interest" disabled>
                                </div>
                            </div>

                            <div class="address-status">
                                <div class="period-of-payment">
                                    <span>Period of Payment:</span><br>
                                    <input type="text" name="period-of-payment" id="period-of-payment" placeholder="Enter period of payment..">
                                </div>
                                <div class="total">
                                    <span>Total:</span> <br>
                                    <input type="text" name="period-total" id="period-total" disabled>
                                </div>
                                <div class="discount">
                                    <span>Discount:</span><br>
                                    <input type="text" name="discount" id="discount" placeholder="Enter discount..">
                                </div>
                            </div>

                            <div class="address-status">
                                <div class="dues-remaining-balance">
                                    <span>Remaining Dues:</span><br>
                                    <input type="text" name="dues-remaining-balance" id="dues-remaining-balance" disabled>
                                </div>
                                <div class="Subtotal">
                                    <span>Subtotal:</span><br>
                                    <input type="text" name="subtotal" id="ubtotal" disabled>
                                </div>
                            </div>

                        </div> <!-- accordion-body -->
                    </div>
                </div>


                <!-- reservation section-->
                <div class="reservation">
                    <div class="reservation-title">
                        <div class="div-title">
                            <h2 id="panelsStayOpen-headingTwo">RESERVATION
                        </div>
                        <div class="hide-option" id="hide_reserv">
                            <i class="fa-regular fa-eye-slash accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo"></i>
                        </div>
                    </div>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">

                            <!-- label -->
                            <div class="reservation-date">
                                <span>Reservation Date:</span>
                                <input type="date" name="from-reservation-date" id="from-reservation-date">
                                <span>-</span>
                                <input type="date" name="to-reservation-date" id="to-reservation-date">
                            </div>

                            <div class="amenities-reservation">
                                <form class="reservation-sheet">
                                    <div class="reservation-label">
                                        <div class="r-time">
                                            <span>Time</span>
                                        </div>
                                        <div class="r-price">
                                            <span>Price</span>
                                        </div>
                                    </div>

                                    <!-- function hall -->
                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="checkbox" class="form-check-input" name="reservation-location" id="radio-hall" value="Function Hall">
                                            <span>Function Hall</span>
                                        </div>

                                        <div class="reservation-time">
                                            <input type="text" name="f-time-from" id="in-radio-hall1" disabled="disabled" placeholder="6am">
                                            <span>-</span>
                                            <input type="text" name="f-time-to" id="in-radio-hall2" placeholder="10am" disabled="disabled">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="text" name="reservation-price" id="in-radio-hall3" value="0" disabled="disabled" onchange="calculate();">
                                        </div>
                                    </div>


                                    <!-- court -->
                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="checkbox" class="form-check-input" id="radio-court" name="reservation-location" value="Court">
                                            <span>Court</span>
                                        </div>
                                        <div class="reservation-time">
                                            <input type="text" name="f-time-from" id="in-radio-court1" placeholder="6am" disabled="disabled">
                                            <span>-</span>
                                            <input type="text" name="f-time-to" id="in-radio-court2" placeholder="10am" disabled="disabled">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="text" name="reservation-price" id="in-radio-court3" value="0" disabled="disabled" onchange="calculate();">
                                        </div>
                                    </div>

                                    <!-- miming pool -->
                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="checkbox" class="form-check-input" id="radio-miming" name="reservation-location" value="Swimming Pool">
                                            <span>Swimming Pool</span>
                                        </div>
                                        <div class="reservation-time">
                                            <input type="text" name="f-time-from" id="in-radio-miming1" placeholder="6am" disabled="disabled">
                                            <span>-</span>
                                            <input type="text" name="f-time-to" placeholder="10am" id="in-radio-miming2" disabled="disabled">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="text" name="reservation-price" id="in-radio-miming3" value="0" disabled="disabled" onchange="calculate();">
                                        </div>
                                    </div>
                            </div>

                            <div class="reservation-subtotal">
                                <div class="r-subtotal-label">
                                    <div class="r-discount">
                                        <span>Discount:</span><br>
                                        <input type="text" name="r-discount" id="r-discount" value="0" onchange="calculate();">
                                    </div>
                                    <div class="r-subtotal">
                                        <span>Subtotal:</span><br>
                                        <input type="text" name="r-subtotal" id="r-subtotal" disabled>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- accordion-body -->
                    </div>
                </div>

                <!-- OTHER SERVICES Section-->
                <div class="other-transaction">
                    <div class="other-transaction-title">
                        <div class="div-title">
                            <h2 id="panelsStayOpen-headingThree">OTHER SERVICES
                            </h2>
                        </div>
                        <div class="hide-option" id="hide_other">
                            <i class="fa-regular fa-eye-slash accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                            </i>
                        </div>
                    </div>

                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <table class="other-services" id="input_table">
                                <tr>
                                    <td>Category</td>
                                    <td>Quantity</td>
                                    <td>Price</td>
                                    <td>Subtotal</td>
                                    <td>Add/Remove</td>
                                </tr>

                                <tr>
                                    <td><input type="text" id="category" name="field1" /></td>
                                    <td><input type="text" id="quantity" name="field2" /></td>
                                    <td><input type="text" id="price" name="field3" /></td>
                                    <td><input type="text" id="o_subtotal" name="field4" /></td>
                                    <td><a href="javascript:void(0);" id="addRow" class="add_button" title="Add field"><i class="fa-solid fa-plus "></i>Add</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- submit-area Section -->
            <div class="submit-area">
                <div class="transaction-history">
                    <button><i class="fa-solid fa-clock-rotate-left"></i> Transaction History</button>
                </div>
                <div class="payment">
                    <span>Total:</span>
                    <input type="text" name="total" id="total" value="0" disabled>
                    <span>Payment:</span>
                    <input type="text" name="payment" id="payment" value="0" placeholder="Enter amount..." onchange="calculate();">
                    <span>Change:</span>
                    <input type="text" name="change" id="change" value="0" disabled>
                    <span>Remaining Balance:</span>
                    <input type="text" name="remaining-balance" id="remaining-balance" value="0" disabled>
                    <span>Remarks:</span>
                    <textarea placeholder="Type here.."></textarea>
                    <button type="submit" id="submit">Submit</button>
                    <button type="reset" id="reset">Reset Form</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- SCRIPT NI ADD TRANSACTION-->
<script>
    //data insertion sa reservation palang

    $(document).ready(function() {
        $("#submit").on("click", add_data);
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
            var total_price = $("#in-radio-miming3").val(); + $("#in-radio-hall3").val(); + $("#in-radio-court3").val(); - $("#in-radio-miming3").val(); + $("#in-radio-hall3").val(); + $("#in-radio-court3").val() * (initial_discount);

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
        } else {
            console.log("all is empty");
        }

        // // ETO YUNG PART NG OTHER SERVICES
        // var rowId = $(this).closest("tr").data("row-id");
        // var category = $("#category" + rowId).val();
        // var quantity = $("#quantity" + rowId).val();
        // var price = $("#price" + rowId).val();
        // var subtotal = $("#subtotal" + rowId).val();

        // $.ajax({
        //     url: 'adminViews/insert-data-transaction-other.php',
        //     type: 'post',
        //     data: {
        //         trans_nosend : trans_no,
        //         namesend: nameadd,
        //         categorysend: category,
        //         quantitysend: quantity,
        //         pricesend: price,
        //         subtotalsend: subtotal,
        //         rowId: rowId
        //     },
        //     success: function(data, status) {
        //         console.log(status);
        //         console.log("ERROR OTHER TRANSAC");

        //     }
        // });

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
    }


    // clear the forms after pressing the reset button  
    $("#reset").click(function() {
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

        $("#radio-hall").prop("checked", false);
        $("#radio-court").prop("checked", false);
        $("#radio-miming").prop("checked", false);
    });

    // checkbox reset
    document.getElementById("radio-hall").addEventListener("change", function() {
        // get references to the input fields
        var input1 = document.getElementById("in-radio-hall1");
        var input2 = document.getElementById("in-radio-hall2");
        var input3 = document.getElementById("in-radio-hall3");
        // check the status of the checkbox
        if (this.checked) {
            // if the checkbox is checked, enable the input fields
            input1.disabled = false;
            input2.disabled = false;
            input3.disabled = false;
        } else {
            // if the checkbox is unchecked, disable the input fields and clear the values
            input1.disabled = true;
            input2.disabled = true;
            input3.disabled = true;
            input1.value = "";
            input2.value = "";
            input3.value = "";
        }
    });

    document.getElementById("radio-court").addEventListener("change", function() {
        // get references to the input fields
        var input1 = document.getElementById("in-radio-court1");
        var input2 = document.getElementById("in-radio-court2");
        var input3 = document.getElementById("in-radio-court3");
        // check the status of the checkbox
        if (this.checked) {
            // if the checkbox is checked, enable the input fields
            input1.disabled = false;
            input2.disabled = false;
            input3.disabled = false;
        } else {
            // if the checkbox is unchecked, disable the input fields and clear the values
            input1.disabled = true;
            input2.disabled = true;
            input3.disabled = true;
            input1.value = "";
            input2.value = "";
            input3.value = "";
        }
    });

    document.getElementById("radio-miming").addEventListener("change", function() {
        // get references to the input fields
        var input1 = document.getElementById("in-radio-miming1");
        var input2 = document.getElementById("in-radio-miming2");
        var input3 = document.getElementById("in-radio-miming3");
        // check the status of the checkbox
        if (this.checked) {
            // if the checkbox is checked, enable the input fields
            input1.disabled = false;
            input2.disabled = false;
            input3.disabled = false;
        } else {
            // if the checkbox is unchecked, disable the input fields and clear the values
            input1.disabled = true;
            input2.disabled = true;
            input3.disabled = true;
            input1.value = "";
            input2.value = "";
            input3.value = "";
        }
    });
    //end checkbox reset 

    // transaction part
    function calculate() {
        // Declare variables for the input values
        var price1 = document.getElementById("in-radio-hall3").value;
        var price2 = document.getElementById("in-radio-court3").value;
        var price3 = document.getElementById("in-radio-miming3").value;
        var discount = document.getElementById("r-discount").value;
        var subtotal = 0;

        // check if any input values are not a number
        if (isNaN(price1) || isNaN(price2) || isNaN(price3) || isNaN(discount)) {
            alert("Please enter valid numbers for all input fields");
            return;
        }
        // calculate subtotal
        subtotal += parseFloat(price1) || 0;
        subtotal += parseFloat(price2) || 0;
        subtotal += parseFloat(price3) || 0;
        subtotal -= (subtotal * (parseFloat(discount) / 100));

        // set the value of subtotal
        document.getElementById("r-subtotal").value = subtotal.toFixed(2);

        // set the value of total 
        var total = document.getElementById("r-subtotal").value;
        document.getElementById("total").value = subtotal.toFixed(2);

        // Declare variable for payment value
        var payment = document.getElementById("payment").value;

        // check if the payment is not a number
        if (isNaN(payment)) {
            alert("Please enter a valid number for payment");
            return;
        }
        // calculate change
        var change = parseFloat(total) - (parseFloat(payment));
        // set the value of change
        document.getElementById("change").value = change.toFixed(2);

        // calculate remaining balance
        var remainingBalance = total - payment;

        // set the value of remaining balance
        if (remainingBalance > 0) {
            document.getElementById("remaining-balance").value = remainingBalance.toFixed(2);
        } else {
            remainingBalance = 0;
            document.getElementById("remaining-balance").value = remainingBalance.toFixed(2);
        }
    }
    // transaction part end

    // radio button function
    $(function() {
        $("input[name='reservation-location']").click(function() {
            var radioButtons = ["#radio-hall", "#radio-court", "#radio-miming"];
            var inputGroups = ["#in-radio-hall", "#in-radio-court", "#in-radio-miming"];

            for (var i = 0; i < radioButtons.length; i++) {
                var radioButton = radioButtons[i];
                var inputGroup = inputGroups[i];

                if ($(radioButton).is(":checked")) {
                    $(inputGroup + "1").removeAttr("disabled").focus();
                    $(inputGroup + "2").removeAttr("disabled");
                    $(inputGroup + "3").removeAttr("disabled");
                } else {
                    $(inputGroup + "1").attr("disabled", "disabled");
                    $(inputGroup + "2").attr("disabled", "disabled");
                    $(inputGroup + "3").attr("disabled", "disabled");
                }
            }
        });
    });


    // Wag nyo gagalawin tong counter = 1
    var counter = 1;
    $("#addRow").click(function() {

        // Get the table object
        var table = $("#input_table");
        // Create a new row
        var row = $("<tr>");
        // Add 4 cells to the new row
        row.append($("<td>").html('<input type="text" name="field1[]" id="category' + counter + '" data-row-id=' + counter + '">'));
        row.append($("<td>").html('<input type="text" name="field1[]" id="quantity' + counter + '" data-row-id=' + counter + '">'));
        row.append($("<td>").html('<input type="text" name="field1[]" id="price' + counter + '" data-row-id=' + counter + '">'));
        row.append($("<td>").html('<input type="text" name="field1[]" id="o_subtotal' + counter + '" data-row-id=' + counter + '">'));
        // Add a delete button to the new row
        row.append(
            $("<td>").html(
                '<a href="javascript:void(0);" id="deleteButton" title="Delete field"><i class="fa-solid fa-minus "></i>Delete</a>'
            )
        );
        // Add the new row to the table
        table.append(row);
        counter++;
    });
    // Delete a row when the delete button is clicked
    $(document).on("click", "#deleteButton", function() {
        $(this)
            .closest("tr")
            .remove();
    });

    // reset form if naka collapse
    var hide_assoc = document.getElementById("hide_assoc");
    var hide_reserv = document.getElementById("hide_reserv");
    var hide_other = document.getElementById("hide_other");
    // reset form ng association part
    hide_assoc.addEventListener("click", function() {

        $("#property").val("");
        $("#unpaid").val("");
        $("#total-balance").val("");
        $("#interest").val("");
        $("#period-of-payment").val("");

        $("#period-total").val("");
        $("#discount").val("");
        $("#dues-remaining-balance").val("");
        $("#subtotal").val("");
    }); // reset form ng association part

    // reset form ng OTHER SERVICES part
    hide_reserv.addEventListener("click", function() {

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
    }); // reset form ng OTHER SERVICES part

    // reset form ng OTHER SERVICES part
    hide_other.addEventListener("click", function() {

        $("#o_subtotal").val("");
        $("#category").val("");
        $("#quantity").val("");
        $("#price").val("");

        for (var i = 1; i <= 10; i++) {
            $("#category" + i).val("");
            $("#quantity" + i).val("");
            $("#price" + i).val("");
            $("#o_subtotal" + i).val("");
        }
    }); // reset form ng reservation part
</script>