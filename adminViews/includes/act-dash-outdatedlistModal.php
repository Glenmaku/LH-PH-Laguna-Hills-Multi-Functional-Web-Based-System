<?php
require("connection.php");
$sql = "SELECT a.Lot_ID, COALESCE(b.assoc_date_payment, '') as assoc_date_payment, a.Balance 
        FROM association_dues a 
        LEFT JOIN (SELECT Lot_ID, MAX(assoc_date_payment) as assoc_date_payment 
              FROM transaction_assoc 
              GROUP BY Lot_ID) b 
        ON a.Lot_ID = b.Lot_ID 
        WHERE a.Dues_Status IN ('outdated') ORDER BY a.Balance DESC";

$query ="SELECT *
FROM assigned_lot
JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username
JOIN association_dues ON assigned_lot.lot_id = association_dues.Lot_ID";

$result = mysqli_query($con, $query);
$email = mysqli_fetch_assoc($result)['owner_email'];


$result = mysqli_query($con, $sql);
$count = 1;
// Display the results in a table
echo '<table class="table text-center viewOutdatedList">';
echo '<thead><tr><th>No.</th><th>Block & Lot</th><th>Balance</th><th>Last Payment Date</th><th>Notice</th></tr></thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr><td>' . $count . '</td>';
  echo '<td>' . $row['Lot_ID'] . '</td>';
  echo '<td>' . $row['Balance'] . '</td>';
  echo '<td>' . $row['assoc_date_payment'] . '</td>';
  echo '<td><button class="btn btn-success btn-sm send-notice" data-lot-id="' . $row['Lot_ID'] . '">Send</button></td></tr>';
  $count++;
}
echo '</tbody></table>';

// Close the connection
mysqli_close($con);
?>

<script>
$(document).ready(function() {
  $('.send-notice').click(function() {
    var lotId = $(this).data('lot-id');
    var button = $(this);
    button.prop('disabled', true);
    button.text('Sending...');

    $.ajax({
      url: 'adminViews/phpmailer/act-sendNotice.php',
      type: 'POST',
      data: { },
      success: function(response) {
        alert('Email sent successfully for Lot ID ' + lotId + '!');
        button.prop('disabled', true);
        button.text('Sent');
      },
      error: function(xhr, status, error) {
        alert('An error occurred while sending the email for Lot ID ' + lotId + '.');
        button.prop('disabled', false);
        button.text('Send');
      }
    });
  });
});
</script>
