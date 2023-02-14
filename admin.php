<?php
session_start();
if (!empty($_SESSION['admin_I_D'])) {
  $username = $_SESSION['admin_username'];
  $adminid = $_SESSION['admin_I_D'];
  $Fname = $_SESSION['admin_fName'];
  $Lname = $_SESSION['admin_lName'];
  $Email = $_SESSION['admin_email'];
} else {
  header("location:index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LH-PH: Admin</title>
  <link rel="icon" type="image/x-icon" href="images/Untitled.png">
  <!--------- Stylesheet ------------>
  <link rel="stylesheet" href="assets/css/style.css">
  <!--------- Icon ------------>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <!--------- Script ------------>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
  .dashboard-holder {
    height: 80vh;
    width: auto;
    margin-right: 30px;
    padding-top: 10px;
    margin-bottom: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .dashboard-holder .dash-transaction-records {
    width: 100%;
    height: 50%;
    display: flex;
    position: relative;
    flex-direction: row;
    margin-bottom: 10px;
  }

  /****************************************************************************************/
  .dashboard-holder .dash-transaction-records .transaction-areas {
    width: 65%;
    height: 100%;
    background-color: white;
    margin-bottom: 5px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    padding: 15px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .dashboard-holder .dash-transaction-records .transaction-areas h1 {
    font-size: 4vw;
  }

  .total-amount-transactions {
    margin-top: -20px !important;
    font-size: 50px;
    margin-right: 10px;
    border-bottom: 1px solid green;
  }

  .dashboard-holder .dash-transaction-records .transaction-areas .partitionss {
    display: flex;
    flex-direction: row;
  }

  .dashboard-holder .dash-transaction-records .transaction-areas .partitionss .left-side-trans {
    height: 100%;
    width: 50%;
    flex-direction: column;
    display: flex;
    padding: 10px;
  }

  .dashboard-holder .dash-transaction-records .transaction-areas .partitionss .left-side-trans .trans-rows {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

  .dashboard-holder .dash-transaction-records .transaction-areas .partitionss .right-side-trans {
    height: 100%;
    width: 50%;
    display: flex;
    flex-direction: column;

    padding: 10px;
  }

  .dashboard-holder .dash-transaction-records .transaction-areas .partitionss .right-side-trans .trans-rows {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
  }

  /****************************************************************************************/
  .dashboard-holder .dash-transaction-records .assoc-number-areas {
    width: 35%;
    height: 100%;
    background-color: white;
    margin-right: 15px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    padding: 15px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .dashboard-holder .dash-transaction-records .assoc-number-areas .partition {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    padding-left: 10px;
    padding-right: 10px;
    padding-bottom: 20px;
    margin-top: 10px;
  }

  .nums {
    display: flex;
    align-items: center;
    justify-content: end;
    padding-right: 2vw;
    width: 50%;
  }

  .nums h1 {
    font-size: calc(25px + 1.5vw);
  }

  .nums .lessers {
    bottom: 0;
    right: 0;
    margin-right: -40px;

  }

  .dashboard-holder .dash-transaction-records .assoc-number-areas .partition .for-outdated {
    width: 100%;
    height: 50%;
    display: flex;
    border: #E12323 2px solid;
    margin-right: 2px;
    flex-direction: row;
    border-radius: 5px;
    color: #E12323;
    align-items: center;
  }

  .dashboard-holder .dash-transaction-records .assoc-number-areas .partition .for-outdated i {
    font-size: calc(2vw);
    margin-right: 10px;
  }

  .for-outdated .setss {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 50%;
    color: #E12323;
    height: 100%;
    padding-left: 15px;

  }

  .for-outdated .setss h5 {
    font-size: calc(1.8vw);

  }

  .dashboard-holder .dash-transaction-records .assoc-number-areas .partition .for-updated {
    width: 100%;
    height: 50%;
    display: flex;
    border: #018E5A 2px solid;
    border-radius: 5px;
    flex-direction: row;
    color: #018E5A;
    margin-bottom: 10px;
    justify-content: space-between;
    align-items: center;
  }

  .dashboard-holder .dash-transaction-records .assoc-number-areas .partition .for-updated i {
    font-size: calc(2vw);
    margin-right: 10px;
  }

  .for-updated .setss {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 50%;
    color: #018E5A;
    height: 100%;
    padding-left: 15px;

  }

  .for-updated .setss h5 {
    font-size: calc(1.8vw);

  }

  .dashboard-holder .dash-most-container {
    width: 100%;
    height: 50%;
    margin-right: 10px;
    display: flex;
    position: relative;
    flex-direction: row;
  }

  .dashboard-holder .dash-most-container .right-divs {
    width: 35%;
    height: 100%;
    background-color: white;
    margin-left: 15px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    padding: 15px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss {
    display: flex;
    flex-direction: row;
    height: 100%;
    width: 100%;
    padding: 15px;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-homeowners {
    display: flex;
    flex-direction: column;
    border: 3px solid #085D40;
    color: #085D40;
    height: 100%;
    width: 50%;
    margin-right: 10px;
    border-radius: 5px;
    justify-content: space-between;
    align-items: center;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-homeowners .top-numss {
    justify-content: center;
    align-items: center;
    flex-direction: column;
    display: flex;
    height: 70%;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-homeowners .iconssss {
    display: flex;
    justify-content: center;
    text-align: center;
    right: 0;
    bottom: 0;
    font-size: 30px;
    width: 100%;
    margin-bottom: 10px;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-homeowners .iconssss .fa-people-roof {
    display: flex;
    justify-content: end;
    text-align: center;
    font-size: calc(20px + 2vw);
  }

  .ell {
    width: 100%;
    justify-content: end;
    text-align: end;
    margin-top: -30px;
    margin-bottom: 5px;
  }

  .ell i {
    right: 0;
    bottom: 0;
    font-size: calc(2vw);
    padding-right: 10px;
    margin-top: -40px;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-lotowners {
    display: flex;
    flex-direction: column;
    border: 3px solid #085D40;
    color: #085D40;
    height: 100%;
    width: 50%;
    border-radius: 5px;
    justify-content: center;
    align-items: center;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-lotowners .top-numss {
    justify-content: center;
    margin-top: 10px;
    align-items: center;
    flex-direction: column;
    display: flex;
    height: 70%;
  }

  .top-numss h1 {
    font-size: calc(35px + 2vw);
  }

  .top-numss {
    font-size: 50px;
    margin-top: 10px;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-lotowners .iconssss {
    display: flex;
    justify-content: center;
    text-align: center;
    right: 0;
    bottom: 0;
    font-size: 30px;
    width: 100%;

    margin-bottom: 10px;
  }

  .dashboard-holder .dash-most-container .right-divs .partitionsss .num-lotowners .iconssss .fa-users-line {
    display: flex;
    text-align: center;
    font-size: calc(20px + 2vw);
  }

  .dashboard-holder .dash-most-container .left-divs {
    width: 65%;
    height: 100%;
    background-color: white;
    margin-bottom: 5px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    padding: 15px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  }

  .dashboard-holder .dash-most-container .left-divs .this-long-lots {
    display: flex;
    flex-direction: row;
    padding: 10px;
    padding-top: 15px;
    padding-bottom: 17px;
    width: 100%;
    height: 100%;

  }

  .dashboard-holder .dash-most-container .left-divs .this-long-lots .box-available,
  .box-occupied,
  .box-foreclosed,
  .box-openspace,
  .box-withhouse {
    width: 20%;
    height: 100%;
    margin: 2px;
    border-radius: 5px;
    color: white;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 5px;
    padding-top: 10px;
  }

  .dashboard-holder .dash-most-container .left-divs .this-long-lots .box-available h1,
  .box-occupied h1,
  .box-foreclosed h1,
  .box-openspace h1,
  .box-withhouse h1 {
    font-size: calc(35px + 2vw);

  }

  .box-available {
    border: solid 2px #1FCE6D;
    background-color: #1FCE6D;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

  }

  .box-withhouse {
    border: solid 2px #2C97DE;
    background-color: #2C97DE;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

  }

  .box-occupied {
    border: solid 2px #E94B35;
    background-color: #E94B35;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

  }

  .box-foreclosed {
    border: solid 2px #E87E04;
    background-color: #E87E04;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .box-openspace {
    border: solid 2px #33495F;
    background-color: #33495F;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }
</style>

<body>
  <?php
  include "adminViews/adminHeader.php";
  include "adminViews/sidebar.php";

  ?>

  <div class=" allContent" id="main-content">
    <div class="admin-dashboard-title">
      <h1 class="text-center">DASHBOARD</h1>
    </div>
    <div class="dashboard-holder"><!--START OF OUTER-->

      <div class="dash-transaction-records "><!--START transactions-->

        <div class="assoc-number-areas"><!--ASSOC NUMBERS-->
          <h5 class="text-start ms-3 mt-2">Association Dues Status</h5>
          <div class="partition">
            <div class="for-updated"><!--UPDATED-->
              <div class="setss">
                <i class="fa-solid fa-user-check"></i>
                <h5 class="text-center mb-0">UPDATED</h5>
              </div>
              <div class="nums">
                <h1 class="text-center" id="dash-updated-num">000</h1>

              </div>
              <div class="lessers"><i class="fa-solid fa-ellipsis-vertical" id="updatedlistModal-btn"></i></div>

              <div class="modal fade" id="updatedlistModal">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Updated Dues</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="updatedlistModal-body">

                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>
              </div>
            </div><!--END UPDATED-->
            <div class="for-outdated"><!--OUTDATED-->
              <div class="setss">
                <i class="fa-solid fa-user-xmark"></i>
                <h5 class="text-center mb-0">OUTDATED</h5>
              </div>
              <div class="nums">
                <h1 class="text-center" id="dash-outdated-num">000</h1>
              </div>
              <div class="lessers"><i class="fa-solid fa-ellipsis-vertical" id="outdatedlistModal-btn"></i></div>

              <div class="modal fade modal-lg" id="outdatedlistModal">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Outdated Dues</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="outdatedlistModal-body">

                    </div>
                    <div class="modal-footer">

                    </div>
                  </div>
                </div>
              </div>
            </div><!--END OUTDATED-->
          </div><!--END OF PARTITION-->
        </div><!--END ASSOC NUMBERS-->

        <div class="transaction-areas"><!--TOTAL PESOSS-->
          <h5 class="text-start ms-3 mt-2">Transaction Records</h5>
          <h1 class="total-amount-transactions text-end" id="overall-trans-num">P 00000.00</h1>
          <div class="partitionss">
            <div class="left-side-trans"><!--LEFT SIDE-->
              <div class="trans-rows">
                <h6>Reservations</h6><b><span id="dash-reserv-num">P 0.00</span></b>
              </div>
              <div class="trans-rows">
                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Function Hall</h6><span id="dash-hall-num">P 0.00</span>
              </div>
              <div class="trans-rows">
                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Swimming Pool</h6><span id="dash-pool-num">P 0.00</span>
              </div>
              <div class="trans-rows">
                <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Covered Court</h6><span id="dash-court-num">P 0.00</span>
              </div>

            </div><!--END LEFT SIDE-->
            <div class="right-side-trans"><!--RIGHT SIDE-->
              <div class="trans-rows">
                <h6>Association Dues</h6><b><span id="dash-assocdues-num">P 0.00</span></b>
              </div>
              <div class="trans-rows">
                <h6>Other Services</h6><b><span id="dash-other-num">P 0.00</span></b>
              </div>
            </div><!--END RIGHT SIDE-->
          </div>
        </div><!--END TOTAL PESSOS-->

      </div><!--END transactions-->
      <div class="dash-most-container"><!--DASH MOST START-->

        <div class="left-divs"> <!--LOWER DIV-->
          <h5>Lot Status</h5>
          <div class="this-long-lots ">
            <div class="box-available">
              <h6>AVAILABLE</h6>
              <h1 id="dash-available-num"></h1>
            </div>
            <div class="box-withhouse">
              <h6>WITH HOUSE</h6>
              <h1 id="dash-withhouse-num"></h1>
            </div>
            <div class="box-occupied">
              <h6>OCCUPIED</h6>
              <h1 id="dash-occupied-num"></h1>
            </div>
            <div class="box-foreclosed">
              <h6>FORECLOSED</h6>
              <h1 id="dash-foreclosed-num"></h1>
            </div>
            <div class="box-openspace">
              <h6>OPEN SPACE</h6>
              <h1 id="dash-openspace-num"></h1>
            </div>
          </div>
        </div><!-- END LOWER DIV-->
        <div class="right-divs"><!--TOP-DIVS-->
          <h5>Population</h5>
          <div class="partitionsss">
            <div class="num-homeowners">
              <div class="top-numss">
                <h6>HOMEOWNERS</h6>
                <h1 id="dash-homeowners-num">000</h1>
              </div>
              <div class="iconssss"><i class="fa-solid fa-people-roof"></i>
              </div>
            </div>
            <div class="num-lotowners">
              <div class="top-numss">
                <h6>LOT OWNERS</h6>
                <h1 id="dash-lotowners-num">000</h1>
              </div>
              <div class="iconssss"><i class="fa-solid fa-users-line"></i></div>
            </div>
          </div><!-- END TOP-DIVS-->
        </div><!--DASH MOST END-->
      </div><!--END OF DASHBOARD HOLDER-->
    </div><!--END OF MAIN-CONTENT-->
    <script>
      window.onload = function() {
        $.ajax({
          type: "POST",
          url: "adminViews/includes/act-update_month_count.php",
          data: {},
          success: function(result) {
            console.log(result);
          }
        });
      }
      $(document).ready(function() {
        $.ajax({
          type: 'POST',
          url: 'adminViews/includes/act-row-sum.php',
          success: function(response) {
            console.log(response);
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
          }
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        //FORDUES///////////////////////////////////////////
        function get_dash_outdated_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-outdated.php",
            success: function(response) {
              $("#dash-outdated-num").html(response);
            }
          });
        }

        function get_dash_updated_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-updated.php",
            success: function(response) {
              $("#dash-updated-num").html(response);
            }
          });
        }
        ////////////////////////////////////////FOR DUES
        //////////////////////////
        function get_dash_available_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-available.php",
            success: function(response) {
              $("#dash-available-num").html(response);
            }
          });
        }

        function get_dash_withhouse_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-withhouse.php",
            success: function(response) {
              $("#dash-withhouse-num").html(response);
            }
          });
        }

        function get_dash_occupied_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-occupied.php",
            success: function(response) {
              $("#dash-occupied-num").html(response);
            }
          });
        }

        function get_dash_foreclosed_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-foreclosed.php",
            success: function(response) {
              $("#dash-foreclosed-num").html(response);
            }
          });
        }

        function get_dash_openspace_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-openspace.php",
            success: function(response) {
              $("#dash-openspace-num").html(response);
            }
          });
        }

        function get_dash_homeowners_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-homeowners.php",
            success: function(response) {
              $("#dash-homeowners-num").html(response);
            }
          });
        }

        function get_dash_lotowners_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-lotowners.php",
            success: function(response) {
              $("#dash-lotowners-num").html(response);
            }
          });
        }
        ////////////////////////////////////////for lot
        ////////////////////////
        function get_assocdues_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-assocdues.php",
            success: function(response) {
              $("#dash-assocdues-num").html(response);
            }
          });
        }

        function get_hall_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-hall.php",
            success: function(response) {
              $("#dash-hall-num").html(response);
            }
          });
        }

        function get_pool_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-pool.php",
            success: function(response) {
              $("#dash-pool-num").html(response);
            }
          });
        }

        function get_court_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-court.php",
            success: function(response) {
              $("#dash-court-num").html(response);
            }
          });
        }

        function get_reserv_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-reserv.php",
            success: function(response) {
              $("#dash-reserv-num").html(response);
            }
          });
        }

        function get_other_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-others.php",
            success: function(response) {
              $("#dash-other-num").html(response);
            }
          });
        }

        function get_overall_trans_num() {
          $.ajax({
            type: "GET",
            url: "adminViews/includes/act-dash-count-overall.php",
            success: function(response) {
              $("#overall-trans-num").html(response);
            }
          });
        }
        ////////////////////////////////////////
        get_dash_updated_num();
        get_dash_outdated_num();
        get_dash_available_num();
        get_dash_withhouse_num();
        get_dash_occupied_num();
        get_dash_foreclosed_num();
        get_dash_openspace_num();
        get_dash_homeowners_num();
        get_dash_lotowners_num();
        get_assocdues_num();
        get_hall_num();
        get_pool_num();
        get_court_num();
        get_reserv_num();
        get_other_num();
        get_overall_trans_num();

      });
      document.getElementById("outdatedlistModal-btn").addEventListener("click", function() {
        $("#outdatedlistModal").modal("show");
      });
      document.getElementById("updatedlistModal-btn").addEventListener("click", function() {
        $("#updatedlistModal").modal("show");
      });
      $(document).ready(function() {
        $.ajax({
          type: "POST",
          url: "adminViews/includes/act-dash-updatedlistModal.php",
          success: function(data) {
            $("#updatedlistModal-body").html(data);
          }
        });
      });
      $(document).ready(function() {
        $.ajax({
          type: "POST",
          url: "adminViews/includes/act-dash-outdatedlistModal.php",
          success: function(data) {
            $("#outdatedlistModal-body").html(data);
          }
        });
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/ajax.js"></script>
    <script src="assets/js/script.js"></script>-->
    <script src="script.js"></script>
    <script src="adminViews/includes/edit-info.js"></script>
    <script src="../adminViews/phpmailer/link.js"></script>
</body>

</html>
<?php
