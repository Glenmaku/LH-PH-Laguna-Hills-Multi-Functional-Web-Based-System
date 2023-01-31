 <!-- reservation section-->
 <div class="reservation">
     <div class="reservation-title">
         <div class="div-title">
             <h2 id="panelsStayOpen-headingTwo">RESERVATION
         </div>
         <div class="hide-option" id="hide_reserv">
             <i class="fa-regular fa-eye-slash accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo" onclick="reserveSubmit()"></i>
         </div>
     </div>
     <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="panelsStayOpen-headingTwo">
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

 <div>
     <div class="payment-area">
         <span>Total:</span>
         <input type="text" class="form-control reserv_total" name="reserv_total" id="reserv_total" value="0" disabled>
         <span>Payment:</span>
         <input type="text" class="form-control reserv_payment" name="reserv_payment" id="reserv_payment" value="0" placeholder="Enter amount..." onchange="calculate();">
         <span>Change:</span>
         <input type="text" class="form-control reserv_change" name="reserv_change" id="reserv_change" value="0" disabled>
         <span>Remaining Balance:</span>
         <input type="text" class="form-control reserv_remaining-balance" name="remaining-balance" id="reserv_remaining-balance" value="0" disabled>
         <span>Remarks:</span>
         <textarea placeholder="Type here.."></textarea>
         <button type="submit" id="reserv_submit" class="btn btn-success reserv_submit">Submit</button>
         <button type="reset" id="reserv_reset" class="btn btn-danger reserv_reset">Reset Form</button>
     </div>
 </div>

 <script>
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
         document.getElementById("reserv_total").value = subtotal.toFixed(2);

         // Declare variable for payment value
         var payment = document.getElementById("reserv_payment").value;

         // check if the payment is not a number
         if (isNaN(payment)) {
             alert("Please enter a valid number for reserv_payment");
             return;
         }
         // calculate change
         var change = (parseFloat(payment)) - parseFloat(total);

         // set the value of change
         document.getElementById("reserv_change").value = change.toFixed(2);

         // set the value of change
         if (total > payment) {
             change = 0;
             document.getElementById("reserv_change").value = change.toFixed(2);
         } else if (payment > total) {
             document.getElementById("reserv_change").value = change.toFixed(2);
         }

         // calculate remaining balance
         var remainingBalance = total - payment;

         // set the value of remaining balance
         if (remainingBalance > 0) {
             document.getElementById("reserv_remaining-balance").value = remainingBalance.toFixed(2);
         } else {
             remainingBalance = 0;
             document.getElementById("reserv_remaining-balance").value = remainingBalance.toFixed(2);
         }

     }
 </script>