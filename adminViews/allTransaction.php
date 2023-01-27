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
                            <i class="fa-regular fa-eye-slash accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" onclick="assocSubmit()"></i>
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
                                <div class="total-balance">
                                    <span>Total Balance:</span><br>
                                    <input name="total-balance" id="total-balance" disabled value="0">
                                </div>
                            </div>

                            <div class="address-status">
                                <div class="unpaid">
                                    <span>Selected Balance</span><br>
                                    <input type="text" name="selected-balance" id="selected-balance" placeholder="0" required>
                                </div>
                                <div class="interest">
                                    <span>Interest/Penalty:</span> <br>
                                    <input type="number" name="a-interest" id="a-interest" placeholder="0">
                                </div>
                                <div class="period-of-payment">
                                    <span>Discount:</span><br>
                                    <input type="number" name="a-discount" id="a-discount" placeholder="Enter discount.." value="0">
                                </div>
                            </div>

                            <div class="address-status">
                                <div></div>
                                <div class="total">
                                    <span>Total:</span> <br>
                                    <input name="balance-total" id="balance-total" readonly value="0">
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

                <!-- OTHER SERVICES Section-->
                <div class="other-transaction">
                    <div class="other-transaction-title">
                        <div class="div-title">
                            <h2 id="panelsStayOpen-headingThree">OTHER SERVICES
                            </h2>
                        </div>
                        <div class="hide-option" id="hide_other">
                            <i class="fa-regular fa-eye-slash accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree" onclick="reserveSubmit()">
                            </i>
                        </div>
                    </div>

                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse hide" aria-labelledby="panelsStayOpen-headingThree">
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
                                    <td><a href="javascript:void(0);" id="addRow" class="add_button btn btn-success" title="Add field"><i class="fa-solid fa-plus "></i> Add</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- submit-area Section -->
            <div class="submit-area assoc-submit">
                <div class="transaction-history">
                    <button id="transac_history_modal_btn"onclick="Display_All_Transactions_Rec()" ><i class="fa-solid fa-clock-rotate-left" ></i> Transaction History</button>
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



      <!--  TRANSACTIO NHISTORY -->

<!-- Modal -->
<div class="modal fade modal-xl " id="transact_history_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Transaction History</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="all-transaction-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="Display_All_Transactions_Rec()">All Transactions</button>

            <button class="nav-link" id="association-dues-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="Display_Association_Dues_Rec()">Association Dues</button>

            <button class="nav-link" id="reservation-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false" onclick="Display_Reservations_Rec()">Reservations</button>

            <button class="nav-link" id="other-services-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" onclick="Display_Other_Services_Rec()">Other Services</button>
          </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
<!---->
          <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0" >
          <div class=" input-group  mb-3 owner-search-add-area" style="justify-content: space-between;">
            <input type="text" class="form-control" id="search-all-transaction" placeholder="Search Here...." style="width: 40px;">
          </div>
            <div class=" " id="table-all-transaction_record"></div>
          </div>
<!---->
          <div class="tab-pane fade p-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
          <div class=" input-group  mb-3 owner-search-add-area" style="justify-content: space-between;">
            <input type="text" class="form-control" id="search-association-dues" placeholder="Search Here...." style="width: 40px;">
          </div>
          <div class=" " id="table-association-dues_record"></div>
<!---->
          </div>
          <div class="tab-pane fade p-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
          <div class=" input-group  mb-3 owner-search-add-area" style="justify-content: space-between;">
            <input type="text" class="form-control" id="search-reservations" placeholder="Search Here...." style="width: 40px;">
          </div>
          <div class=" " id="table-reservations_record"></div>
<!---->
          </div>
          <div class="tab-pane fade p-3" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
          <div class=" input-group  mb-3 owner-search-add-area" style="justify-content: space-between;">
            <input type="text" class="form-control" id="search-other-services" placeholder="Search Here...." style="width: 40px;">
          </div>
          <div class=" " id="table-other-services_record"></div>
<!---->
          </div>
        </div>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
</div>
          </div>
      <div class="modal-footer">
<<<<<<< Updated upstream
=======
  <!--      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>-->
>>>>>>> Stashed changes
      </div>
    </div>
  </div>
