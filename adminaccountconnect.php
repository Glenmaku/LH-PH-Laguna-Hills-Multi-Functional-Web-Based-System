<!--JUST COPY THE CODE BETWEEN THE COMMENT AND PASTE IT TO THE ADMIN BODY OR HEADER-->
<?php 
session_start();
if (!empty($_SESSION['admin_I_D'])) {
    $username = $_SESSION['admin_username'];
    $adminid = $_SESSION['admin_I_D'];
} else {
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESS ADMIN ACCOUNT</title>
</head>
<body>   
<!--///////////////////////////////////////FOR LOGIN PURPOSE////////////////////////////////////////////-->

 <?php
    if (isset($_GET['Welcome'])) {
        echo '<div>ADMIN, You have successfully logged in!</div>';
        echo $_SESSION['admin_username'];
    }
    ?>
 <!--///////////////////////////////////////FOR LOGIN PURPOSE////////////////////////////////////////////-->
    <h1>Admin Account</h1>
<div>
  
<!--LOGOUTING EWAN KO LANG KUNG PATI UNG SESSION DESTROY KASAMA--->
<a href="includes/Act-logout.php">Logout</a>

           
</body>
</html>

<?php
    // logout code goes here
    //session_destroy();
   // unset($_SESSION);
    ?>