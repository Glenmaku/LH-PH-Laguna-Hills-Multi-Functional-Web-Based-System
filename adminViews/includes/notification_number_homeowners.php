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

$read_sql = "SELECT * FROM message_tb WHERE status = 'read'";
$unread_sql = "SELECT * FROM message_tb WHERE status = 'unread'";

$read_result = $conn->query($read_sql);
$unread_result = $conn->query($unread_sql);

$read_count = $read_result->num_rows;
$unread_count = $unread_result->num_rows;

echo "Read: " . $read_count . "<br>";
echo "Unread: " . $unread_count;

$conn->close();
?>
