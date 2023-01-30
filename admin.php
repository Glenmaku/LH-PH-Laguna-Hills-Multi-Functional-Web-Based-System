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

    <!--------- Stylesheet ------------>
    <link rel="stylesheet" href="assets/css/style.css"></link>
    <!--------- Icon ------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!--------- Script ------------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>
    <?php
    include "adminViews/adminHeader.php";
    include "adminViews/sidebar.php";

    ?>

    <div class=" allContent" id="main-content">
<div class="d-flex flex-row">
    <div></div>
<div class="d-flex flex-column">
        <div class="dashboard ">
            <div class="d-flex flex-row justify-content-center border border-success rounded d-flex flex-column  ">
            <div class="d-flex justify-content-center">
            <h1 class="text-center text-dark d-block d-flex">Population</h1>
            </div>
             <div class="d-flex flex-row justify-content-center"> 
                <div class="dashboard-row">
                <div class="admin-overview">
                    <i class="fa-solid fa-users-line"></i>
                    <div class="overview-desc">
                        <h1>48</h1>
                        <h5>Residents</h5>
                    </div>
                </div>
            </div>
            <div class="dashboard-row">
                <div class="admin-overview">
                    <i class="fa-solid fa-people-roof"></i>
                    <div class="overview-desc">
                        <h1 class="text-end">1000</h1>
                        <h5>Homeowners</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="dashboard">
        <div class="d-flex flex-row justify-content-center border border-success rounded d-flex flex-column  ">
            <div class="d-flex justify-content-center">
            <h1 class="text-center text-dark d-block d-flex">Association Dues</h1>
            </div>
             <div class="d-flex flex-row justify-content-center"> 
            <div class="dashboard-row">
                <div class="admin-overview">
                    <i class="fa-solid fa-file-circle-xmark"></i>
                    <div class="overview-desc">
                        <h1>500</h1>
                        <h5>Delinquent</h5>
                    </div>
                </div>
            </div>
            <div class="dashboard-row">
                <div class="admin-overview">
                    <i class="fa-solid fa-file-circle-check"></i>
                    <div class="overview-desc">
                        <h1>234</h1>
                        <h5>Updated</h5>
                    </div>
                </div</div>
            </div>
        </div>
    </div>
</div></div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="assets/js/ajax.js"></script>
<script src="assets/js/script.js"></script>
<script src="script.js"></script>
<script src="adminViews/includes/edit-info.js"></script>


</html>
<?php
