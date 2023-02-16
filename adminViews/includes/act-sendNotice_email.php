<?php
// require("connection.php");
// require("../phpmailer/act-sendNotice.php");

// if(isset($_POST['username'])){
//   $username = $_POST['username'];
//   $lotid = $_POST['lotid'];

// // $query = "SELECT oa.owner_email, oa.owner_fname, oa.owner_lname, ad.Balance FROM assigned_lot al
// //   JOIN association_dues ad ON al.lot_id = ad.Lot_ID
// //   JOIN owner_accounts oa ON al.owner_username = oa.owner_username
// //   WHERE oa.owner_username = '.$username.'";
// $query = "SELECT oa.owner_username as username, oa.owner_fname as fname, oa.owner_lname as lname, oa.owner_email as email, ad.Lot_ID as lot, ad.Balance as bal
// FROM owner_accounts oa
// JOIN assigned_lot al ON oa.owner_username = al.owner_username
// JOIN association_dues ad ON al.lot_id = ad.Lot_ID
// WHERE oa.owner_username = '.$username.' AND al.lot_id ='.$lotid.'";
// $result = mysqli_query($con, $query);
// while($row = mysqli_fetch_assoc($result)){
//     $uemail = $row['email'];
//     $name = $row['fname'] . ' ' . $row['lname'];
//     $balance = $row['bal'];

//     $subject = "Notice for Remaining Balance";
//     $message = "Dear $name,<br><br>
//     We hope this message finds you well. We are writing to remind you that there is currently a remaining balance on your account in the amount of $balance. As a valued customer, we kindly request that you settle this amount as soon as possible.<br><br>
//     Please note that failure to pay this balance may result in additional fees or the suspension of your account until the balance is cleared. We want to avoid any inconvenience or interruption in our service, so please do not hesitate to contact us if you have any questions or concerns.<br><br>
//     Thank you for your attention to this matter. We appreciate your business and look forward to continuing to serve you.<br><br>
//     Sincerely,<br>
//     Laguna Hills Homeowner Association";
//     $email = $uemail;
//   sendEmail($email, $subject, $message ); 
//     echo "ngee";
// }

// }

// else{
//   echo "ayaw gumana ih";
// }

?>
<?php
require("connection.php");
require("../phpmailer/act-sendNotice.php");

if(isset($_POST['username'])){
  $username = $_POST['username'];
  $lotid = $_POST['lotid'];

  $query = "SELECT oa.owner_username as username, oa.owner_fname as fname, oa.owner_lname as lname, oa.owner_email as email, ad.Lot_ID as lot, ad.Balance as bal
  FROM owner_accounts oa
  JOIN assigned_lot al ON oa.owner_username = al.owner_username
  JOIN association_dues ad ON al.lot_id = ad.Lot_ID
  WHERE oa.owner_username = '$username' AND al.lot_id = '$lotid'";
  $result = mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($result)){
      $uemail = $row['email'];
      $name = $row['fname'] . ' ' . $row['lname'];
      $balance = $row['bal'];

      $subject = "Notice for Remaining Balance";
      $message = "Dear $name,<br><br>
      We hope this message finds you well. We are writing to remind you that there is currently a remaining balance on your account in the amount of $balance. As a valued customer, we kindly request that you settle this amount as soon as possible.<br><br>
      Please note that failure to pay this balance may result in additional fees or the suspension of your account until the balance is cleared. We want to avoid any inconvenience or interruption in our service, so please do not hesitate to contact us if you have any questions or concerns.<br><br>
      Thank you for your attention to this matter. We appreciate your business and look forward to continuing to serve you.<br><br>
      Sincerely,<br>
      Laguna Hills Homeowner Association";
      $email = $uemail;
      echo "Sending email to $name at $email<br>"; // added echo statement
      sendEmail($email, $subject, $message ); 
      echo "Email sent successfully to $name at $email<br>"; // added echo statement
  }
}

else{
  echo "ayaw gumana ih";
}
?>