</div>
<!-- SCRIPT NI TRANSACTION HISTORY-->
<script>    
    $("#transac_history_modal_btn").click(function(){
        $("#transact_history_Modal").modal("show");
    });
    $(document).ready(function() {
        Display_All_Transactions_Rec();
        Display_Association_Dues_Rec();
        Display_Reservations_Rec();
        Display_Other_Services_Rec();
      });
  /////////////////////////////////////////////////////////////////////
  $(document).ready(function() {
        var currentPage = localStorage.getItem("currentPage");
        if (!currentPage) {
            currentPage = 1;
        }
        Display_All_Transactions_Rec(currentPage);
        Display_Association_Dues_Rec(currentPage);
        Display_Reservations_Rec(currentPage);
        Display_Other_Services_Rec(currentPage);
    });
/////////////////////
    function  Display_All_Transactions_Rec(page) {
        localStorage.setItem("currentPage", page);
        var Display_All_Transactions_Rec = "true";
        $.ajax({
            url: 'adminViews/includes/Act-Trans_His_All.php',
            type: 'post',
            data: {
                AllTransaction_Rec: Display_All_Transactions_Rec,
                page: page
            },
            success: function(data, status) {
                $("#table-all-transaction_record").html(data);
            }
        });
    } 
    function Get_All_Transaction_Table(page) {
        Display_All_Transactions_Rec(page);
    }
/////////////////////
function  Display_Association_Dues_Rec(page) {
        localStorage.setItem("currentPage", page);
        var Display_Association_Dues_Rec = "true";
        $.ajax({
            url: 'adminViews/includes/Act-Trans_His_Assoc.php',
            type: 'post',
            data: {
                Assoc_Rec: Display_Association_Dues_Rec,
                page: page
            },
            success: function(data, status) {
                $("#table-association-dues_record").html(data);
            }
        });
    } 
    function Get_Association_Dues_Table(page) {
        Display_Association_Dues_Rec(page);
        }
       
//////////////////////////////////////////////////////////////////////
function  Display_Reservations_Rec(page) {
        localStorage.setItem("currentPage", page);
        var Display_Reservations_Rec = "true";
        $.ajax({
            url: 'adminViews/includes/Act-Trans_His_Res.php',
            type: 'post',
            data: {
                Reservations_Rec: Display_Reservations_Rec,
                page: page
            },
            success: function(data, status) {
                $("#table-reservations_record").html(data);
            }
        });
    } 
function Get_Reservations_Table(page) {
            Display_Reservations_Rec(page);
        }
       
//////////////////////////////////////////////////////////////////////
function  Display_Other_Services_Rec(page) {
        localStorage.setItem("currentPage", page);
        var Display_Other_Services_Rec = "true";
        $.ajax({
            url: 'adminViews/includes/Act-Trans_His_Other.php',
            type: 'post',
            data: {
                Others_Rec: Display_Other_Services_Rec,
                page: page
            },
            success: function(data, status) {
                $("#table-other-services_record").html(data);
            }
        });
    } 

function Get_Others_Services_Table(page) {
            Display_Other_Services_Rec(page);
        }
//////////////////////////////////////////////////////////////////////
$(document).ready(function() {

load_data_all_transaction();
load_data_association_dues();
load_data_reservations();
load_data_other_services();


function load_data_all_transaction(alltransquery) {
    $.ajax({
        url: "adminViews/includes/Act-Search-Transaction-All.php",
        method: "POST",
        data: {
            alltransquery: alltransquery
        },
        success: function(data) {
            $("#table-all-transaction_record").html(data);
        }
    });
}
$('#search-all-transaction').keyup(function() {
    var search = $(this).val();
    if (search != '') {
        load_data_all_transaction(search);
    } else {
        load_data_all_transaction();
    }
});
////------------------------------------------------------------------
function load_data_association_dues(assocquery) {
    $.ajax({
        url: "adminViews/includes/Act-Search-Transaction-Assoc.php",
        method: "POST",
        data: {
            assocquery: assocquery
        },
        success: function(data) {
            $("#table-association-dues_record").html(data);
        }
    });
}
$('#search-association-dues').keyup(function() {
    var search = $(this).val();
    if (search != '') {
        load_data_association_dues(search);
    } else {
        load_data_association_dues();
    }
});
////------------------------------------------------------------------

function load_data_reservations(reservequery) {
    $.ajax({
        url: "adminViews/includes/Act-Search-Transaction-Res.php",
        method: "POST",
        data: {
            reservequery: reservequery
        },
        success: function(data) {
            $("#table-reservations_record").html(data);
        }
    });
}
$('#search-reservations').keyup(function() {
    var search = $(this).val();
    if (search != '') {
        load_data_reservations(search);
    } else {
        load_data_reservations();
    }
});
////------------------------------------------------------------------
function load_data_other_services(otherquery) {
    $.ajax({
        url: "adminViews/includes/Act-Search-Transaction-Other.php",
        method: "POST",
        data: {
            otherquery: otherquery
        },
        success: function(data) {
            $("#table-other-services_record").html(data);
        }
    });
}
$('#search-other-services').keyup(function() {
    var search = $(this).val();
    if (search != '') {
        load_data_other_services(search);
    } else {
        load_data_other_services();
    }
});



////------------------------------------------------------------------////////////////////////
});

