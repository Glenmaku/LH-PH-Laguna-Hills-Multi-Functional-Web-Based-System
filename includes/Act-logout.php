<?php
session_start();
unset($_SESSION['owner_I_D']);unset($_SESSION['admin_I_D']);
session_destroy();
header('location: ../index.php');
?>