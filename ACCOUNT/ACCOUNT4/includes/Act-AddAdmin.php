<?php
require_once('connection.php');


if (isset($_POST['addadmin_button'])) {


    
    if (empty($_POST['admin_fname']) || empty($_POST['admin_lname']) || empty($_POST['admin_username']) || empty($_POST['admin_email']) || empty($_POST['admin_password'])) {
        header("location: ../AddAdminAccount.php?empty");
        #RESULT IF FIELDS ARE EMPTY
    } else {
        $AdminFname = mysqli_real_escape_string($con, $_POST['admin_fname']);
        $AdminLname = mysqli_real_escape_string($con, $_POST['admin_lname']);
        $AdminUsername = mysqli_real_escape_string($con, $_POST['admin_username']);
        $AdminEmail = mysqli_real_escape_string($con, $_POST['admin_email']);
        $AdminPassword = mysqli_real_escape_string($con, $_POST['admin_password']);

        if (!preg_match("/^[a-zA-Z -]*$/", $AdminFname) || !preg_match("/^[a-zA-Z]*$/", $AdminLame)) {
            header("location: ../AddAdminAccount.php?Invalid");
            #RESULT IF FIRSTNAME AND LASTNAME HAVE SPECIAL CHARACTERS AND NUMBERS (ALLOWS SPACE AND -)
            exit();
        } else {
            if (!filter_var($AdminEmail, FILTER_VALIDATE_EMAIL)) {
                header("location: ../AddAdminAccount.php?VEmail");
                #RESULT IF EMAIL IS NOT SEEN AS EMAIL
                exit();
            } else {
                $query = "select * from admin_accounts where admin_username ='" . $AdminUsername . "'";
                $result = mysqli_query($con, $query);
                if (mysqli_fetch_assoc($result)) {
                    header("location: ../AddAdminAccount.php?User");
                    #RESULT IF USERNAME IS ALREADY TAKEN
                    exit();
                } else {
                    $query = "select * from admin_accounts where admin_email = '" . $AdminEmail . "'";
                    $result = mysqli_query($con, $query);

                    if (mysqli_fetch_assoc($result)) {
                        header("location: ../AddAdminAccount.php?Email");
                        #RESULT IF EMAIL IS ALREADY TAKEN
                        exit();
                    } else {
                        $Hash = password_hash($AdminPassword, PASSWORD_DEFAULT);
                        $query = "insert into admin_accounts (admin_fname, admin_lname, admin_username, admin_email, admin_password) values ('$AdminFname','$AdminLname','$AdminUsername','$AdminEmail','$Hash')";
                        $result = mysqli_query($con, $query);
                        header("location: ../AddAdminAccount.php?success");
                        #RESULT IF ALL REQUIREMENTS ARE ACCOMPLISHED IT WILL AUTOMATICALLY BE ADDED AT DATABASE
                        exit();
                    }
                }
            }
        }
    }
} else {
    header("location:../RecordAdminAccount.php");
    exit();
}
