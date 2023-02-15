<?php
    include ('connection.php');
    if(isset($_POST['transno'])){
        
        $transno = $_POST['transno'];
        
        $reservationsql= "SELECT * FROM transac_reserv_records where records_transaction_no ='".$transno."'";
        $reservationresult = mysqli_query($con, $reservationsql);
        $reserve_response = array();

        while($row = mysqli_fetch_assoc($reservationresult)){
            $reserve_response = $row;
        }
        echo json_encode($reserve_response);
    }else{
        $reserve_response['status']=200;
        $reserve_response['message']="Invalid or data not found";
    }



?>
