<?php
// require("connection.php");


// $sql = "SELECT Lot_ID FROM association_dues WHERE Dues_Status IN ('updated', 'advanced')";
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

$sql = "SELECT a.Lot_ID, MAX(t.assoc_date_payment) as LastPaymentDate
FROM association_dues a
LEFT JOIN transaction_assoc t ON a.Lot_ID = t.Lot_ID
WHERE a.Dues_Status IN ('updated', 'advanced')
GROUP BY a.Lot_ID";

$result = mysqli_query($con, $sql);

// Display the results in a table
echo '<table class="table text-center">';
echo '<thead><tr><th>Block & Lot</th><th>Payment Date</th></tr></thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' . $row['Lot_ID'] . '</td><td>' . $row['LastPaymentDate'] . '</td></tr>';
}
echo '</tbody></table>';
// Close the connection
mysqli_close($con);
?>