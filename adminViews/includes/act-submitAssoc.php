<div>
    <div class="transaction-history">
        <button><i class="fa-solid fa-clock-rotate-left"></i> Transaction History</button>
    </div>
    <div class="payment">
        <span>Total:</span>
        <input type="text" class="form-control" name="all-total" id="all-total" value="0" disabled>

        <span>Payment:</span>
        <input type="text" class="form-control" name="payment" id="a-payment" value="0" placeholder="Enter amount...">

        <span>Change:</span>
        <input type="text" class="form-control" name="change" id="a-change" value="0" disabled>
        <input type="checkbox" id="ifadvanced"><span style="font-size: 14px;"> Advanced Payment </span><br>

        <span>Dues Remaining Balance:</span>
        <input type="text" class="form-control" name="remaining-balance" id="a-remaining-balance" disabled>

        <span>Remarks:</span><br>
        <textarea id="a-remarks" placeholder="Type here.."></textarea><br>

        <button type="submit" class="btn btn-success" id="assoc-submit">Submit</button>
        <button type="reset" class="btn btn-danger" id="assoc-reset">Reset Form</button>
    </div>
</div>