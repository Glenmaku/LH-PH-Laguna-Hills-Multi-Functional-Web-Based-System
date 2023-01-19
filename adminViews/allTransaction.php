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
                                <input type="text" name="transaction-number" id="trans-no" value="0000" disabled>
                            </div>
                            <div class="date-container">
                                <span>Date:</span>
                                <input type="date" name="date" id="date" disabled>
                            </div>
                        </div>
                        <div class="client-name"><span>Name:</span>
                            <input type="text" name="name" id="client-name" placeholder="Enter name...">
                        </div>
                    </div>
                </div>


                <!-- ASSOCIATION DUES -->
                <div class="association-dues" id="association-dues">
                    <div class="association-title">
                        <div class="div-title">
                            <h2 id="panelsStayOpen-headingOne">ASSOCIATION DUES</h2>
                        </div>
                        <div class="hide-option">
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
                                    <input type="text" name="unpaid" id="unpaid" disabled>
                                </div>
                                <div class="total-balance">
                                    <span>Total Balance:</span> <br>
                                    <input type="text" name="total-balance" id="total-balance" disabled>
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
                                    <input type="text" name="subtotal" id="subtotal" disabled>
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
                        <div class="hide-option">
                            <i class="fa-regular fa-eye-slash accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo"></i>
                        </div>
                    </div>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">

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

                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="radio" name="reservation-location" value="Function Hall">
                                            <span>Function Hall</span>
                                        </div>
                                        <div class="reservation-time">
                                            <input type="text" name="f-time-from" id="f-time-from">
                                            <span>-</span>
                                            <input type="text" name="f-time-to" id="f-time-to">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="text" name="reservation-price" id="reservation-price">
                                        </div>
                                    </div>

                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="radio" name="reservation-location" value="Court">
                                            <span>Court</span>
                                        </div>
                                        <div class="reservation-time">
                                            <input type="text" name="f-time-from" id="f-time-from">
                                            <span>-</span>
                                            <input type="text" name="f-time-to" id="f-time-to">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="text" name="reservation-price" id="reservation-price">
                                        </div>
                                    </div>

                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="radio" name="reservation-location" value="Swimming Pool">
                                            <span>Swimming Pool</span>
                                        </div>
                                        <div class="reservation-time">
                                            <input type="text" name="f-time-from" id="f-time-from">
                                            <span>-</span>
                                            <input type="text" name="f-time-to" id="f-time-to">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="text" name="reservation-price" id="reservation-price">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="reservation-subtotal">
                                <div class="r-subtotal-label">
                                    <div class="r-discount">
                                        <span>Discount:</span><br>
                                        <input type="text" name="r-discount" id="r-discount">
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
                        <div class="hide-option">
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
                                    <td><input type="text" name="field1" /></td>
                                    <td><input type="text" name="field2" /></td>
                                    <td><input type="text" name="field3" /></td>
                                    <td><input type="text" name="field4" /></td>
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
                    <input type="text" name="total" id="total" disabled>
                    <span>Payment:</span>
                    <input type="text" name="payment" id="payment" placeholder="Enter amount...">
                    <span>Change:</span>
                    <input type="text" name="change" id="change" disabled>
                    <span>Remaining Balance:</span>
                    <input type="text" name="remaining-balance" id="remaining-balance" disabled>
                    <span>Remarks:</span>
                    <textarea placeholder="Type here.."></textarea>
                    <button type="submit" id="submit">Submit</button>
                    <button type="reset" id="reset">Reset Form</button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- SCRIPT NI ADD TRANSACTION-->
<script>
    $("#addRow").click(function() {
        // Get the table object
        var table = $("#input_table");

        // Create a new row
        var row = $("<tr>");

        // Add 4 cells to the new row
        row.append($("<td>").html('<input type="text" name="field1[]">'));
        row.append($("<td>").html('<input type="text" name="field2[]">'));
        row.append($("<td>").html('<input type="text" name="field3[]">'));
        row.append($("<td>").html('<input type="text" name="field4[]">'));

        // Add a delete button to the new row


        row.append(
            $("<td>").html(
                '<a href="javascript:void(0);" id="deleteButton" title="Delete field"><i class="fa-solid fa-minus "></i>Delete</a>'
            )
        );

        // Add the new row to the table
        table.append(row);
    });

    // Delete a row when the delete button is clicked
    $(document).on("click", "#deleteButton", function() {
        $(this)
            .closest("tr")
            .remove();
    });
</script>