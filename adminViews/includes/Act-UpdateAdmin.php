<?php
    include 'connection.php';

    if(isset($_POST['updateid'])){
        $account_id=$_POST['updateid'];
        
        $sql= "SELECT * from `admin_accounts` WHERE admin_id=$account_id";
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
?>