<?php
require("connection.php");

$sql = "SELECT a.Lot_ID, COALESCE(b.assoc_date_payment, '') as assoc_date_payment, a.Balance 
        FROM association_dues a 
        LEFT JOIN (SELECT Lot_ID, MAX(assoc_date_payment) as assoc_date_payment 
              FROM transaction_assoc 
              GROUP BY Lot_ID) b 
        ON a.Lot_ID = b.Lot_ID 
        WHERE a.Dues_Status IN ('outdated') ORDER BY a.Balance DESC";

$result = mysqli_query($con, $sql);

$count = 1;
// Display the results in a table
echo '<table class="table text-center viewOutdatedList">';
echo '<thead><tr><th>No.</th><th>Block & Lot</th><th>Balance</th><th>Last Payment Date</th><th>Notice</th></tr></thead>';
echo '<tbody>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr><td>' . $count. '</td>';
    echo '<td>' . $row['Lot_ID'] . '</td>';
    echo '<td>' . $row['Balance'] . '</td>';
    echo '<td>' . $row['assoc_date_payment'] . '</td>';
    echo '<td><button class="btn btn-success btn-sm" id="sent-notice">Send</button></td></tr>';
    $count++;
}
echo '</tbody></table>';

// Close the connection
mysqli_close($con);
?>

<script>
$(document).ready(function() {
  $('#sent-notice').click(function() {
    // Disable the button to prevent multiple clicks
    $(this).prop('disabled', true);
    $(this).text('Sending...');

    // Send an AJAX request to the PHP script
    $.ajax({
      url: 'adminViews/includes/act-sendNotice.php',
      type: 'POST',
      data: { },
      success: function(response) {
        alert('Email sent successfully!');
        // Disable the button and change its text
        $('#sent-notice').prop('disabled', true);
        $('#sent-notice').text('Sent');
      },
      error: function(xhr, status, error) {
        alert('An error occurred while sending the email.');
        // Enable the button and restore its text
        $('#sent-notice').prop('disabled', false);
        $('#sent-notice').text('Send');
      }
    });
  });
});
;
</script>