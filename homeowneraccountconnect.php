<!--JUST COPY THE CODE BETWEEN THE COMMENT AND PASTE IT TO THE HOMEOWNER BODY OR HEADER-->
<?php
session_start();
if (!empty($_SESSION['owner_I_D'])) {
    $username = $_SESSION['owner_username'];
    $ownerid = $_SESSION['owner_I_D'];
    $Fname = $_SESSION['owner_fName'];
    $Lname = $_SESSION['owner_lName'];
    $Email = $_SESSION['owner_email'];
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
    <title>LH-PH: Homeowners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"></link>
    <!--------- Stylesheet ------------>
    <link rel="stylesheet" href="assets/css/style.css"></link>
    <!--------- Icon ------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></link>

</head>

<body>

    <?php
    include 'homeownerViews/homeownerHeader.php';
    include 'homeownerViews/homeownerSidebar.php';
    ?>
    <div class="allContent">
        <div class="home-dashboard">
            <div class="dashboard-title">
                <h1>DASHBOARD</h1>
            </div>
        </div>

        <div class="dashboard-status" id="dashboard-status">
            <div class="home-lot-status" id="home-lot-status">

            </div>
        </div>

        <div class="transaction-history-content">
            <div class="history-content" id="history-content">

            </div>
        </div>
    </div>


    <!--BOOTSTRAP SCRIPTS FOR MODALS-->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="assets/js/ajax.js"></script>
<script>

function displayHomeStatus() {
    var DBstatusData = "true";
    $.ajax({
        url: 'homeownerViews/includes/act-displaydashboard.php',
        type: 'post',
        data: {
            DBstatusSend: DBstatusData
        },
        success: function(data, status) {
            $('#home-lot-status').html(data);
        }
    });
}

    $(document).ready(function() {
        displayHistory();
        displayHomeStatus()
    })

    //display history
    $(document).ready(function() {
        var currentPage = localStorage.getItem("currentPage");
        if (!currentPage) {
            currentPage = 1;
        }
    });

    function displayHistory(page) {
        localStorage.setItem("currentPage", page);
        var historyData = "true";
        $.ajax({
            url: 'homeownerViews/includes/act-displayHistory.php',
            type: 'post',
            data: {
                historySend: historyData,
                page: page
            },
            success: function(data, status) {
                $('#history-content').html(data);
            }
        });
    }

    function getHistoryPage(page) {
        displayHistory(page);
    }
</script>

</html>