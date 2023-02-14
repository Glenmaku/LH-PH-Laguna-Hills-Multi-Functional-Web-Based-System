<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lhph";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all unread messages
$sql = "SELECT * FROM message_tb WHERE is_read = 0";
$result = $conn->query($sql);

$messages = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

// Mark all unread messages as read
$update_sql = "UPDATE message_tb SET is_read = 1 WHERE is_read = 0";
$conn->query($update_sql);

$conn->close();

// Return unread messages as JSON
header('Content-Type: application/json');
echo json_encode($messages);
?>
