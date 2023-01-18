
<?php
    $email = $_POST['email'];
    //connect to database
    include_once('connection.php');
    $query = "SELECT * FROM owner_accounts WHERE owner_email='".$email."'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result)>0){
        echo "match";
    }else{
        echo "no match";
    }
?>