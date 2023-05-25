<?php
    $email = $_POST['email'];
    //connect to database
    include_once('connection.php');
    
    require('../adminViews/phpmailer/otp_resend_owner_username.php');
    require('../adminViews/phpmailer/otp_resend_owner_email.php');
    
    require('../adminViews/phpmailer/otp_resend_admin_usernamephp');
    require('../adminViews/phpmailer/otp_resend_admin_email.php');
    

//OWNER EMAIL ENTRY
    $check_email = "SELECT * FROM owner_accounts WHERE owner_email='$email'";
    $emailresult = mysqli_query($con, $check_email);
//OWNER USERNAME ENTRY
    $check_username = "SELECT * FROM owner_accounts WHERE owner_username='$email'";
    $usernameresult = mysqli_query($con,$check_username);
//ADMIN EMAIL ENTRY
    $adcheck_email = "SELECT * FROM admin_accounts WHERE admin_email='$email'";
    $ademailresult = mysqli_query($con, $adcheck_email);
//ADMIN USERNAME ENTRY
    $adcheck_username = "SELECT * FROM admin_accounts WHERE admin_username='$email'";
    $adusernameresult = mysqli_query($con,$adcheck_username);


//OWNER USERNAME ENTRY
    if(mysqli_num_rows($usernameresult)>0){
      $get_email = "SELECT owner_email FROM owner_accounts WHERE owner_username='$email'";
      $get_result=mysqli_query($con, $get_email);
      $acquired_email = mysqli_fetch_assoc($get_result);

      $gen_code =  rand(999999, 111111);

      $insert_code = "UPDATE owner_accounts SET code = '$gen_code' WHERE owner_username = '$email'";
      $run_query =  mysqli_query($con, $insert_code);

      if($run_query){
        Resend_owner_username($acquired_email['owner_email'], $gen_code);

      //   $subject = "Password Reset Code"; 
      //   $message = "Your password reset code is $gen_code";
      //   $sender = "From: guyrx90@gmail.com";
      //   if(mail($acquired_email['owner_email'], $subject, $message, $sender)){
      //     echo "A new one time password was sent to your email";
      //   }
      //    else{
      //        echo "An error occured while sending the email";
      //        }
      }
     else{
        echo "An error occured while generating the code";
         }
    }

//OWNER EMAIL ENTRY
    else if(mysqli_num_rows($emailresult)>0){
        $gen_code =  rand(999999, 111111);
        $insert_code = "UPDATE owner_accounts SET code = '$gen_code' WHERE owner_email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if($run_query){

        Resend_owner_email($email, $gen_code);

          // $subject = "Password Reset Code";
          // $message = "Your password reset code is $gen_code";
          // $sender = "From: guyrx90@gmail.com";
          // if(mail($email, $subject, $message, $sender)){
          //   echo "A new one time password was sent to your email";
          // }
          //  else{
          //      echo "An error occured while sending the email.";
          //      }


        }
       else{
          echo "An error occured while generating the code";
           }
    }

//ADMIN USERNAME ENTRY
    else if(mysqli_num_rows($adusernameresult)>0){
      $adget_email = "SELECT admin_email FROM admin_accounts WHERE admin_username='$email'";
      $adget_result=mysqli_query($con, $adget_email);
      $adacquired_email = mysqli_fetch_assoc($adget_result);
      $adgen_code =  rand(999999, 111111);
      $adinsert_code = "UPDATE admin_accounts SET code = '$adgen_code' WHERE admin_username = '$email'";
    
      $adrun_query =  mysqli_query($con, $adinsert_code);
      if($adrun_query){
        Resend_admin_username($adacquired_email['admin_email'], $gen_code);

        // $adsubject = "Password Reset Code";
        // $admessage = "Your password reset code is $adgen_code";
        // $adsender = "From: guyrx90@gmail.com";
        // if(mail($adacquired_email['admin_email'], $adsubject, $admessage, $adsender)){
        //   echo "A new one time password was sent to your email";
        // }
        //  else{
        //      echo "An error occured while sending the email";
        //      }
      }
     else{
        echo "An error occured while generating the code";
         }
    }

//ADMIN EMAIL ENTRY
    else if(mysqli_num_rows($ademailresult)>0){
        $adgen_code =  rand(999999, 111111);
        $adinsert_code = "UPDATE admin_accounts SET code = '$adgen_code' WHERE admin_email = '$email'";
        $adrun_query =  mysqli_query($con, $adinsert_code);
        if($adrun_query){
            Resend_admin_email($email, $gen_code);
          // $adsubject = "Password Reset Code";
          // $admessage = "Your password reset code is $adgen_code";
          // $adsender = "From: guyrx90@gmail.com";
          // if(mail($email, $adsubject, $admessage, $adsender)){
          //   echo "A one time password was sent to your email";
          // }
          //  else{
          //      echo "An error occured while sending the email";
          //      }

        }
       else{
          echo "An error occured while generating the code";}
        
        }
    else{
        echo "The email or username you entered does not exists in our record";
    }

?>