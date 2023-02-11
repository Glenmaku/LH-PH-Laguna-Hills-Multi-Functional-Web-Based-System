<?php
  require("connection.php");

  if(isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    $sql = "SELECT owner_email FROM owner_accounts WHERE owner_fname='$firstName' AND owner_lname='$lastName'";
    $result = $con->query($sql);

    $emails = array();
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($emails, $row['owner_email']);
      }
    }
    echo json_encode($emails);

    $con->close();
  }
?>