</script>
<!------------------------------------------------------- ENND SCRIPT NI TRANSACTION HISTORY--> 

<!-- SCRIPT NI ADD TRANSACTION-->
<script>
    // script ni venn
    $(document).ready(function() {
        $.ajax({
            url: 'adminViews/includes/act-transact.php',
            type: 'post', //path to PHP script
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
    }); // end script venn



    //data insertion sa reservation palang
   


    // clear the forms after pressing the reset button  
    $("#assoc-reset").click(function() {
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

        $("#o_subtotal").val("");
        $("#category").val("");
        $("#quantity").val("");
        $("#price").val("");

        $("#o_subtotal1").val("");
        $("#category1").val("");
        $("#quantity1").val("");
        $("#price1").val("");

        for (var i = 1; i <= 10; i++) {
            $("#category" + i).val("");
            $("#quantity" + i).val("");
            $("#price" + i).val("");
            $("#o_subtotal" + i).val("");
        }

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
        var change = (parseFloat(payment)) - parseFloat(total);

        // set the value of change
        document.getElementById("change").value = change.toFixed(2);

        // set the value of change
        if (total > payment) {
            change = 0;
            document.getElementById("change").value = change.toFixed(2);
        } else if (payment > total) {
            document.getElementById("change").value = change.toFixed(2);
        }

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
                '<a href="javascript:void(0);" id="deleteButton" title="Delete field" class="btn btn-danger"><i class="fa-solid fa-minus "></i>Delete</a>'
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
        $("#selected-balance").val("");
        $("#a-interest").val("");
        $("#total-balance").val("");
        $("#balance-total").val("");
        $("#a-discount").val("");
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

        $("#o_subtotal1").val("");
        $("#category1").val("");
        $("#quantity1").val("");
        $("#price1").val("");

        for (var i = 1; i <= 10; i++) {
            $("#category" + i).val("");
            $("#quantity" + i).val("");
            $("#price" + i).val("");
            $("#o_subtotal" + i).val("");
        }
    }); // reset form ng reservation part


    $(document).ready(function() {
        $("#assoc-reset").click(function() {
            $("input[type='text']").val("0");
            $("input[type='number']").val("0");
            $("input[type='text'][list='blkandlots']").val("");
            $("textarea").val("");
            $("input[type='checkbox']").prop("checked", false);
        });
    });

    $(document).ready(function() {
    // Get total balance when property is selected
    $("#property").change(function() {
        var lot_id = $(this).val();
        if (lot_id) {
            $.ajax({
                url: "adminViews/includes/act-get_balance.php",
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
            url: "adminViews/includes/act-assoc_submit.php",
            data: {transaction_num:transaction_num,transaction_name:transaction_name,property:property, total_balance:total_balance, selected_balance:selected_balance, discount:discount, interest:interest, balance_total:balance_total, payment:payment, change:change, ifadvanced:ifadvanced, remaining_balance:remaining_balance, remarks:remarks},
            success: function(data) {
                alert("Data Inserted: " + data);
                $("#assoc-reset").trigger("click");
            }
        });
    });
});

function reserveSubmit(){  //sidebar
    $.ajax({
        url:"adminViews/includes/act-submitReserv.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.payment').html(data);
        }
    });
}

function assocSubmit(){  //sidebar
    $.ajax({
        url:"adminViews/includes/act-submitAssoc.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.payment').html(data);
        }
    });
}

</script>