<?php
session_start();
if (!empty($_SESSION['admin_I_D'])) {
    $username = $_SESSION['admin_username'];
    $Fname = $_SESSION['admin_fName'];
    $Lname = $_SESSION['admin_lName'];
    $Email = $_SESSION['admin_email'];
}
    ?>
<div class="all-transaction">
    <div class="transaction-menu">
        <div class="transaction-title">
            <h1>TRANSACTION</h1>
        </div>
       
        <input id="admin-name-trans" value="<?php echo $Fname." ".$Lname?>" hidden>
        <div class="transaction-content">
            <div class="transaction-sheet">
                <div class="transaction-container">
                    <div class="container-horizontal">
                        <div class="transaction-details">
                            <div class="transaction-line">
                                <span>Transaction No.</span>
                                <input type="text" name="transaction-number" id="trans-no" placeholder="YYYY-0000" disabled>
                            </div>
                            <div class="date-container">
                                <span>Date:</span>
                                <input type="date" name="date" id="date" disabled >
                            </div>
                            
                        </div><div id="transaction_errors_info" class=" ms-1 me-1"></div>
                        <div class="row align-items-start d-flex flex-row mt-2">
                        <div class="col-8">
                        <div class="input-group fornames ">
                            <span class="input-group-text">Full name</span>
                            <input type="text" aria-label="First name" class="form-control border border-dark" list="firstnames" name="name" id="first-name" placeholder="Enter firstname..."> <datalist id="firstnames"></datalist>
                            <input type="text" aria-label="Last name" class="form-control border border-dark"list="lastnames" name="name" id="last-name" placeholder="Enter lastname..."><datalist id="lastnames"></datalist>
                        </div></div>
                        <div class="col-4">
                        <div class="input-group fornames">
                            <span class="input-group-text">Email</span>
                            <input type="text" list="emailsss" class="form-control border border-dark" placeholder="Enter email..." id="transaction-email"><datalist id="emailsss"></datalist>
                            </div></div>
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
                            <i id="hide_assoc_i" class="fa-solid fa-chevron-up accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne" onclick="assocSubmit()"></i>
                        </div>
                    </div>
                    <div id="transaction_errors_assoc" class=" ms-1 me-1"></div>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div id="trans-assoc-error"></div>
                        <div class="accordion-body">
                            <div class="lot-number">
                                <div class="propertycontainer">
                                    <!--FOR OWNER lot_id FIELD-->

                                    <label for="Blocklot">
                                        <span>BlockLot</span>
                                    </label><br>
                                    <input list="blkandlots" name="property" id="property" placeholder="property" class="border border-dark">
                                    <datalist id="blkandlots"></datalist>

                                </div>
                                <div class="total-balance">
                                    <span>Total Balance:</span><br>
                                    <input name="total-balance" id="total-balance" readonly value="0" dir="rtl" class="text-space">
                                </div>
                            </div>

                            <div class="address-status">
                                <div class="unpaid">
                                    <span>Selected Balance</span><br>
                                    <input type="number" name="selected-balance" id="selected-balance" placeholder="0" value="0" required dir="rtl"class="border border-dark">
                                </div>
                                <div class="interest">
                                    <span>Interest/Penalty:</span> <br>
                                    <input type="number" name="a-interest" id="a-interest" placeholder="0" value="0" dir="rtl"class="border border-dark">
                                </div>
                                <div class="period-of-payment">
                                    <span>Discount:</span><br>
                                    <input type="number" name="a-discount" id="a-discount" placeholder="Enter discount.." value="0" dir="rtl"class="border border-dark">
                                </div>
                            </div>

                            <div class="address-status">
                                <div></div>
                                <div class="total">
                                    <span>Total:</span> <br>
                                    <input name="balance-total" id="balance-total" readonly value="0" dir="rtl">
                                </div>
                            </div>

                        </div> <!-- accordion-body -->
                    </div>
                </div>

                <!--RESERVATION SECTION-->
                <div class="reservation">
                    <div class="reservation-title">
                        <div class="div-title">
                            <h2 id="panelsStayOpen-headingTwo" >RESERVATION</h2>
                        </div>
                        
                        <div class="hide-option" id="hide_reserv">
                            <i id="hide_reserv_i" class="fa-solid fa-chevron-down accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo" onclick="reserveSubmit()"></i>
                        </div>
                    </div>
                     <div id="transaction_errors_reserv" class=" ms-1 me-1"></div>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse hide" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">

                            <!-- label -->
                            <div  class="d-flex flex-row">

                                <div class="selection_reserver d-flex flex-column flex-fill ms-4 justify-content-center" style="margin-top:15px;">
                                    <div class="reserver-class justify-content-center align-items-start" style="width:100%;">
                                        <span class=" justify-content-start text-start d-flex">Reserver:</span>
                                        <div class="d-flex flex-row justify-content-end pe-1">
                                        <div class="form-check">
                                            <input class="form-check-input reserver_type" type="checkbox" value="Homeowner" id="homeowner-reserver">
                                            <label class="form-check-label me-3" for="flexCheckDefault">
                                                Homeowner
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input reserver_type" type="checkbox" value="Guest" id="guest-reserver">
                                            <label class="form-check-label me-3" for="flexCheckDefault">
                                                Guest
                                            </label>
                                        </div>     
                                    </div>
                                </div>
                            </div>
                            <script>const homeownerReserver = document.getElementById("homeowner-reserver");
                                    const guestReserver = document.getElementById("guest-reserver");

                                    homeownerReserver.addEventListener("click", function() {
                                    if (homeownerReserver.checked) {
                                        guestReserver.checked = false;
                                    }
                                    });

                                    guestReserver.addEventListener("click", function() {
                                    if (guestReserver.checked) {
                                        homeownerReserver.checked = false;
                                    }
                                    });</script>
                            <div class="reservation-date">
                                <span class=" justify-content-start text-start d-flex">Reservation Date:</span>
                            <div class="d-flex flex-row justify-content-end">
                                <input type="date" name="from-reservation-date" id="from-reservation-date" class="text-center">
                                <span>-</span>
                                <input type="date" name="to-reservation-date" id="to-reservation-date"class="text-center">
                            </div></div>


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
                                            <input type="time" name="f-time-from" id="in-radio-hall1" disabled="disabled" placeholder="6am"class="text-center">
                                            <span>-</span>
                                            <input type="time" name="f-time-to" id="in-radio-hall2" placeholder="10am" disabled="disabled"class="text-center">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="number" name="reservation-price" id="in-radio-hall3" value="0" disabled="disabled"dir="rtl">
                                        </div>
                                    </div>

                                    <!-- court -->
                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="checkbox" class="form-check-input" id="radio-court" name="reservation-location" value="Court">
                                            <span>Court</span>
                                        </div>
                                        <div class="reservation-time">
                                            <input type="time" name="f-time-from" id="in-radio-court1" placeholder="6am" disabled="disabled"class="text-center">
                                            <span>-</span>
                                            <input type="time" name="f-time-to" id="in-radio-court2" placeholder="10am" disabled="disabled"class="text-center">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="number" name="reservation-price" id="in-radio-court3" value="0" disabled="disabled"dir="rtl">
                                        </div>
                                    </div>

                                    <!-- miming pool -->
                                    <div class="selected-reservation">
                                        <div class="reservation-place">
                                            <input type="checkbox" class="form-check-input" id="radio-miming" name="reservation-location" value="Swimming Pool">
                                            <span>Swimming Pool</span>
                                        </div>
                                        <div class="reservation-time">
                                            <input type="time" name="f-time-from" id="in-radio-miming1" placeholder="6am" disabled="disabled"class="text-center">
                                            <span>-</span>
                                            <input type="time" name="f-time-to" placeholder="10am" id="in-radio-miming2" disabled="disabled"class="text-center">
                                        </div>
                                        <div class="reservation-price">
                                            <input type="number" name="reservation-price" id="in-radio-miming3" value="0" disabled="disabled"dir="rtl">
                                        </div>
                                    </div>
                            </div>

                            <div class="reservation-subtotal">
                                <div class="r-subtotal-label">
                                    <div class="r-discount">
                                        <span>Discount:</span><br>
                                        <input type="number" class="r-discounts" name="r-discount" id="r-discount" value="0"dir="rtl">
                                    </div>
                                    <div class="selection_authorization d-flex flex-column flex-fill ms-4 justify-content-center ">
                                    <span>Authorization:</span>
                                    <div class="authorization-class d-flex flex-row justify-content-end">
                                        <div class="form-check">
                                            <input class="form-check-input authorization_type" type="checkbox" value="Valid ID" id="authorize_id">
                                            <label class="form-check-label me-3" for="flexCheckDefault">
                                                Valid ID
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input authorization_type" type="checkbox" value="Authorization letter" id="authorize_letter">
                                            <label class="form-check-label me-3" for="flexCheckDefault">
                                                Authorization letter
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input authorization_type" type="checkbox" value="Referral" id="authorize_referral">
                                            <label class="form-check-label me-3" for="flexCheckDefault">
                                                Referral
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- accordion-body -->
                    </div>
                </div>

                <!-- OTHER SERVICES Section---------------------------------------------------------->
                <div class="other-transaction">
                    <div class="other-transaction-title">
                        <div class="div-title">
                            <h2 id="panelsStayOpen-headingThree">OTHER TRANSACTIONS</h2>
                        </div>
                        <div class="hide-option" id="hide_other">
                            <i id="hide_other_i" class="fa-solid fa-chevron-down accordion-button-icon" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree" onclick="otherSubmit()">
                            </i>
                        </div>
                    </div>
                    <div id="transaction_errors_others" class=" ms-1 me-1"></div>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse hide" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <table class="other-services" id="input_table">
                                <thead>
                                    <tr>
                                        <th style="width: 30px">#</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><input type="text" list="other_categories" class="form-control" id="o_category" name="field1" required/><datalist id="other_categories" class="other_categories"></datalist></td>
                                        <td><input type="number" class="form-control o_quantity text-center" id="o_quantity" name="field2" required/></td>
                                        <td><input type="number" class="form-control o_price" id="o_price" name="field3" dir="rtl"required/></td>
                                        <td><input type="number" class="form-control o_subtotal" id="o_subtotal" name="field4" required dir="rtl"/></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input type="text" list="other_categories1" class="form-control" id="o_category1" name="field1" /><datalist id="other_categories1"class="other_categories"></datalist></td>
                                        <td><input type="number" class="form-control o_quantity1 text-center" id="o_quantity1" name="field2" /></td>
                                        <td><input type="number" class="form-control o_price1" id="o_price1" name="field3" dir="rtl" /></td>
                                        <td><input type="number" class="form-control o_subtotal1" id="o_subtotal1" name="field4" dir="rtl"/></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input type="text" list="other_categories2" class="form-control" id="o_category2" name="field1" /><datalist id="other_categories2"class="other_categories"></datalist></td>
                                        <td><input type="number" class="form-control o_quantity2 text-center" id="o_quantity2" name="field2" /></td>
                                        <td><input type="number" class="form-control o_price2" id="o_price2" name="field3" dir="rtl"/></td>
                                        <td><input type="number" class="form-control o_subtotal2" id="o_subtotal2" name="field4" dir="rtl"/></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input type="text" list="other_categories3" class="form-control" id="o_category3" name="field1" /><datalist id="other_categories3"class="other_categories"></datalist></td>
                                        <td><input type="number" class="form-control o_quantity3 text-center" id="o_quantity3" name="field2" /></td>
                                        <td><input type="number" class="form-control o_price3" id="o_price3" name="field3"dir="rtl" /></td>
                                        <td><input type="number" class="form-control o_subtotal3" id="o_subtotal3" name="field4"dir="rtl" /></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input type="text" list="other_categories4" class="form-control" id="o_category4" name="field1" /><datalist id="other_categories4"class="other_categories"></datalist></td>
                                        <td><input type="number" class="form-control o_quantity4 text-center" id="o_quantity4" name="field2" /></td>
                                        <td><input type="number" class="form-control o_price4" id="o_price4" name="field3"dir="rtl" /></td>
                                        <td><input type="number" class="form-control o_subtotal4" id="o_subtotal4" name="field4"dir="rtl" /></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- submit-area Section -->
            <div class="submit-area assoc-submit">
                <div class="transaction-history">
                    <button id="transac_history_modal_btn" onclick="Display_All_Transactions_Rec()"><i class="fa-solid fa-clock-rotate-left"></i> Transaction History</button>
                </div>
                <div class="payment">
                <div id="transaction_errors_assocpanel" class=" ms-1 me-1"></div>
                    <span>Total:</span>
                    <input type="text" class="form-control" name="all-total" id="all-total" value="0" disabled dir="rtl">

                    <span>Payment:</span>
                    <input type="text" class="form-control border border-dark" name="payment" id="a-payment" value="0" placeholder="Enter amount..." dir="rtl">

                    <span>Change:</span>
                    <input type="text" class="form-control" name="change" id="a-change" value="0" disabled dir="rtl">
                    <input type="checkbox" id="ifadvanced" ><span style="font-size: 14px;"> Advanced Payment </span><br>

                    <span>Dues Remaining Balance:</span>
                    <input type="text" class="form-control" name="remaining-balance" id="a-remaining-balance" disabled dir="rtl">

                    <span>Remarks:</span><br>
                    <textarea id="a-remarks" placeholder="Type here.."class="border border-dark"></textarea><br>

                    <button type="submit" class="btn btn-success" id="assoc-submit">Submit</button>
                    <button type="reset" class="btn btn-danger" id="assoc-reset">Reset Form</button>
                </div>
            </div>
            <!--MODAL FOR SUBMIT-------------------------------------------------------------------

            end MODAL FOR SUBMIT-------------------------------------------------------------------->

            <!--  TRANSACTION NHISTORY -->

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
                                <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
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
                                        <button class="btn btn-primary" id="sort-balance">Sort by Balance</button>
                                    </div>
                                    <div id="delete-message-trans"></div>
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
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0"> </div>

                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                            </div>
                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
            <!-- SCRIPT NI TRANSACTION HISTORY-->
            <script>
                $("#transac_history_modal_btn").click(function() {
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
                function Display_All_Transactions_Rec(page) {
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
                function Display_Association_Dues_Rec(page) {
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
                function Display_Reservations_Rec(page) {
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
                function Display_Other_Services_Rec(page) {
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
                }); 

                //data insertion sa reservation palang
                // clear the forms after pressing the reset button  
                $("#assoc-reset").click(function() {
                    $("#last-name").val("");
                    $("#first-name").val("");
                    $("#transaction-email").val("");
                    $("#property").val("");
                    $("#total-balance").val("0");
                    $("#selected-balance").val("0");
                    $("#a-interest").val("0");
                    $("#a-discount").val("0");
                    $("#balance-total").val("0");
                    $("#all-total").val("0");
                    $("#a-payment").val("0");
                    $("#a-change").val("0");
                    $("#ifadvanced").prop("checked", false);
                    $("#a-remaining-balance").val("");
                    $("#a-remarks").val("");
                    $("#selected-balance").val("0");
                    $("#a-interest").val("0");
                    $("#a-discount").val("0");
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
                        input3.value = "0";
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
                        input3.value = "0";
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
                        input3.value = "0";
                    }
                });
                //end checkbox reset 

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

                // Get the table object
                // reset form if naka collapse
                var hide_assoc = document.getElementById("hide_assoc");
                var hide_reserv = document.getElementById("hide_reserv");
                var hide_other = document.getElementById("hide_other");
                // reset form ng association part
                hide_assoc.addEventListener("click", function() {
                    $('#panelsStayOpen-collapseOne').removeClass('collapse hide').addClass('collapse show');
                    $('#panelsStayOpen-collapseTwo').removeClass('collapse show').addClass('collapse hide');
                    $('#panelsStayOpen-collapseThree').removeClass('collapse show').addClass('collapse hide');

                    $('#hide_assoc_i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
                    $('#hide_reserv_i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
                    $('#hide_other_i').removeClass('fa-chevron-up').addClass('fa-chevron-down');

                    $("#property").val("");
                    $("#selected-balance").val("0");
                    $("#a-interest").val("0");
                    $("#total-balance").val("0");
                    $("#balance-total").val("0");
                    $("#a-discount").val("0");
                    $("#assoc-reset").trigger("click");
                    $(".close_alert_assoc").trigger("click");
                    $(".close_alert_reserv").trigger("click");
                    $(".close_alert_others").trigger("click");

                }); // reset form ng association part

                // reset form ng OTHER SERVICES part
                hide_reserv.addEventListener("click", function() {
                    $('#panelsStayOpen-collapseOne').removeClass('collapse show').addClass('collapse hide');
                    $('#panelsStayOpen-collapseTwo').removeClass('collapse hide').addClass('collapse show');
                    $('#panelsStayOpen-collapseThree').removeClass('collapse show').addClass('collapse hide');

                    $('#hide_assoc_i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
                    $('#hide_reserv_i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
                    $('#hide_other_i').removeClass('fa-chevron-up').addClass('fa-chevron-down');

                    $("#from-reservation-date").val("");
                    $("#to-reservation-date").val("");
                    $("#in-radio-hall1").val("");
                    $("#in-radio-hall2").val("");
                    $("#in-radio-hall3").val("0");

                    $("#in-radio-court1").val("");
                    $("#in-radio-court2").val("");
                    $("#in-radio-court3").val("0");

                    $("#in-radio-miming1").val("");
                    $("#in-radio-miming2").val("");
                    $("#in-radio-miming3").val("0");
                    $("#r-discount").val("0");

                    $("#radio-hall").prop("checked", false);
                    $("#radio-court").prop("checked", false);
                    $("#radio-miming").prop("checked", false);
                    $("#reserv_reset").trigger("click");
                    $(".close_alert_assoc").trigger("click");
                    $(".close_alert_reserv").trigger("click");
                    $(".close_alert_others").trigger("click");

                }); // reset form ng OTHER SERVICES part

                // reset form ng OTHER SERVICES part
                hide_other.addEventListener("click", function() {
                    $('#panelsStayOpen-collapseOne').removeClass('collapse show').addClass('collapse hide');
                    $('#panelsStayOpen-collapseTwo').removeClass('collapse show').addClass('collapse hide');
                    $('#panelsStayOpen-collapseThree').removeClass('collapse hide').addClass('collapse show');

                    $('#hide_assoc_i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
                    $('#hide_reserv_i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
                    $('#hide_other_i').removeClass('fa-chevron-down').addClass('fa-chevron-up');

                    $("#o_subtotal").val("");
                    $("#o_category").val("");
                    $("#o_quantity").val("");
                    $("#o_price").val("");

                    $("#o_subtotal1").val("");
                    $("#o_category1").val("");
                    $("#o_quantity1").val("");
                    $("#o_price1").val("");

                    for (var i = 1; i <= 10; i++) {
                        $("#o_category" + i).val("");
                        $("#o_quantity" + i).val("");
                        $("#o_price" + i).val("");
                        $("#o_subtotal" + i).val("");
                    }
                    $("#other-reset").trigger("click");

                    $(".close_alert_assoc").trigger("click");
                    $(".close_alert_reserv").trigger("click");
                    $(".close_alert_others").trigger("click");

                }); // reset form ng reservation part


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
                        var Talltotal = (totalBalance - ((discount / 100) * totalBalance) + interest).toFixed(2); ////
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
                                remainingBalance = (totalBalance - payment + (payment - alltotal) + interest - ((discount / 100) * selectedBalance)).toFixed(2);
                            }
                        }

                        $("#a-change").val(change);
                        $("#a-remaining-balance").val(remainingBalance);
                    }
                });

                //SUBMISSION OF TRANSACTION


                // association dues
                $(document).ready(function() {
                    $("#assoc-submit").click(function() {
                        var transaction_num = $("#trans-no").val();
                       // var transaction_name = $("#client-name").val();
                        var t_fname = $("#first-name").val();
                        var t_lname = $("#last-name").val();
                        var t_email = $("#transaction-email").val();
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
                        var admin_confirmed = $("#admin-name-trans").val();
                        var trans_date = $("#date").val();

                        $.ajax({
                            type: "POST",
                            url: "adminViews/includes/act-assoc_submit.php",
                            data: {
                                transaction_num: transaction_num,
                                //transaction_name: transaction_name,
                                t_fname:t_fname,
                                t_lname:t_lname,
                                t_email:t_email,
                                property: property,
                                total_balance: total_balance,
                                selected_balance: selected_balance,
                                discount: discount,
                                interest: interest,
                                balance_total: balance_total,
                                payment: payment,
                                change: change,
                                ifadvanced: ifadvanced,
                                remaining_balance: remaining_balance,
                                remarks: remarks,
                                admin_confirmed:admin_confirmed,
                                trans_date:trans_date
                            },
                            success: function(data) {
                                //alert(data);
                                $("#transaction_errors_assoc").html(data);
                                if(data==="Confirmation"){
                                    $('#assoc-submit-confirmation').modal('show');
                                //$("#assoc-reset").trigger("click");
                                }
                            }
                        });
                        
                    });
                 // for submission of association transaction to database
                  $(document).on('click','#assoc-submit-confirmed',function(){
                    var transaction_num = $("#trans-no").val();
                    var t_fname = $("#first-name").val();
                        var t_lname = $("#last-name").val();
                        var t_email = $("#transaction-email").val();
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
                        var remarks = $("#a-remarks").val(); x
                        var admin_confirmed = $("#admin-name-trans").val();
                        var trans_date = $("#date").val();

                        $.ajax({
                            type: "POST",
                            url: "adminViews/includes/act-assoc_submit_confirmed.php",
                            data: {
                                transaction_num: transaction_num,
                                t_fname:t_fname,
                                t_lname:t_lname,
                                t_email:t_email,
                                property: property,
                                total_balance: total_balance,
                                selected_balance: selected_balance,
                                discount: discount,
                                interest: interest,
                                balance_total: balance_total,
                                payment: payment,
                                change: change,
                                ifadvanced: ifadvanced,
                                remaining_balance: remaining_balance,
                                remarks: remarks,
                                admin_confirmed:admin_confirmed,trans_date:trans_date
                            },
                            success: function(data) {
                                
                                $("#close_assoc_confirmed").trigger("click");
                                $("#transaction_errors_assoc").html(data);
                                $("#assoc-reset").trigger("click");

                                $.ajax({
                                    type: "POST",
                                    url: "adminViews/includes/act-assoc_submit_confirmed_mail.php",
                                    data: {
                                        transaction_num: transaction_num,
                                        t_fname:t_fname,
                                        t_lname:t_lname,
                                        t_email:t_email,
                                        property: property,
                                        total_balance: total_balance,
                                        selected_balance: selected_balance,
                                        discount: discount,
                                        interest: interest,
                                        balance_total: balance_total,
                                        payment: payment,
                                        change: change,
                                        ifadvanced: ifadvanced,
                                        remaining_balance: remaining_balance,
                                        remarks: remarks,
                                        admin_confirmed:admin_confirmed,trans_date:trans_date
                                    },
                                    success: function(data) {

                                    }
                                });
                                $.ajax({
                                    url: 'adminViews/includes/act-transact.php',
                                    type: 'post', //path to PHP script
                                    success: function(data) {
                                    $("#trans-no").val(data); //update input field with response from server
                                    }               
                                 });
                                 $.ajax({
                                    type: 'POST',
                                    url: 'adminViews/includes/act-row-sum.php',
                                    success: function(response){
                                        console.log(response);
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        console.log(textStatus, errorThrown);
                                    }
                                });
                            
                            
                            }
                        });
                  })
                    $('#assoc-submit-confirmation').on('hidden.bs.modal', function (e) {
                        $(this).remove();
                        $('.modal-backdrop').remove();
                        $('.show').remove();
                    })
                    $.ajax({
                        url: 'adminViews/includes/act_get_categories.php',
                        type: 'post',
                        dataType: 'json',
                        success: function(response) {
                            var options = '';
                            for (var i = 0; i < response.length; i++) {
                                options += '<option value="' + response[i].category + '">';
                            }
                            $('.other_categories').append(options);
                        }
                    });

                });
              

                function reserveSubmit() { //sidebar
                    $.ajax({
                        url: "adminViews/includes/act-submitReserv.php",
                        method: "post",
                        data: {
                            record: 1
                        },
                        success: function(data) {
                            $('.payment').html(data);
                            $.ajax({
                                    url: 'adminViews/includes/act-transact.php',
                                    type: 'post', //path to PHP script
                                    success: function(data) {
                                    $("#trans-no").val(data); //update input field with response from server
                                    }               
                                 });
                        }
                    });
                }

                function otherSubmit() { //sidebar
                    $.ajax({
                        url: "adminViews/includes/act-submitOther.php",
                        method: "post",
                        data: {
                            record: 1
                        },
                        success: function(data) {
                            $('.payment').html(data);
                            $.ajax({
                                    url: 'adminViews/includes/act-transact.php',
                                    type: 'post', //path to PHP script
                                    success: function(data) {
                                    $("#trans-no").val(data); //update input field with response from server
                                    }               
                                 });
                        }
                    });
                }

                function assocSubmit() { //sidebar
                    
                    $.ajax({
                        url: "adminViews/includes/act-submitAssoc.php",
                        method: "post",
                        data: {
                            record: 1
                        },
                        success: function(data) {
                            $('.payment').html(data);
                        }
                    });
                }
            </script>
<script>
    //FOR DATALIST FIRST NAME
  $.ajax({
    type: "POST",
    url: "adminViews/includes/fetch_names.php",
    success: function(data) {
      var names = JSON.parse(data);
      $.each(names, function(index, name) {
        $("#firstnames").append("<option value='" + name.owner_fname + "'>");
      });
    }
  });

  $.ajax({
    type: "POST",
    url: "adminViews/includes/fetch_lnames.php",
    success: function(data) {
      var names = JSON.parse(data);
      $.each(names, function(index, name) {
        $("#lastnames").append("<option value='" + name.owner_lname + "'>");
      });
    }
  });
  $(document).ready(function(){
  $("#first-name, #last-name").on("input", function() {
    var firstName = $("#first-name").val();
    var lastName = $("#last-name").val();

    $.ajax({
      type: "POST",
      url: "adminViews/includes/fetch_property.php",
      data: {first_name: firstName, last_name: lastName},
      success: function(data) {
        var lotIds = JSON.parse(data);
        $("#blkandlots").empty();
        for (var i = 0; i < lotIds.length; i++) {
          $("#blkandlots").append("<option value='" + lotIds[i] + "'>");
        }
      }
    });

    $.ajax({
      type: "POST",
      url: "adminViews/includes/fetch_transaction_emails.php",
      data: {first_name: firstName, last_name: lastName},
      success: function(data) {
        var Temails = JSON.parse(data);
        $("#emailsss").empty();
        for (var i = 0; i < Temails.length; i++) {
          $("#emailsss").append("<option value='" + Temails[i] + "'>");
        }
      }
    });
  });
});
    </script>