<div class="all-transaction">
    <div class="transaction-menu">
        <div class="transaction-title">
            <h1>TRANSACTION</h1>
        </div>

        <div class="transaction-content">
            <div class="transaction-sheet">
                <div class="transaction-details">
                    <span>Transaction No.</span>
                    <input type="text" name="transaction-number" id="trans-no" value="0000" disabled>
                    <span>Date:</span>
                    <input type="date" name="date" id="date" disabled>
                    <div class="client-name">
                        <span>Name:</span>
                        <input type="text" name="name" id="client-name" placeholder= "Enter name...">
                    </div>
                </div>

                <div class="association-dues" id="association-dues">
                    <div class="association-title">
                        <div class="div-title">
                            <h2>ASSOCIATION DUES</h2>
                        </div>
                        <div class="hide-option">
                            <i class="fa-regular fa-eye-slash remove-option "></i>
                        </div>
                    </div>
                    <div class="lot-number">
                        <div class="block-num">
                            <span>Block</span><br>
                            <input type="text" name="block" id="block" placeholder="Enter block number..">
                        </div>
                        <div class="lot-num">
                            <span>Lot</span> <br>
                            <input type="text" name="lot" id="lot" placeholder="Enter lot number..">
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
                            <input type="text" name="period-of-payment" id="period-of-payment" placeholder="Enter period of payment.." >
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
                            <input type="text" name="dues-remaining-balance" id="dues-remaining-balance" disabled >
                        </div>
                        <div class="Subtotal">
                            <span>Subtotal:</span><br>
                            <input type="text" name="subtotal" id="subtotal" disabled>
                        </div>
                    </div>
                </div>
                <div class="reservation">
                    <div class="reservation-title">
                        <div class="div-title">
                            <h2>RESERVATION</h2>
                        </div>
                        <div class="hide-option">
                            <i class="fa-regular fa-eye-slash remove-option "></i>
                        </div>
                    </div>

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
                </div>

                <div class="other-transaction">
                    <div class="other-transaction-title">
                        <div class="div-title">
                            <h2>OTHER SERVICES</h2>
                        </div>
                        <div class="hide-option">
                            <i class="fa-regular fa-eye-slash"></i>
                        </div>
                    </div>
                    <div class="other-transaction-table">
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
                                // '<button class="fa-solid fa-minus"id="deleteButton" title="Delete field">Delete</button>'
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
                </div>
            </div>

    
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

