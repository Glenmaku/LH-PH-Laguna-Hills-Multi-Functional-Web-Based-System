<?php
include 'connection.php';


$AFname = $_POST['AdminFname'];
$ALname = $_POST['AdminLname'];
$AEmail = $_POST['AdminEmail'];
$AUsername = $_POST['AdminUsername'];
$APassword = $_POST['AdminPassword'];
if (empty($AFname) || empty($ALname) || empty($AEmail) || empty($AUsername) || empty($APassword)) {
    echo 'All input fields are required';}
else{
if (!preg_match("/^[a-zA-Z -]*$/", $AFname) || !preg_match("/^[a-zA-Z -]*$/", $ALname)) {
echo 'INVALID CHARACTERS';
}
else{
    if (!filter_var($AEmail, FILTER_VALIDATE_EMAIL)) {
        echo'INVALID EMAIL';
    }
    else{
        $queryUsername = "SELECT * FROM admin_accounts WHERE admin_username ='".$AUsername."'";
        $resultUsername = mysqli_query($con, $queryUsername);
        if (mysqli_fetch_assoc($resultUsername)) {
            echo 'username is already taken';
        }
        else{
            $queryEmail = "SELECT * FROM admin_accounts WHERE admin_email = '".$AEmail."'";
                $resultEmail = mysqli_query($con, $queryEmail);
                if (mysqli_fetch_assoc($resultEmail)) {
                    echo 'email is already taken';
                }
                else{
                    $Hash = password_hash($APassword, PASSWORD_DEFAULT);
                    $adminQuery="INSERT INTO `admin_accounts` (admin_fname,admin_lname,admin_username,admin_email,admin_password) values ('$AFname','$ALname','$AUsername','$AEmail','$Hash')";
                    $admin_result=mysqli_query($con,$adminQuery);

                    if($admin_result){
                          echo 'User Successfully Added';
                        }
                        else{
                             echo 'Please check your query';
                            }
                    }
            }

        } }
    }

?>