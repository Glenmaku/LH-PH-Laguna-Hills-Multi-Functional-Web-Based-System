<?php
    include ('connection.php');
    if(isset($_POST['transno'])){
        
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
?>