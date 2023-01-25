<div>
    <div class="transaction-history">
        <button><i class="fa-solid fa-clock-rotate-left"></i> Transaction History</button>
    </div>
    <div class="payment">
        <span>Total:</span>
        <input type="text" class="form-control" name="total" id="total" value="0" disabled>
        <span>Payment:</span>
        <input type="text" class="form-control" name="payment" id="payment" value="0" placeholder="Enter amount..." onchange="calculate();">
        <span>Change:</span>
        <input type="text" class="form-control" name="change" id="change" value="0" disabled>
        <span>Remaining Balance:</span>
        <input type="text" class="form-control" name="remaining-balance" id="remaining-balance" value="0" disabled>
        <span>Remarks:</span>
        <textarea placeholder="Type here.."></textarea>
        <button type="submit" id="submit">Submit</button>
        <button type="reset" id="reset">Reset Form</button>
    </div>
</div>