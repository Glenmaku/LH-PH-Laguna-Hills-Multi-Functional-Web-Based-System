<?php
include 'connection.php';


$AFname = $_POST['AdminFname'];
$ALname = $_POST['AdminLname'];
$AEmail = $_POST['AdminEmail'];
$AUsername = $_POST['AdminUsername'];
$APassword = $_POST['AdminPassword'];
if (empty($AFname) || empty($ALname) || empty($AEmail) || empty($AUsername) || empty($APassword)) {
    echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
    All input fields are required
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
}
else{
if (!preg_match("/^[a-zA-Z -]*$/", $AFname) || !preg_match("/^[a-zA-Z -]*$/", $ALname)) {
    echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
    Invalid Characters
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>';
}
else{
    if (!filter_var($AEmail, FILTER_VALIDATE_EMAIL)) {
        echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
Invalid Email
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
    }
    else{
        $queryUsername = "SELECT * FROM admin_accounts WHERE admin_username ='".$AUsername."'";
        $resultUsername = mysqli_query($con, $queryUsername);
        if (mysqli_fetch_assoc($resultUsername)) {
            echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
            username is already taken
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>';
        }
        else{
            $queryEmail = "SELECT * FROM admin_accounts WHERE admin_email = '".$AEmail."'";
                $resultEmail = mysqli_query($con, $queryEmail);
                if (mysqli_fetch_assoc($resultEmail)) {
                    echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
                    email is already taken
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>';
                }
                else{
                    $Hash = password_hash($APassword, PASSWORD_DEFAULT);
                    $adminQuery="INSERT INTO `admin_accounts` (admin_fname,admin_lname,admin_username,admin_email,admin_password) values ('$AFname','$ALname','$AUsername','$AEmail','$Hash')";
                    $admin_result=mysqli_query($con,$adminQuery);

                    if($admin_result){
                        echo'<div class="alert alert-success alert-dismissible fade show w-100" role="alert" >
                        User Successfully Added
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                           </div>';
                        }
                        else{
                            echo'<div class="alert alert-danger alert-dismissible fade show w-100" role="alert" >
                            Please check your query
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                               </div>';
                            }
                    }
            }

        } }
    }

?>