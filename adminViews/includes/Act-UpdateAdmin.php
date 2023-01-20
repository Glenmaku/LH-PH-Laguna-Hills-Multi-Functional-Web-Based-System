<?php
    include ('connection.php');
    if(isset($_POST['updateAdminId'])){
        
        $account_admin_id = $_POST['updateAdminId'];
        
        $sql= "SELECT * FROM admin_accounts where admin_id ='".$account_admin_id."'";
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
    if(isset($_POST['adminUpdate_id'])){
        $admin_id = $_POST['adminUpdate_id'];
        $admin_fname = $_POST['up_admin_fname'];
        $admin_lname = $_POST['up_admin_lname'];
        $admin_email = $_POST['up_admin_email'];
        if(empty($admin_fname)||empty($admin_lname)||empty($admin_email)){
            echo 'Fill all the blanks';
        }
        else{
            if (!preg_match("/^[a-zA-Z -]*$/",  $admin_fname) || !preg_match("/^[a-zA-Z -]*$/",  $admin_lname)) {
                echo 'Invalid Characters';
        }else{
            if (!filter_var($admin_email, FILTER_VALIDATE_EMAIL)) {
                echo 'Invalid Email';
        }else{
                    $sql ="UPDATE `admin_accounts` SET admin_fname = '$admin_fname', admin_lname = '$admin_lname', admin_email = '$admin_email' WHERE admin_id = '$admin_id'";
                    $result = mysqli_query($con, $sql);
                    echo 'Successfully updated user information';
        }
    }
    }}
?>