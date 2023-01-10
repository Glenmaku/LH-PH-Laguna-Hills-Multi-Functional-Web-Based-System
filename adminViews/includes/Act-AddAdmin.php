<?php
    include 'connection.php';

    extract($_POST);

    if(isset($_POST['fnameSend']) && isset($_POST['lnameSend']) && isset ($_POST['emailSend']) 
    && isset ($_POST['userSend'])&& isset ($_POST['passSend'])){

        $sql = "INSERT into `admin_accounts` (admin_fname, admin_lname, admin_username, admin_email, admin_password)
        values ('$fnameSend', '$lnameSend', '$userSend', '$emailSend', '$passSend' )";
        
        $result=mysqli_query($con,$sql);
    }
?>