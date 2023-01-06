<?php
require_once('header.php');
if(isset($_GET['Well']))
{
 if(isset($_SESSION['Employee_U_D']))
    { 
        echo '<div class="loginsuccess"> You have Successfully Logged in! </div>';
    }
    else
    {
    }
}
else
{
        header("location: ../Login.php");
        exit();
}
require_once('footer.php');
?>