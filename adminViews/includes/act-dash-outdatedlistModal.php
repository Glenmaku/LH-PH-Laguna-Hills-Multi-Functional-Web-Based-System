<?php
// require("connection.php");


// $sql = "SELECT Lot_ID FROM association_dues WHERE Dues_Status IN ('outdated')";
// $result = mysqli_query($con, $sql);

// // Display the results in a table
// echo '<table class="table text-center">';
// echo '<thead><tr><th>Block & Lot</th></tr></thead>';
// echo '<tbody>';
// while ($row = mysqli_fetch_assoc($result)) {
//     echo '<tr><td>' . $row['Lot_ID'] . '</td></tr>';
// }
// echo '</tbody></table>';
// // Close the connection
// mysqli_close($con);
?>
<?php
require("connection.php");

$sql = "SELECT a.Lot_ID, COALESCE(b.assoc_date_payment, '') as assoc_date_payment, a.Balance 
        FROM association_dues a 
        LEFT JOIN (SELECT Lot_ID, MAX(assoc_date_payment) as assoc_date_payment 
              FROM transaction_assoc 
              GROUP BY Lot_ID) b 
        ON a.Lot_ID = b.Lot_ID 
        WHERE a.Dues_Status IN ('outdated')";

$result = mysqli_query($con, $sql);

// Display the results in a table
echo '<table class="table text-center">';
echo '<thead><tr><th>Block & Lot</th><th>Balance</th><th>Last Payment Date</th></tr></thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' . $row['Lot_ID'] . '</td>';
    echo '<td>' . $row['Balance'] . '</td>';
    echo '<td>' . $row['assoc_date_payment'] . '</td></tr>';
    
}
echo '</tbody></table>';

// Close the connection
mysqli_close($con);
?>