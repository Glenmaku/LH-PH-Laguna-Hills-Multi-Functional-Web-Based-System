<?php
require("connection.php");
$sql = "SELECT a.Lot_ID, COALESCE(b.assoc_date_payment, '') as assoc_date_payment, a.Balance, al.owner_username 
FROM association_dues a LEFT JOIN (SELECT Lot_ID, MAX(assoc_date_payment) as assoc_date_payment 
FROM transaction_assoc GROUP BY Lot_ID) b ON a.Lot_ID = b.Lot_ID 
LEFT JOIN assigned_lot al ON a.Lot_ID = al.Lot_ID WHERE a.Dues_Status IN ('outdated') ORDER BY a.Balance DESC;";

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
  echo '<td><button class="btn btn-success btn-sm send-notice" data-lot-id="' . $row['Lot_ID'] . '"data-username="' . $row['owner_username'] . '">Send</button></td></tr>';
  $count++;
}
echo '</tbody></table>';

// Close the connection
mysqli_close($con);
?>

<script>
$(document).ready(function() {
  $('.send-notice').click(function() {
    var username = $(this).data('username');
    var lotid = $(this).data('lot-id');
    var button = $(this);
    button.prop('disabled', true);
    button.text('Sending...');

    $.ajax({
      url: 'adminViews/includes/act-sendNotice_email.php',
      type: 'POST',
      data: { username: username, lotid:lotid },
      success: function(response) {
        //alert('Email sent successfully for Username ' + username + '!');
        alert(response);
        button.prop('disabled', true);
        button.text('Sent');
      },
      error: function(xhr, status, error) {
        // Show an error message on the page
        $('#message').text('An error occurred while sending the email.');
        alert('An error occurred while sending the email.');
        // Enable the button and restore its text
        $('.sent-notice').prop('disabled', false);
        $('.sent-notice').text('Send');
      }
    });
  });
});

</script>
