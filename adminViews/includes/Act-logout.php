<?php
session_start();
unset($_SESSION['owner_I_D']);
header('location: ../index.php');
?>