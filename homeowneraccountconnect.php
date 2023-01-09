<!--JUST COPY THE CODE BETWEEN THE COMMENT AND PASTE IT TO THE HOMEOWNER BODY OR HEADER-->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCESS OWNER ACCOUNT</title>
</head>
<body>
 <!--///////////////////////////////////////FOR LOGIN PURPOSE////////////////////////////////////////////-->
<?php
if(isset($_GET['Welcome'])){

if($_SESSION['owner_I_D']){
     echo'<div>HOMEOWNER, You have successfully logged in!</div>';
}
else
{

}
}
else
{
  header("location:Login.php");
exit();  
}
?>
 <!--///////////////////////////////////////FOR LOGIN PURPOSE////////////////////////////////////////////-->
    <h1>Owner Account</h1>
<div> 
</body>

</html>

