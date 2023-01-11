<?php
    include 'connection.php';

    if(isset($_POST['updateid'])){
        $account_id=$_POST['updateid'];
        
        $sql= "SELECT * FROM `admin_accounts` WHERE admin_id=$account_id";
        $result = mysqli_query($con, $sql);
        $response = array();

        while($row = mysqli_fetch_assoc($result)){
            $response = $row;
        }
        echo json_encode($response);
    }else{
        $response['status']=200;
        $response['message']="Invalid or data not found";
    }

    // A query to update the data to database
    if(isset($_POST['hiddendata'])){
        $admin_id = $_POST['hiddendata'];
        $admin_fname = $_POST['updatefirstname'];
        $admin_lname = $_POST['updatelastname'];
        $admin_email = $_POST['updateemail'];

        $sql ="UPDATE `admin_accounts` SET admin_fname = '$admin_fname', admin_lname = '$admin_lname', admin_email = '$admin_email' WHERE admin_id = '$admin_id'";
        $result = mysqli_query($con, $sql);

    }
?>