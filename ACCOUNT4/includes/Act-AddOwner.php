<?php
require_once('connection.php');


if (isset($_POST['addowner_button'])) {


    
    if (empty($_POST['owner_fname']) || empty($_POST['owner_lname']) || empty($_POST['owner_username']) || empty($_POST['owner_password'])) {
        header("location: ../AddOwnerAccount.php?empty");
        #RESULT IF FIELDS ARE EMPTY
    } else {
        $OwnerFname = mysqli_real_escape_string($con, $_POST['owner_fname']);
        $OwnerLname = mysqli_real_escape_string($con, $_POST['owner_lname']);
        $OwnerUsername = mysqli_real_escape_string($con, $_POST['owner_username']);
        $OwnerEmail = mysqli_real_escape_string($con, $_POST['owner_email']);
        $OwnerPassword = mysqli_real_escape_string($con, $_POST['owner_password']);

        if (!preg_match("/^[a-zA-Z -]*$/", $OwnerFname) || !preg_match("/^[a-zA-Z -]*$/", $OwnerLname)) {
            header("location: ../AddOwnerAccount.php?Invalid");
            #RESULT IF FIRSTNAME AND LASTNAME HAVE SPECIAL CHARACTERS AND NUMBERS (ALLOWS SPACE AND -)
            exit();
            } else {
                $query = "select * from owner_accounts where owner_username ='" . $OwnerUsername . "'";
                $result = mysqli_query($con, $query);
                if (mysqli_fetch_assoc($result)) {
                    header("location: ../AddOwnerAccount.php?User");
                    #RESULT IF USERNAME IS ALREADY TAKEN
                    exit();
                } else {
                    $query = "SELECT * FROM owner_accounts WHERE owner_email = '" . $OwnerEmail . "'";
                    $result = mysqli_query($con, $query);

                    if (mysqli_fetch_assoc($result)) {
                        header("location: ../AddOwnerAccount.php?Email");
                        #RESULT IF EMAIL IS ALREADY TAKEN
                        exit();
                    } else {
                        $Hash = password_hash($OwnerPassword, PASSWORD_DEFAULT);
                        $query = "insert into owner_accounts (owner_fname, owner_lname, owner_username, owner_email, owner_password) values ('$OwnerFname','$OwnerLname','$OwnerUsername','$OwnerEmail','$Hash')";
                        $result = mysqli_query($con, $query);
                        header("location: ../AddOwnerAccount.php?success");
                        #RESULT IF ALL REQUIREMENTS ARE ACCOMPLISHED IT WILL AUTOMATICALLY BE ADDED AT DATABASE
                        exit();
                    }
                }
            }
        }
    }
 else {
    header("location:../RecordOwnerAccount.php");
    exit();
}
