<?php
    include 'connection.php';

    if(isset($_POST['deleteSend'])){
        $unique = $_POST['deleteSend'];

        $sql = "DELETE FROM `admin_accounts` WHERE admin_id = $unique";
        $result = mysqli_query($con, $sql);
    }
?>