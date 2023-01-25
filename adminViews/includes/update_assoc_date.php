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
    if(isset($_POST['loteditModal'])){
        $Lot_Id = $_POST['loteditModal'];
        $Block = $_POST['Block'];
        $Lot = $_POST['Lot'];
        $Street = $_POST['Street'];
        $Status = $_POST['Status'];
        $Area = $_POST['Area'];
        $Price = $_POST['Price'];
        $Remarks = $_POST['Remarks'];
        if(empty($Block)||empty($Lot)||empty($Street)){
            echo 'Fill all the blanks';
        }
        else{
            if (!preg_match("/^[a-zA-Z -]*$/",  $Block) || !preg_match("/^[a-zA-Z -]*$/",  $Lot)) {
                echo 'Invalid Characters';
        }else{
            if (!filter_var($Street, FILTER_VALIDATE_EMAIL)) {
                echo 'Invalid';
        }else{
                    $sql ="UPDATE `lot_information` SET Block = '$Block', Lot = '$Lot', Street = '$Street', Status = '$Status', Area = '$Area', Price = '$Price', Remarks = '$Remarks' WHERE Lot_ID = '$Lot_ID'";
                    $result = mysqli_query($con, $sql);
                    echo 'Successfully updated user information';
        }
    }
    }}
?>