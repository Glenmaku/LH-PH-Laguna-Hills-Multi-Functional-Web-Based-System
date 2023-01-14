<?php

include ('connection.php');


    if(isset($_POST['input'])){
        $input = $_POST['input'];
        $table='<table class="table">
        <thead>
          <tr>
            <th scope="col">Block</th>
            <th scope="col">Lot</th>
            <th scope="col">Street</th>
            <th scope="col">Status</th>
            <th scope="col">Area</th>
            <th scope="col">Price</th>
            <th scope="col">Remarks</th>
          </tr>
        </thead>';
    $sql= "SELECT * FROM `lot_information`";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $Lot_ID=$row['Lot_ID'];
        $Block=$row['Block'];
        $Lot=$row['Lot'];
        $Street=$row['Street'];
        $Status=$row['Status'];
        $Area=$row['Area'];
        $Price=$row['Price'];
        $Remarks=$row['Remarks'];
        $table.='<tr>
        <td scope="row">'.$Lot_ID.'</td>
        <td>'.$Block.'</td>
        <td>'.$Lot.'</td>
        <td>'.$Street.'</td>
        <td>'.$Status.'</td>
        <td>'.$Area.'</td>
        <td>'.$Price.'</td>
        <td>'.$Remarks.'</td>
      </tr>';
    }
    $table.='</table';
    echo $table;
}
?>    