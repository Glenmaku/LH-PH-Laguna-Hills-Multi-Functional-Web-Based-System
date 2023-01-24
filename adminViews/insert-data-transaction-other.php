<?php
// include "includes/connection.php";

// extract($_POST);

// if(isset($_POST['trans_nosend']) && isset($_POST['categorysend']) && isset($_POST['namesend']) && isset($_POST['quantitysend']) && isset($_POST['pricesend']) && isset($_POST['subtotalsend']) && isset($_POST['rowId'])){
    
//     //records_transaction_no	name	date	total	created_at

//     $sql = "INSERT into transac_other (transaction_no, t_name, category,quantity,price,subtotal,rowid) values ('$trans_nosend','$namesend','$categorysend','$quantitysend','$pricesend','$subtotalsend','$rowId')";
//     $result = mysqli_query($con,$sql);

//     if($result){
//     echo "<script>alert('successully sent to database');</script>";
//     } 
//     else {
//         echo "<script>alert('oh no');</script>";
//     }
// }

$data = $_POST['data'];
$conn = new mysqli('localhost','root','','lhph');

$transaction_number = $data['transaction_number'];
$name = $data['name'];

foreach ($data['services'] as $row) {
$conn->query("INSERT INTO transac_other (transaction_no, t_name, category, quantity, price, subtotal) VALUES ('$transaction_number', '$name', '$row[category]','$row[quantity]','$row[price]','$row[subtotal]')");
}
echo "Data submitted successfully in other transaction! ";