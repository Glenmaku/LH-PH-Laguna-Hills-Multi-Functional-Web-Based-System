<?php

$data = $_POST['data'];
$conn = new mysqli('localhost','root','','lhph');

$transaction_number = $data['transaction_number'];
$name = $data['name'];

foreach ($data['services'] as $row) {
$conn->query("INSERT INTO transac_other (transaction_no, t_name, category, quantity, price, subtotal) VALUES ('$transaction_number', '$name', '$row[category]','$row[quantity]','$row[price]','$row[subtotal]')");
}
echo "Data submitted successfully in other transaction! ";