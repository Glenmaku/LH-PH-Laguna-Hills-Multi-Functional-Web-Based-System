<?php

include ('connection.php');


    if(isset($_POST['input'])){
        $input = $_POST['input'];
    }
    $sql= "SELECT * FROM `lot_information` WHERE Block LIKE '{$input}%' OR Lot LIKE '{$input}%'";

    $result=mysqli_query($con,$sql);

    if(mysqli_num_rows($result) > 0){?>

            <table class="table table-bordered table-striped mt-4">
                <thread>
                    <tr>
                        <th>Block</th>
                        <th>Lot</th>
                        <th>Street</th>
                        <th>Status</th>
                        <th>Area</th>
                        <th>Price</th>
                        <th>Remarks</th>
                    </tr>
                </thread>

                <tbody>
                    <?php

                    while($row = mysqli_fetch_assoc($result)){
                        $Block = $row['Block'];
                        $Lot = $row['Lot'];
                        $Street = $row['Street'];
                        $Status = $row['Status'];
                        $Area = $row['Area'];
                        $Price = $row['Price'];
                        $Remarks = $row['Remarks'];
                    ?>

                    
                    <tr>
                        <td><?php echo $Block;?></td>
                        <td><?php echo $Lot;?></td>
                        <td><?php echo $Street;?></td>
                        <td><?php echo $Status;?></td>
                        <td><?php echo $Area;?></td>
                        <td><?php echo $Price;?></td>
                        <td><?php echo $Remarks;?></td>
                    </tr>
                
                    <?php
                    }
                    ?>        
                </tbody>
            </table>


            <?php

    }else{
        echo "<h6>No Data Found</h6>";
    }

?>