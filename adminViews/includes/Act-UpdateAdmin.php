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
            echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
            Fill all the blanks
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
        }
        else{
            if (!preg_match("/^[a-zA-Z -]*$/",  $admin_fname) || !preg_match("/^[a-zA-Z -]*$/",  $admin_lname)) {
                echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
                Invalid Characters
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
        }else{
            if (!filter_var($admin_email, FILTER_VALIDATE_EMAIL)) {
                echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
                Invalid Email
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
        }else{
                    $sql ="UPDATE `admin_accounts` SET admin_fname = '$admin_fname', admin_lname = '$admin_lname', admin_email = '$admin_email' WHERE admin_id = '$admin_id'";
                    $result = mysqli_query($con, $sql);
                    echo'<div class="alert alert-success alert-dismissible fade show w-100" role="alert" >
                    Successfully updated user information
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
        }
    }
    }}
?>