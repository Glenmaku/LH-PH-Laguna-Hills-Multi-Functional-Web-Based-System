<div>
    <div class="transaction-history">
        <button data-bs-toggle="modal" data-bs-target="#reservation-history-modal"><i class="fa-solid fa-clock-rotate-left"></i> Reservation History</button>
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

<div class="modal modal-lg" tabindex="-1" id="reservation-history-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body reserveTable">
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>